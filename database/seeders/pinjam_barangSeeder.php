<?php

// database/seeders/PinjamBarangSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class pinjam_barangSeeder extends Seeder
{
    public function run()
    {
        DB::table('pinjam_barang')->insert([
            [
                'peminjam' => 'User1',
                'tgl_pinjam' => '2024-10-01',
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'jml_barang' => 2,
                'tgl_kembali' => '2024-10-10',
                'kondisi' => 'Baik'
            ],
            [
                'peminjam' => 'User2',
                'tgl_pinjam' => '2024-10-05',
                'id_barang' => 2,
                'nama_barang' => 'Proyektor',
                'jml_barang' => 1,
                'tgl_kembali' => '2024-10-12',
                'kondisi' => 'Baik'
            ]
        ]);
    }
}
