<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Room;
use App\Models\RoomType;

class RoomSeeder extends Seeder
{
    public function run()
    {
        $deluxe = RoomType::where('type_name','Deluxe room')->first();
        $rose = RoomType::where('type_name','Rose house')->first();

        if($deluxe){
            for($i=1;$i<=5;$i++){
                Room::create(['room_type_id'=>$deluxe->id,'room_number'=>'D'.str_pad($i,2,'0',STR_PAD_LEFT),'status'=>'Active']);
            }
        }
        if($rose){
            for($i=1;$i<=2;$i++){
                Room::create(['room_type_id'=>$rose->id,'room_number'=>'R'.str_pad($i,2,'0',STR_PAD_LEFT),'status'=>'Active']);
            }
        }
    }
}
