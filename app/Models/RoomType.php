<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class RoomType extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'slug',
        'description',
        'base_price',
        'max_capacity',
        'amenities',
        'image',
        'is_active',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'amenities' => 'array',
        'base_price' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    /**
     * Get all rooms for this room type.
     */
    public function rooms(): HasMany
    {
        return $this->hasMany(Room::class);
    }

    /**
     * Get all bookings for this room type.
     */
    public function bookings(): BelongsToMany
    {
        return $this->belongsToMany(Booking::class, 'booking_room_types')
            ->withPivot('quantity', 'price_per_night', 'subtotal')
            ->withTimestamps();
    }

    /**
     * Scope to get available room types for a date range.
     */
    public function scopeAvailable($query, $checkIn, $checkOut)
    {
        return $query->whereRaw("
            number_of_rooms > (
                SELECT COALESCE(SUM(booking_room_types.quantity), 0)
                FROM booking_room_types
                JOIN bookings ON bookings.id = booking_room_types.booking_id
                WHERE booking_room_types.room_type_id = room_types.id
                AND bookings.status IN ('confirmed', 'paid', 'pending')
                AND (
                    (bookings.check_in < ? AND bookings.check_out > ?)
                )
            )
        ", [$checkOut, $checkIn]);
    }
}
