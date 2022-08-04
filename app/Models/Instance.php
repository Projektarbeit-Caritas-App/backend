<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Instance extends Model
{
    protected $fillable = [
        'name',
        'street',
        'postcode',
        'city',
        'contact'
    ];

    public function organizations(): HasMany
    {
        return $this->hasMany(Organization::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
