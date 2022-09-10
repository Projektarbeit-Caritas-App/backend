<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Kra8\Snowflake\HasShortflakePrimary;

class Limitation extends Model
{
    use HasShortflakePrimary, HasFactory;

    protected $fillable = [
        'product_type_id',
        'limitation_set_id',
        'limit'
    ];

    public function instance(): BelongsTo
    {
        return $this->belongsTo(Instance::class, 'instance_id');
    }

    public function productType(): BelongsTo
    {
        return $this->belongsTo(ProductType::class);
    }

    public function limitationSet(): BelongsTo
    {
        return $this->belongsTo(LimitationSet::class);
    }
}
