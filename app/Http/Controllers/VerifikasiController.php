<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Obat;
use App\Models\Resep;

class VerifikasiController extends Controller
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
            $isi_resep = $resep -> resep;
            $query = Obat::where('nama_obat', '=', $isi_resep);
            $cek_query = $query -> exists();
            $ambil_data = $query -> value('nama_obat');
            if ($cek_query){
                return response()-> json([
                    'status' => 200,
                    'message' => 'berhasil',
                    'verifikasi' => 'tersedia',
                    'nama_obat_yang_diminta' => $ambil_data
                ]);
            } else {
                return response()-> json([
                    'status' => 200,
                    'message' => 'berhasil',
                    'verifikasi' => 'tidak tersedia',
                    'nama_obat_yang_diminta' => $isi_resep
                ]);
            }
        }else{
            return response()-> json([
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
