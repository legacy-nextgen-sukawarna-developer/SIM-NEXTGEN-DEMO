<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class persembahan extends Model
{
    use HasFactory;

    // one to one relationship with the role
    public function user()
    {
        return $this->belongsTo(user::class);
    }
}
