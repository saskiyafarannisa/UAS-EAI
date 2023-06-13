<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $obat = [
            [
                'id_obat' => 1,
                'nama_obat' => 'Panadol',
                'deskripsi_obat' => 'Obat sakit kepala',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ],
            [
                'id_obat' => 2,
                'nama_obat' => 'Bordrex',
                'deskripsi_obat' => 'Obat sakit kepala',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ],
            [
                'id_obat' => 3,
                'nama_obat' => 'Betadine',
                'deskripsi_obat' => 'Obat luka',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ],
            [
                'id_obat' => 4,
                'nama_obat' => 'Dettol',
                'deskripsi_obat' => 'Obat luka',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ],
            [
                'id_obat' => 5,
                'nama_obat' => 'Insto',
                'deskripsi_obat' => 'Obat tetes mata',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ]
        ];
        $resep = [
            [
                'id_resep' => 1,
                'id_dokter' => 1,
                'id_pasien' => 1,
                'id_pembayaran' => 1,
                'tanggal_resep' => Carbon::parse('2023-01-02'),
                'resep' => 'Betadine'
            ],
            [
                'id_resep' => 2,
                'id_dokter' => 5,
                'id_pasien' => 10,
                'id_pembayaran' => 15,
                'tanggal_resep' => Carbon::parse('2023-01-06'),
                'resep' => 'Insto'
            ],
            [
                'id_resep' => 3,
                'id_dokter' => 3,
                'id_pasien' => 7,
                'id_pembayaran' => 18,
                'tanggal_resep' => Carbon::parse('2023-01-11'),
                'resep' => 'Dettol'
            ],
            [
                'id_resep' => 4,
                'id_dokter' => 11,
                'id_pasien' => 22,
                'id_pembayaran' => 33,
                'tanggal_resep' => Carbon::parse('2023-01-20'),
                'resep' => 'Promag'
            ],
            [
                'id_resep' => 5,
                'id_dokter' => 9,
                'id_pasien' => 40,
                'id_pembayaran' => 67,
                'tanggal_resep' => Carbon::parse('2023-01-30'),
                'resep' => 'Vitacimin'
            ]
        ];
        $penyedia = [
            [
                'id_obat_disiapkan' => 1,
                'id_resep' => 1,
                'nama_obat' => 'Betadine',
                'deskripsi_obat' => 'Obat luka',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ],
            [
                'id_obat_disiapkan' => 2,
                'id_resep' => 2,
                'nama_obat' => 'Insto',
                'deskripsi_obat' => 'Obat tetes mata',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ],
            [
                'id_obat_disiapkan' => 3,
                'id_resep' => 3,
                'nama_obat' => 'Dettol',
                'deskripsi_obat' => 'Obat luka',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ],
            [
                'id_obat_disiapkan' => 4,
                'id_resep' => 4,
                'nama_obat' => 'Panadol',
                'deskripsi_obat' => 'Obat sakit kepala',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ],
            [
                'id_obat_disiapkan' => 5,
                'id_resep' => 5,
                'nama_obat' => 'Bordrex',
                'deskripsi_obat' => 'Obat sakit kepala',
                'kadaluarsa' => Carbon::parse('2023-03-01'),
                'tanggal_masuk' => Carbon::parse('2023-01-01'),
                'tanggal_keluar' => Carbon::parse('2023-02-01')
            ]
        ];
        $pelaporan = [
            [
                'id_pelaporan' => 1,
                'id_obat' => 1,
                'jumlah_obat_awal' => 50,
                'jumlah_obat_akhir' => 32,
                'total_penjualan' => 18,
                'tanggal_laporan' => Carbon::parse('2023-01-31'),
            ],
            [
                'id_pelaporan' => 2,
                'id_obat' => 2,
                'jumlah_obat_awal' => 40,
                'jumlah_obat_akhir' => 18,
                'total_penjualan' => 22,
                'tanggal_laporan' => Carbon::parse('2023-01-31'),
            ],
            [
                'id_pelaporan' => 3,
                'id_obat' => 3,
                'jumlah_obat_awal' => 25,
                'jumlah_obat_akhir' => 20,
                'total_penjualan' => 5,
                'tanggal_laporan' => Carbon::parse('2023-01-31'),
            ],
            [
                'id_pelaporan' => 4,
                'id_obat' => 4,
                'jumlah_obat_awal' => 30,
                'jumlah_obat_akhir' => 10,
                'total_penjualan' => 20,
                'tanggal_laporan' => Carbon::parse('2023-01-31'),
            ],
            [
                'id_pelaporan' => 5,
                'id_obat' => 5,
                'jumlah_obat_awal' => 60,
                'jumlah_obat_akhir' => 30,
                'total_penjualan' => 30,
                'tanggal_laporan' => Carbon::parse('2023-01-31'),
            ]
        ];
        DB::table('obats')->insert($obat);
        DB::table('reseps')->insert($resep);
        DB::table('penyedias')->insert($penyedia);
        DB::table('pelaporans')->insert($pelaporan);
    }
}
