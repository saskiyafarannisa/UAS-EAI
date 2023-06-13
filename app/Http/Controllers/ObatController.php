<?php

namespace App\Http\Controllers;

use App\Models\Obat;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;

class ObatController extends Controller
{
    public function index()
    {
        $obat = Obat::all();
        return response()-> json([
            'message' => 200,
            'status' => 'berhasil',
            'data' => $obat
        ]);
    }
    public function create()
    {
    }
    public function store(Request $request)
    {
        $validator = Validator::make($request -> all(), [
            'nama_obat' => 'string|required',
            'deskripsi_obat' => 'string|required',
            'kadaluarsa' => 'date|required',
            'tanggal_masuk' => 'date|required',
            'tanggal_keluar' => 'date|required',
        ]);
        if ($validator->fails()){
            return response() -> json([
                'status' => 404,
                'message' => 'gagal, ada kesalahan input'
            ]);
        }else{
            $obat = Obat::create($request -> all());
            return response() -> json([
                'status' => 200,
                'message' => 'berhasil',
                'data' => $obat
            ]);
        }
    }
    public function show(string $id)
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
