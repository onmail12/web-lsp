<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class KelasController extends Controller
{
    public function kelas()
   {
      $kelas = DB::table('kelas')->get();

      // mengirim data kelas ke view kelas
    return view('data_kelas', compact ('kelas'));
   }

   // ini adalah form tambah kelas
   public function tambah_kelas()
   {

     $kelas = DB::table('kelas')->get();

    return view('tambah_kelas', compact('kelas'));
   }


   // ini adalah proses tambah kelas ke database
   public function input_kelas(Request $request)
   {
	// insert data ke table kelas
	DB::table('kelas')->insert([
		'nama_kelas' => $request->nama,
      'kompetensi_keahlian' => $request->kompetensi
	]);
	// alihkan halaman ke halaman 
	return redirect('/kelas');
   }

// ini adalah form edit kelas
public function edit_kelas($id_kelas)
{
   $kelas = DB::table('kelas')
            ->where('id_kelas', $id_kelas)
            ->get(); 

// alihkan halaman ke halaman pegawai
return view('edit_kelas', compact('kelas'));
}


public function edit_kelas_simpan(Request $request)
   {
	// simpan data ke table siswa
	DB::table('kelas')
       ->where('id_kelas',$request->id_kelas)
       ->update([
		'nama_kelas' => $request->kelas,
		'kompetensi_keahlian' => $request->kompetensi
	]);
   return redirect('/kelas');
  }

   // ini adalah hapus siswa

   public function hapus_siswa($id_kelas)
   {
	 DB::table('kelas')->where('id_kelas',$id_kelas)->delete();
	  return redirect('/kelas');
   }
}
