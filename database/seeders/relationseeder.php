<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\support\Facades\DB;

class relationseeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('relations')->insert([
            'pembayaran_kode_payment' => "1212",
            'pesanan_kode_buy' => "3434",
            'produk_kode_barang' => "5656",
            'status' => "Y",
        ]);
   }
}