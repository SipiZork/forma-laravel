<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Winner extends Model
{
    use HasFactory;

    protected $fillable = ['first', 'second', 'third', 'fastest'];

    public function race()
    {
        return $this->belongsTo(Race::class);
    }
}
