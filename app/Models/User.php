<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

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
        'no_jemaat',
        'email',
        'password',
    ];

    public static function boot()
    {
        parent::boot();

        static::creating(function ($user) {
            $user->no_jemaat = self::generateNoJemaat();
        });
    }

    protected static function generateNoJemaat(): string
    {
        $prefix = 'NSH';

        // Generate a random 7-digit number
        $randomNumber = str_pad(mt_rand(1, 999999), 6, '0', STR_PAD_LEFT);

        // Combine the parts to form no_jemaat
        return $prefix . $randomNumber;
    }

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
        return $this->hasOne(Role::class, 'user_id');
    }

    // one to one relationship with the congregation
    public function congregation()
    {
        return $this->belongsTo(congregation::class);
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
