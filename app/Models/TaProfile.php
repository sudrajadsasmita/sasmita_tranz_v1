<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\SoftDeletes;

class TaProfile extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'name',
        'date_birth',
        'phone',
        'address',
        'photo',
    ];
    /**
     * Get the role that owns the TaProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function role(): BelongsTo
    {
        return $this->belongsTo(MaRole::class, 'role_id', 'id');
    }

    /**
     * Get all of the Users for the TaProfile
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function Users(): HasMany
    {
        return $this->hasMany(User::class);
    }
}
