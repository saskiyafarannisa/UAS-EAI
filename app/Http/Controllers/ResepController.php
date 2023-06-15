<?php

namespace App\Http\Controllers;

use App\Models\Resep;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;


class ResepController extends Controller
{
    public function index()
    {
        $resep = Resep::all();
        return response()-> json([
            'message' => 200,
            'status' => 'berhasil',
            'data' => $resep
        ]);
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request -> all(), [
            'nama_dokter' => 'string|required',
            'id_pasien' => 'integer|required',
            'tanggal_resep' => 'date|required',
            'resep' => 'string|required',
        ]);
        if ($validator->fails()){
            return response() -> json([
                'status' => 404,
                'message' => 'gagal, ada kesalahan input'
            ]);
        }else{
            if (Resep::exists()){
                $resep = Resep::updateOrCreate($request -> all());
            }else{
                $resep = Resep::create($request -> all());
            }
            return response() -> json([
                'status' => 200,
                'message' => 'berhasil',
                'data' => $resep
            ]);
        }   
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
