<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Kra8\Snowflake\HasShortflakePrimary;

class LimitationSet extends Model
{
    use HasShortflakePrimary, HasFactory;

    protected $fillable = [
        'name',
        'valid_from',
        'valid_until'
    ];

    public function instance(): BelongsTo
    {
        return $this->belongsTo(Instance::class, 'instance_id');
    }

    public function limitations(): HasMany
    {
        return $this->hasMany(Limitation::class);
    }

    public function persons(): BelongsToMany
    {
        return $this->belongsToMany(Person::class)->withTimestamps();
    }
}
