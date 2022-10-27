<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MaRole extends Model
{
    use HasFactory;
    protected $fillable = [
        'name'
    ];
    /**
     * Get all of the profiles for the MaRole
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function profiles(): HasMany
    {
        return $this->hasMany(TaProfile::class);
    }
}
