<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pelaporan;
use Illuminate\Support\Facades\Validator;

class PelaporanController extends Controller
{
    public function index()
    {
        $pelaporan = Pelaporan::all();
        return response() -> json([
            'status' => 200,
            'message' => 'berhasil',
            'data' => $pelaporan
        ]);
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_obat' => 'int|required',
            'jumlah_obat_awal' => 'int|required',
            'jumlah_obat_akhir' => 'int|required',
            'total_penjualan' => 'int|required',
            'tanggal_laporan' => 'date|required',
        ]);
        if ($validator->fails()){
            return response() -> json([
                'status' => 404,
                'message' => 'gagal, ada kesalahan input'
            ]);
        }else{
            $pelaporan = Pelaporan::create($request -> all());
            return response() -> json([
                'status' => 200,
                'message' => 'berhasil',
                'data' => $pelaporan
            ]);
        }
    }
    public function show($id_resep)
    {
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
