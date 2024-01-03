<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    // one to one relationship with the user
    public function user()
    {
        return $this->hasOne(User::class);
    }
}
