<?php

namespace App\Services;

use App\Repositories\MobilRepository;

class MobilService
{
    protected $mobilRepositoriy;

    public function __construct(MobilRepository $mobilRepositoriy)
    {
        $this->mobilRepository = $mobilRepositoriy;
    }
    public function getAll()
    {
        return $this->mobilRepository->getAll();
    }
}