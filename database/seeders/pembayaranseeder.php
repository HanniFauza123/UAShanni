<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class pembayaranseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('pembayarans')->insert([
            'kode_payment' => "1212",
            'jenis' => 'Ces',
            'total_harga' => 'Rp.250.000,00',
            'jumlah_produk' => '10',
        ]);
    }
}