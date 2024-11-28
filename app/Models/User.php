<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;
    
    protected $table = "user";
    protected $primaryKey = "id_user";
    // Kolom yang dapat diisi secara massal
    protected $fillable = [
        'nama',
        'username',
        'password',
        'level',
    ];

    // Kolom yang disembunyikan saat serialisasi
    protected $hidden = [
        'password',
        'remember_token',
    ];

    // Kolom yang harus dikonversi saat diakses
    protected $casts = [
        // Tambahkan hanya jika ada kolom ini di tabel
        'email_verified_at' => 'datetime',
    ];

    // Hash password sebelum disimpan
    protected static function booted()
    {
        static::creating(function ($user) {
            if (isset($user->password)) {
                $user->password = bcrypt($user->password);
            }
        });

        static::updating(function ($user) {
            if ($user->isDirty('password')) {
                $user->password = bcrypt($user->password);
            }
        });
    }
}
