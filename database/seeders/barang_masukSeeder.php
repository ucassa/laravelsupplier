<?php

// database/seeders/barang_masukSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class barang_masukSeeder extends Seeder
{
    public function run()
    {
        DB::table('barang_masuk')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'tgl_masuk' => '2024-10-01',
                'jml_masuk' => 5,
                'id_supplier' => 1
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Proyektor',
                'tgl_masuk' => '2024-10-05',
                'jml_masuk' => 3,
                'id_supplier' => 2
            ]
        ]);
    }
}
