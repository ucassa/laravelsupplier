<?php

// database/seeders/StokSeeder.php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class StokSeeder extends Seeder
{
    public function run()
    {
        DB::table('stok')->insert([
            [
                'id_barang' => 1,
                'nama_barang' => 'Laptop',
                'jml_masuk' => 10,
                'jml_keluar' => 2,
                'total_barang' => 8
            ],
            [
                'id_barang' => 2,
                'nama_barang' => 'Proyektor',
                'jml_masuk' => 5,
                'jml_keluar' => 1,
                'total_barang' => 4
            ]
        ]);
    }
}
