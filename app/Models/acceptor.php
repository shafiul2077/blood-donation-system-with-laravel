<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class acceptor extends Model
{
    use HasFactory;


    public function donor()
    {
        return $this->hasMany(donor::class);
    }
}
