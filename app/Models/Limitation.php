<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Limitation extends Model
{
    protected $fillable = [
        'product_type_id',
        'limitation_set_id',
        'limit'
    ];

    public function productType(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }

    public function limitationSet(): BelongsTo
    {
        return $this->belongsTo(LimitationSet::class);
    }
}
