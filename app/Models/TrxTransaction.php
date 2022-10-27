<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\SoftDeletes;

class TrxTransaction extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code',
        'proof_of_payment'
    ];

    /**
     * Get the trnsactionDetail that owns the TrxTransaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function trnsactionDetail(): BelongsTo
    {
        return $this->belongsTo(TaTransactionDetail::class, 'transaction_detail_id', 'id');
    }

    /**
     * Get the transactionStatus that owns the TrxTransaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function transactionStatus(): BelongsTo
    {
        return $this->belongsTo(MaTransactionStatus::class, 'trnsaction_status_id', 'id');
    }

    /**
     * Get the tripStatus that owns the TrxTransaction
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function tripStatus(): BelongsTo
    {
        return $this->belongsTo(MaTripStatus::class, 'trip_status_id', 'id');
    }
}
