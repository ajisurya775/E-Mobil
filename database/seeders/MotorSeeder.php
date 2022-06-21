<?php

namespace Database\Seeders;

use Faker\Factory as Faker;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MotorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $motor = [
            [
                'nama_motor' => 'Yamaha ZX25R',
                'mesin' => '250cc',
                'tipe_suspensi' => 'kencang',
                'tipe_transmisi' => 'kencang banget',
                'tahun' => '2019',
                'warna' => 'Hitam',
                'harga' => '100000000',
                'stok' => '100',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'nama_motor' => 'NMAX155',
                'mesin' => '155cc',
                'tipe_suspensi' => 'kencang',
                'tipe_transmisi' => 'kencang banget',
                'tahun' => '2021',
                'warna' => 'Hitam',
                'harga' => '27000000',
                'stok' => '100',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'nama_motor' => 'VARIO150',
                'mesin' => '150cc',
                'tipe_suspensi' => 'kencang',
                'tipe_transmisi' => 'kencang banget',
                'tahun' => '2022',
                'warna' => 'putih',
                'harga' => '25000000',
                'stok' => '100',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'nama_motor' => 'KLX150',
                'mesin' => '150cc',
                'tipe_suspensi' => 'kencang',
                'tipe_transmisi' => 'kencang banget',
                'tahun' => '2018',
                'warna' => 'Hijau',
                'harga' => '30000000',
                'stok' => '100',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'nama_motor' => 'CRV150',
                'mesin' => '150cc',
                'tipe_suspensi' => 'kencang',
                'tipe_transmisi' => 'kencang banget',
                'tahun' => '2018',
                'warna' => 'Hitam',
                'harga' => '28000000',
                'stok' => '100',
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ]
        ];

        foreach ($motor as $pilih) {
            DB::table('motors')->insert($pilih);
        }
    }
}
