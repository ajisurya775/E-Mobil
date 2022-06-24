<?php

namespace App\Repositories;

use App\Models\Kendaraan;

class KendaraanRepository
{
    private $kendaraan;

    public function __construct(Kendaraan $kendaraan)
    {
        $this->kendaraan = $kendaraan;
    }
    public function getAll()
    {
        $kendaraan = $this->kendaraan->get()
            ->map(function ($kendaraan) {

                return [
                'id_penjualan' => $kendaraan->id,
                'nama_kendaraan' => $kendaraan->mobil_id == null ? $kendaraan->motor->nama_motor : $kendaraan->mobil->nama_mobil,
                'nama_pembeli' => $kendaraan->nama,
                'desa' => $kendaraan->desa,
                'alamat' => $kendaraan->alamat,
                'harga' => $kendaraan->mobil_id == null ? $kendaraan->motor->harga : $kendaraan->mobil->harga,
                'status' => $kendaraan->status ? 'Lunas' : 'Belum Lunas',
                'created_at' => $kendaraan->created_at,
                'updated_at' => $kendaraan->updated_at
                ];

            });

            return $kendaraan;
    }
    public function getDetail()
    {
        $kendaraan = $this->kendaraan->all()
        ->map(function ($kendaraan) {

            return [
                'id_penjualan' => $kendaraan->id,
                'nama_pembeli' => $kendaraan->nama,
                'Kendaraan' => $kendaraan->mobil_id == null ? $kendaraan->motor->nama_motor : $kendaraan->mobil->nama_mobil,
                'mesin' => $kendaraan->mobil_id == null ? $kendaraan->motor->mesin : $kendaraan->mobil->mesin,
                'tahun' => $kendaraan->mobil_id == null ? $kendaraan->motor->tahun : $kendaraan->mobil->tahun,
                'warna' => $kendaraan->mobil_id == null ? $kendaraan->motor->warna : $kendaraan->mobil->warna,
                'stok' => $kendaraan->mobil_id == null ? $kendaraan->motor->stok : $kendaraan->mobil->stok,
                'harga' => $kendaraan->mobil_id == null ? $kendaraan->motor->harga : $kendaraan->mobil->harga,
                'created_at' => $kendaraan->mobil_id == null ? $kendaraan->motor->created_at : $kendaraan->mobil->created_at,
                'updated_at' => $kendaraan->mobil_id == null ? $kendaraan->motor->updated_at : $kendaraan->mobil->updated_at,
            ];
        });

        return $kendaraan;
    }
}