<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;

class Booking extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'user_id',
        'room_id',
        'customer_name',
        'customer_email',
        'customer_phone',
        'check_in',
        'check_out',
        'adults',
        'children',
        'special_requests',
        'room_price',
        'service_price',
        'total_price',
        'status',
        'payment_status',
        'code',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'check_in' => 'date',
        'check_out' => 'date',
        'room_price' => 'decimal:2',
        'service_price' => 'decimal:2',
        'total_price' => 'decimal:2',
        'adults' => 'integer',
        'children' => 'integer',
    ];

    /**
     * Get the user that made the booking.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the room that was booked.
     */
    public function room(): BelongsTo
    {
        return $this->belongsTo(Room::class);
    }

    /**
     * Get all services associated with this booking.
     */
    public function services(): BelongsToMany
    {
        return $this->belongsToMany(Service::class, 'booking_service')
            ->withPivot('quantity', 'price_at_booking')
            ->withTimestamps();
    }

    /**
     * Calculate total number of nights.
     */
    public function getTotalNightsAttribute(): int
    {
        return $this->check_in->diffInDays($this->check_out);
    }

    /**
     * Calculate total number of guests.
     */
    public function getTotalGuestsAttribute(): int
    {
        return $this->adults + $this->children;
    }

    /**
     * Scope to get upcoming bookings.
     */
    public function scopeUpcoming($query)
    {
        return $query->where('check_in', '>=', now())
            ->whereIn('status', ['confirmed', 'pending']);
    }

    /**
     * Scope to get active bookings.
     */
    public function scopeActive($query)
    {
        return $query->where('check_in', '<=', now())
            ->where('check_out', '>=', now())
            ->where('status', 'checked_in');
    }

    /**
     * Scope to filter by status.
     */
    public function scopeStatus($query, $status)
    {
        return $query->where('status', $status);
    }
    public function roomTypes(): BelongsToMany
    {
        return $this->belongsToMany(RoomType::class, 'booking_room_types')
            ->withPivot('quantity', 'price_per_night', 'subtotal')
            ->withTimestamps();
    }
}
