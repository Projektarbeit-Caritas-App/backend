<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasShortflakePrimary;

class Card extends Model
{
    use HasShortflakePrimary, HasFactory;

    protected $fillable = [
        'last_name',
        'first_name',
        'street',
        'postcode',
        'city',
        'valid_from',
        'valid_until',
        'comment',
        'creator_id'
    ];

    protected $casts = [
        'valid_from' => 'datetime',
        'valid_until' => 'datetime'
    ];

    public function instance(): BelongsTo
    {
        return $this->belongsTo(Instance::class, 'instance_id');
    }

    public function creator(): BelongsTo
    {
        return $this->belongsTo(User::class, 'creator_id');
    }

    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }
}
