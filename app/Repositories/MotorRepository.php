<?php 

namespace App\Repositories;

use App\Models\Motor;

class MotorRepository
{
    private $motor;

    public function __construct(Motor $motor)
    {
        $this->motor = $motor;
    }
    public function getAll()
    {
        return $this->motor->get();
    }
}