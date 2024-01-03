<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'password' => 'hashed',
    ];

    // one to one relationship with the role
    public function role()
    {
        return $this->belongsTo(role::class);
    }

    // one to many relationship with the alamat_dan_kontak
    public function alamat_dan_kontak()
    {
        return $this->hasMany(alamat_dan_kontak::class);
    }

    // one to many relationship with the data_ortu
    public function data_ortu()
    {
        return $this->hasMany(data_ortu::class);
    }

    // one to many relationship with the wali
    public function data_wali()
    {
        return $this->hasMany(data_wali::class);
    }

    // one to many relationship with the attendance
    public function attendance()
    {
        return $this->hasMany(attendance::class);
    }

    // one to many relationship with the attendance
    public function persembahan()
    {
        return $this->hasOne(persembahan::class);
    }
}
