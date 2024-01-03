<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class data_ortu extends Model
{
    use HasFactory;

    // one to many relationship with the user
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
