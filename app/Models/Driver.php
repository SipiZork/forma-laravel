<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Driver extends Model
{
    use HasFactory;

    protected $fillable = ['first_name', 'last_name', 'team', 'number', 'nation'];

    public function grandPrix()
    {
        $this->belongsToMany(GrandPrix::class);
    }
}
