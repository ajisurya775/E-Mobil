<?php

namespace App\Repositories;

use App\Models\Mobil;

class MobilRepository
{
    private $mobil;

    public function __construct(Mobil $mobil)
    {
        $this->mobil = $mobil;
    }
    public function getAll()
    {
        return $this->mobil->get();
    }
}