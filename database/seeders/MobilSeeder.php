<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MobilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mobil =[
            [
                'nama_mobil' => 'Avansa',
                'mesin' => '3000cc',
                'kapasitas' => '6',
                'tipe' => '5',
                'tahun' => '2018',
                'warna' => 'Hitam',
                'harga' => '100000000',
                'stok' => '30',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'nama_mobil' => 'Kijang Inova',
                'mesin' => '5000cc',
                'kapasitas' => '7',
                'tipe' => '4',
                'tahun' => '2018',
                'warna' => 'Merah',
                'harga' => '150000000',
                'stok' => '10',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'nama_mobil' => 'Honda Civic',
                'mesin' => '5000cc',
                'kapasitas' => '4',
                'tipe' => '7',
                'tahun' => '2018',
                'warna' => 'Putih',
                'harga' => '500000000',
                'stok' => '10',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'nama_mobil' => 'Ayla Daihatsu',
                'mesin' => '2000cc',
                'kapasitas' => '6',
                'tipe' => '8',
                'tahun' => '2019',
                'warna' => 'Hitam',
                'harga' => '90000000',
                'stok' => '30',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'nama_mobil' => 'Starwargon',
                'mesin' => '4000cc',
                'kapasitas' => '10',
                'tipe' => '9',
                'tahun' => '2010',
                'warna' => 'Putih',
                'harga' => '50000000',
                'stok' => '10',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];
        foreach ($mobil as $pilih) {
            DB::table('mobils')->insert($pilih);
        }
    }
}
