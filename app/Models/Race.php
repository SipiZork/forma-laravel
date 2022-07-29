<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Race extends Model
{
    use HasFactory;

    protected $fillable = ['name', 'date', 'active', 'end', 'voteable'];

    public function winner()
    {
        return $this->hasOne(Winner::class);
    }

    public function grandPrix()
    {
        return $this->belongsToMany(GrandPrix::class, 'id');
    }
}
