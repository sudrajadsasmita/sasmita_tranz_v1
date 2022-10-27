<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaTripStatus extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
    ];
    /**
     * Get all of the transaction for the MaTransactionStatus
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function transactions(): HasMany
    {
        return $this->hasMany(TrxTransaction::class);
    }
}
