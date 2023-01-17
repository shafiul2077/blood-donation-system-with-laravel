<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class donor extends Model
{
    use HasFactory;

    public function acceptor()
    {
        return $this->belongsTo(Acceptor::class);
    }
}
