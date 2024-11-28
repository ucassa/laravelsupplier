<?php

// database/seeders/BarangKeluarSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class BarangKeluarSeeder extends Seeder
{
    public function run()
    {
        DB::table('barang_keluar')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'tgl_keluar' => '2024-10-15',
                'jml_keluar' => 2,
                'lokasi' => 'Lab Komputer',
                'penerima' => 'User1'
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Proyektor',
                'tgl_keluar' => '2024-10-18',
                'jml_keluar' => 1,
                'lokasi' => 'Ruang A',
                'penerima' => 'User2'
            ]
        ]);
    }
}
