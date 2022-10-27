<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;

class TaCrew extends Model
{
    use HasFactory;

    /**
     * Get the helper that owns the TaCrew
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function helper(): BelongsTo
    {
        return $this->belongsTo(User::class, 'helper_id', 'id');
    }

    /**
     * Get the driver that owns the TaCrew
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function driver(): BelongsTo
    {
        return $this->belongsTo(User::class, 'driver_id', 'id');
    }

    /**
     * Get the vehicle that owns the TaCrew
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(MaVehicle::class, 'vehicle_id', 'id');
    }

    /**
     * Get all of the transactionDetails for the TaCrew
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactionDetails(): HasMany
    {
        return $this->hasMany(TaTransactionDetail::class);
    }
}
