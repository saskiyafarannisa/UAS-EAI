<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\Penyedia;
use Illuminate\Support\Facades\Validator;

class PenyediaController extends Controller
{
    public function index()
    {
    }
    public function create()
    {
    }
    public function store(Request $request, $id_resep)
    {
        $resep = Resep::find($id_resep);
        if ($resep){
            $validator = Validator::make($request->all(), [
                'id_resep' => 'integer|required',
                'nama_obat' => 'string|required',
                'deskripsi_obat' => 'string|required',
                'kadaluarsa' => 'date|required',
                'tanggal_masuk' => 'date|required',
                'tanggal_keluar' => 'date|required',
            ]);
            if ($validator->fails()){
                return response()-> json([
                    'status' => 404,
                    'message' => 'gagal, ada kesalahan input'
                ]);
            }else{
                $obat = Penyedia::create($request->all());
                return response()-> json([
                    'status' => 200,
                    'message' => 'berhasil',
                    'data' => $obat
                ]);
            }
        }else{
            return response()-> json([
                'status' => 404,
                'message' => 'gagal, data yang diminta tidak dapat ditemukan'
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
