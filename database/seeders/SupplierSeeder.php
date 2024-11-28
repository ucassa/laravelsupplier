<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use DB;

class SupplierSeeder extends Seeder
{
    public function run()
    {
        DB::table('supplier')->insert([
            ['nama_supplier' => 'Supplier A', 'alamat_supplier' => 'Alamat A', 'telepon_supplier' => '08123456789'],
            ['nama_supplier' => 'Supplier B', 'alamat_supplier' => 'Alamat B', 'telepon_supplier' => '08234567890'],
            ['nama_supplier' => 'Supplier C', 'alamat_supplier' => 'Alamat C', 'telepon_supplier' => '08345678901'],
        ]);
    }
}
