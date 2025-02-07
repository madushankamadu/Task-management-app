<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Objective extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'objective_id'
    ];

    public function strategies(): HasMany
    {
        return $this->hasMany(Strategy::class, 'objective_id', 'id');
    }

}
