<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GrandPrix extends Model
{
    use HasFactory;

    protected $fillable = ['race_id', 'driver_id'];

    public function race()
    {
        // dd($this->hasOne(Race::class)->toSql());
        return $this->hasOne(Race::class, 'id');
    }

    public function driver()
    {
        return $this->hasOne(Driver::class, 'id');
    }
}
