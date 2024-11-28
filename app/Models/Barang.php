<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    // Nama tabel
    protected $table = 'barang';

    // Primary Key
    protected $primaryKey = 'id_barang';

    // Kolom yang bisa diisi (mass assignable)
    protected $fillable = [
        'nama_barang',
        'spesifikasi',
        'lokasi',
        'kondisi',
        'jumlah_barang',
        'sumber_dana',
    ];

    // Tipe data auto-timestamp untuk created_at dan updated_at
    public $timestamps = true;

    // Format tanggal jika perlu
    protected $casts = [
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
    ];
}
