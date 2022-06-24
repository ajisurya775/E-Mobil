<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\KendaraanService;
use Exception;

class KendaraanController extends Controller
{
    private $kendaraanService;

    public function __construct(KendaraanService $kendaraanService)
    {
        $this->kendaraanService = $kendaraanService;
    }

    public function index()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->kendaraanService->getAll();
        } catch (Exception $e) {
            $result =[
                'status' => 500,
                'Error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }

    public function detail()
    {
        $result = ['status' => 200];

        try {
            $result['data'] = $this->kendaraanService->getDetail();
        } catch (Exception $e) {
            $result =[
                'status' => 500,
                'Error' => $e->getMessage()
            ];
        }

        return response()->json($result, $result['status']);
    }
}
