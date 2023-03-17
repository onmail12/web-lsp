<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class TransaksiController extends Controller
{
    // ini adalah tampilan petugas
   public function transaksi()
   {
  
      $bayar = DB::table('pembayaran')
            ->join('siswa', 'pembayaran.nisn', '=', 'siswa.nisn')
            ->join('petugas', 'pembayaran.id_petugas', '=', 'petugas.id_petugas')
            ->select('pembayaran.*', 'nama_siswa', 'nama_petugas')
            ->get();          

      // mengirim data kelas ke view petugas
    return view('data_transaksi', compact ('bayar'));
   }

   // ini adalah form tambah petugas
   public function tambah_transaksi()
   {
      $nisn = DB::table('siswa')->get();
      $spp = DB::table('spp')->get();

    return view('tambah_transaksi', compact ('nisn', 'spp'));
   }


   // ini adalah proses tambah psiswa ke database
   public function input_transaksi(Request $request)
   {
	// insert data ke table psiswa
	DB::table('pembayaran')->insert([
		'id_petugas' => $request->id_petugas,
      'nisn' => $request->nisn,
		'tgl_bayar' => $request->tgl,
		'bulan_bayar' => $request->bulan,
      'tahun_bayar' => $request->tahun,
      'id_spp' => $request->id_spp,
      'jumlah_bayar' => $request->jumlah,
      'keterangan' => $request->keterangan
	]);
	// alihkan halaman ke halaman 
	return redirect('/transaksi');
   }
}
