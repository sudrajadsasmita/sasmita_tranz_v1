<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TaVehicleGallery extends Model
{
    use HasFactory;
    protected $fillable = [
        'photo',
        'is_default',
    ];

    /**
     * Get the vehicle that owns the TaVehicleGallery
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function vehicle(): BelongsTo
    {
        return $this->belongsTo(MaVehicle::class, 'vehicle_id', 'id');
    }
}
