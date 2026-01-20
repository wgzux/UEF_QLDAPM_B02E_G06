<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class BookingGuest extends Model
{
    use HasFactory;

    protected $fillable = [
        'booking_id',
        'room_type_id',
        'full_name',
        'passport_id',
        'nationality',
        'dob',
        'gender',
        'is_primary_contact',
    ];

    protected $casts = [
        'dob' => 'date',
        'is_primary_contact' => 'boolean',
    ];

    public function booking(): BelongsTo
    {
        return $this->belongsTo(Booking::class);
    }
}
