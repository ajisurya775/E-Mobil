<?php 

namespace App\Services;

use App\Repositories\KendaraanRepository;

class KendaraanService
{
    private $kendaraanRepository;

    public function __construct(KendaraanRepository $kendaraanRepository)
    {
        $this->kendaraanRepository = $kendaraanRepository;
    }

    public function getAll()
    {
        return $this->kendaraanRepository->getAll();
    }

    public function getDetail()
    {
        return $this->kendaraanRepository->getDetail();
    }
}