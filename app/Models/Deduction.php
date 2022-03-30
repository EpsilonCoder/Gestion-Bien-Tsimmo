<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Deduction extends Model
{
    public function proprietes()
    {
        return $this->hasMany(Propriete::class);
    }
}
