<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SiswaController extends Controller
{
    // ini adalah tampilan siswa 
   public function siswa()
   {
      $siswa = DB::table('siswa')
              ->join('kelas', 'siswa.id_kelas', '=', 'kelas.id_kelas')
		        ->select('siswa.*', 'nama_kelas')
              ->get();

      // mengirim data kelas ke view siswa
    return view('data_siswa', compact ('siswa'));
   }

   // ini adalah form tambah siswa
   public function tambah_siswa()
   {
     // menampilkan view siswa
     //$kelas = DB::table('kelas')->get();
     $spp = DB::table('spp')->get();
     $kelas = DB::table('kelas')->get();

    return view('tambah_siswa', compact('spp', 'kelas'));
   }


   // ini adalah proses tambah siswa ke database
   public function input_siswa(Request $request)
   {
	// insert data ke table siswa
	DB::table('siswa')->insert([
		'nisn' => $request->nisn,
      'nis' => $request->nis,
		'nama_siswa' => $request->nama,
		'alamat' => $request->alamat,
      'id_kelas' => $request->kelas,
      'no_tlp' => $request->hp,
      'id_spp' => $request->id_spp
	]);
	// alihkan halaman ke halaman 
	return redirect('/siswa');
   }

// ini adalah form edit siswa
public function edit_siswa($nis)
{
   $kelas = DB::table('kelas')->get(); 
   $siswa = DB::table('siswa')
      ->where ('nis', $nis)
      ->get();

// alihkan halaman ke halaman pegawai
return view('edit_siswa',compact('siswa'), compact('kelas'));
}


public function edit_siswa_simpan(Request $request)
   {
	// simpan data ke table siswa
	DB::table('siswa')
       ->where('nis',$request->nis)
       ->update([
		'nama_siswa' => $request->nama,
		'id_kelas' => $request->id_kelas
	]);
   return redirect('/siswa');
  }

   // ini adalah hapus siswa

   public function hapus_siswa($nis)
   {
	 DB::table('siswa')->where('nis',$nis)->delete();
	  return redirect('/siswa');
   }
}
