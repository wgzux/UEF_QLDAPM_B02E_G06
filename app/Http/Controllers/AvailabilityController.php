<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RoomType;
use App\Models\Room;

class AvailabilityController extends Controller
{
    public function check(Request $request)
    {
        $request->validate([
            'check_in' => 'required|date',
            'check_out' => 'required|date|after:check_in',
        ]);

        $start = $request->input('check_in');
        $end = $request->input('check_out');

        $roomTypes = RoomType::withCount(['rooms as total_rooms' => function ($q) {
            $q->where('status', 'Active');
        }])->get(['*']);

        $results = $roomTypes->map(function ($rt) use ($start, $end) {
            $available = Room::where('room_type_id', $rt->id)
                ->where('status', 'Active')
                ->whereDoesntHave('bookings', function ($q) use ($start, $end) {
                    $q->where(function ($qq) use ($start, $end) {
                        $qq->whereBetween('check_in_date', [$start, $end])
                           ->orWhereBetween('check_out_date', [$start, $end])
                           ->orWhere(function ($q2) use ($start, $end) {
                               $q2->where('check_in_date', '<=', $start)
                                  ->where('check_out_date', '>=', $end);
                           });
                    });
                })->count();

            return [
                'id' => $rt->id,
                'type_name' => $rt->type_name,
                'base_price' => $rt->base_price,
                'total_rooms' => $rt->total_rooms ?: 0,
                'available_rooms' => $available,
            ];
        });

        return response()->json(['room_types' => $results]);
    }

    // Return availability per date in a range: { '2025-09-01': [{id,type_name,base_price,total_rooms,available_rooms}, ...], ... }
    public function range(Request $request)
    {
        $request->validate([
            'start' => 'required|date',
            'end' => 'required|date|after_or_equal:start',
        ]);

        $start = $request->input('start');
        $end = $request->input('end');

        $roomTypes = RoomType::withCount(['rooms as total_rooms' => function ($q) {
            $q->where('status', 'Active');
        }])->get(['*']);

        $startDt = new \DateTime($start);
        $endDt = new \DateTime($end);
        $endDt->setTime(0,0,0);

        $data = [];
        $period = new \DatePeriod($startDt, new \DateInterval('P1D'), (clone $endDt)->modify('+1 day'));
        foreach($period as $dt){
            $iso = $dt->format('Y-m-d');
            $items = [];
            foreach($roomTypes as $rt){
                $total = intval($rt->total_rooms ?: 0);
                // count rooms of this type that have a booking overlapping this night
                $booked = \App\Models\Room::where('room_type_id', $rt->id)
                    ->where('status','Active')
                    ->whereHas('bookings', function($q) use ($iso){
                        $q->whereDate('check_in_date', '<=', $iso)
                          ->whereDate('check_out_date', '>', $iso);
                    })->count();

                $available = max(0, $total - $booked);
                $items[] = [
                    'id' => $rt->id,
                    'type_name' => $rt->type_name,
                    'base_price' => $rt->base_price,
                    'total_rooms' => $total,
                    'available_rooms' => $available,
                ];
            }
            $data[$iso] = $items;
        }

        return response()->json(['dates' => $data]);
    }
}
