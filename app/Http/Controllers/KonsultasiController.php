<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Resep;
use App\Models\Obat;

class KonsultasiController extends Controller
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
        $konsul = Resep::find($id_resep);
        if ($konsul){
            $id_resep = $konsul -> id_resep;
            $id_pasien = $konsul -> id_pasien;
            $tanggal_resep = $konsul -> tanggal_resep;
            $resep = $konsul -> resep;

            $query = Obat::where('nama_obat', '=', $resep);
            $nama_obat = $query -> value('nama_obat');
            $id_obat = $query -> value('id_obat');
            $kadaluarsa = $query -> value('kadaluarsa');
            return response() -> json([
                'status' => 200,
                'message' => 'berhasil',
                'id_resep' => $id_resep,
                'id_pasien' => $id_pasien,
                'tanggal_resep' => $tanggal_resep,
                'id_obat' => $id_obat, 
                'nama_obat' => $nama_obat, 
                'kadaluarsa' => $kadaluarsa
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
