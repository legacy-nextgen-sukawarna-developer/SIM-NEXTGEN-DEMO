<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class role extends Model
{
    use HasFactory;

    protected $fillable = ['role', 'level_name'];

    // one to one relationship with the user
    public function user()
    {
        return $this->hasOne(user::class);
    }
}
