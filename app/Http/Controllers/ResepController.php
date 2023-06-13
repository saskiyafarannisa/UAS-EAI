<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;

class ResepController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
    }
    public function show($id_resep)
    {
        $resep = Resep::find($id_resep);
        if ($resep){
            return response() -> json([
                'status' => 200,
                'message' => 'berhasil',
                'data' => $resep
            ]);
        }else{
            return response() -> json([
                'status' => 404,
                'message' => 'gagal, data yang diminta tidak dapat ditemukan'
            ]);
        }
    }
    public function edit(string $id)
    {
    }
    public function update(Request $request, string $id)
    {
    }
    public function destroy(string $id)
    {
    }
}
