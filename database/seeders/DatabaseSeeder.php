<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            SupplierSeeder::class,
            UserSeeder::class,
            BarangSeeder::class,
            PinjamBarangSeeder::class,
            barang_masukSeeder::class,
            BarangKeluarSeeder::class,
            StokSeeder::class,
        ]);
    }
}
