<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaTransactionDetail extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'pickup_location',
        'pickup_time',
        'back_time',
        'total_price'
    ];

    /**
     * Get the crew that owns the MaTransactionStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function crew(): BelongsTo
    {
        return $this->belongsTo(TaCrew::class, 'crew_id', 'id');
    }

    /**
     * Get the customer that owns the MaTransactionStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function customer(): BelongsTo
    {
        return $this->belongsTo(User::class, 'customer_id', 'id');
    }

    /**
     * Get all of the transaction for the MaTransactionStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(T::class, 'foreign_key', 'local_key');
    }
}
