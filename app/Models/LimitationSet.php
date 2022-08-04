<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class LimitationSet extends Model
{
    protected $fillable = [
        'name',
        'valid_from',
        'valid_until'
    ];

    public function limitations(): HasMany
    {
        return $this->hasMany(Limitation::class);
    }

    public function persons(): BelongsToMany
    {
        return $this->belongsToMany(Person::class);
    }
}
