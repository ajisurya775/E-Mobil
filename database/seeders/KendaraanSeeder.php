<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class KendaraanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $kendaraan =[
            [
                'motor_id' => '1',
                'nama' => 'Indra Gunawan',
                'desa' => 'Cililitan',
                'alamat' => 'Kisaran Sumatra Utara',
                'no_hp' => '081959129981',
                'status' => true,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'mobil_id' => '2',
                'nama' => 'Aji surya',
                'desa' => 'Melati II',
                'alamat' => 'Dusun Delima Kec.Perbaungan',
                'no_hp' => '085277532508',
                'status' => false,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
            [
                'motor_id' => '1',
                'nama' => 'Kintaro',
                'desa' => 'Petuaran',
                'alamat' => 'Perbaunagan Sumatra Utara',
                'no_hp' => '081541212221',
                'status' => true,
                'created_at' => date('Y-m-d H:i:s', time()),
                'updated_at' => date('Y-m-d H:i:s', time()),
            ],
        ];
        foreach ($kendaraan as $pilih) {
            DB::table('kendaraans')->insert($pilih);
        }
    }
}
