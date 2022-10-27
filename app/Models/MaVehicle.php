<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaVehicle extends Model
{
    use HasFactory;
    protected $fillable = [
        'type',
        'registration_number',
        'class',
        'status',
        'price'
    ];
    /**
     * Get all of the galleries for the MaVehicle
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function galleries(): HasMany
    {
        return $this->hasMany(TaVehicleGallery::class);
    }
}
