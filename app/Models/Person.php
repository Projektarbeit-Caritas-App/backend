<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Person extends Model
{
    protected $fillable = [
        'card_id',
        'gender',
        'age'
    ];

    public function card(): BelongsTo
    {
        return $this->belongsTo(Card::class);
    }

    public function limitationSets(): BelongsToMany
    {
        return $this->belongsToMany(LimitationSet::class);
    }

    public function lineItems(): HasMany
    {
        return $this->hasMany(LineItem::class);
    }
}
