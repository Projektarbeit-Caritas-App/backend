<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasShortflakePrimary;

class Organization extends Model
{
    use HasShortflakePrimary, HasFactory;

    protected $fillable = [
        'name',
        'street',
        'postcode',
        'city',
        'contact'
    ];

    public function instance(): BelongsTo
    {
        return $this->belongsTo(Instance::class);
    }

    public function users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
