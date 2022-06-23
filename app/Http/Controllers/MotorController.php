<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use App\Services\MotorService;

class MotorController extends Controller
{
    private $motorService;

    public function __construct(MotorService $motorService)
    {
        $this->motorService = $motorService;
    }
    public function index()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->motorService->getAll();
        } catch (Exception $e) {
           $result =[
            'status' => 500,
            'error' => $e->getMessage()
           ];
        }
        
        return response()->json($result, $result['status']);
    }
}
