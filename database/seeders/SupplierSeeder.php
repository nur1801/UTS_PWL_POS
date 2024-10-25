<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1,
                'supplier_kode' => 'ADM', 
                'supplier_nama' => 'Astra Daihatsu',
                'supplier_alamat' => 'Tangerang',
            ],
            [
                'supplier_id' => 2,
                'supplier_kode' => 'MAYORA', 
                'supplier_nama' => 'PT MAYORA INDAH TBK',
                'supplier_alamat' => 'Jakarta',
            ],
            [
                'supplier_id' => 3,
                'supplier_kode' => 'PTI', 
                'supplier_nama' => 'PT PARAGON TECHNOLOGY AND INNOVATION',
                'supplier_alamat' => 'Bandung',
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}