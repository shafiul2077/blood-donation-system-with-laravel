<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    use HasFactory;

    public function donate()
    {
        return $this->hasOne(acceptor::class);
    }
}
