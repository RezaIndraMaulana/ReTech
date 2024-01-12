<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class FiturUtamaController extends Controller
{
    public function getTeknisiByService($service)
    {

        $validServices = ['Kipas Angin', 'Mesin Cuci', 'AC', 'Microwave', 'Kulkas', 'Kompor', 'Oven'];

        if (!in_array($service, $validServices)) {
            return response()->json(['error' => 'Layanan tidak valid'], 400);
        }

        $teknisiByService = User::select('id', 'name', 'role', 'service', 'pengalaman', 'rating', 'created_at', 'updated_at')
            ->where('role', 'Teknisi')
            ->where('service', $service)
            ->get();

        return response()->json($teknisiByService);
    }
}
