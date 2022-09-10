<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasShortflakePrimary;

class Instance extends Model
{
    use HasShortflakePrimary, HasFactory;

    protected $fillable = [
        'name',
        'street',
        'postcode',
        'city',
        'contact'
    ];

    public function cards(): HasMany
    {
        return $this->hasMany(Card::class);
    }

    public function limitations(): HasMany
    {
        return $this->hasMany(Limitation::class);
    }

    public function limitationSets(): HasMany
    {
        return $this->hasMany(LimitationSet::class);
    }

    public function lineItems(): HasMany
    {
        return $this->hasMany(LineItem::class);
    }

    public function organizations(): HasMany
    {
        return $this->hasMany(Organization::class);
    }

    public function people(): HasMany
    {
        return $this->hasMany(Person::class);
    }

    public function productTypes(): HasMany
    {
        return $this->hasMany(ProductType::class);
    }

    public function reservations(): HasMany
    {
        return $this->hasMany(Reservation::class);
    }

    public function shops(): HasMany
    {
        return $this->hasMany(Shop::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }

    public function visits(): HasMany
    {
        return $this->hasMany(Visit::class);
    }
}
