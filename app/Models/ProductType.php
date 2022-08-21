<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class ProductType extends Model
{
    protected $fillable = [
        'name',
        'icon'
    ];

    public function instance(): BelongsTo
    {
        return $this->belongsTo(Instance::class, 'instance_id');
    }

    public function limitations(): HasMany
    {
        return $this->hasMany(Limitation::class);
    }

    public function products(): HasMany
    {
        return $this->hasMany(LineItem::class);
    }
}
