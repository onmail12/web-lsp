<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;

class PetugasController extends Controller
{
     // ini adalah tampilan petugas
   public function petugas()
   {
      $petugas = DB::table('petugas')
                ->get();

      // mengirim data kelas ke view petugas
    return view('data_petugas', compact ('petugas'));
   }

   // ini adalah form tambah petugas
   public function tambah_petugas()
   {
    return view('tambah_petugas');
   }


   // ini adalah proses tambah psiswa ke database
   public function input_petugas(Request $request)
   {
	// insert data ke table psiswa
	DB::table('petugas')->insert([
		'username' => $request->username,
      'password' => Hash::make($request->password),
		'nama_petugas' => $request->nama,
		'level' => $request->level,
	]);
	// alihkan halaman ke halaman 
	return redirect('/petugas');
   }

// ini adalah form edit petugas
public function edit_petugas($id_petugas)
{
   $petugas = DB::table('petugas')
      ->where ('id_petugas', $id_petugas)
      ->get();

// alihkan halaman ke halaman pegawai
return view('edit_petugas',compact('petugas'));
}


public function edit_petugas_simpan(Request $request)
   {
	// simpan data ke table siswa
	DB::table('petugas')
       ->where('id_petugas',$request->id_petugas)
       ->update([
		'username' => $request->username,
		'password' => Hash::make($request->password),
      'nama_petugas' => $request->nama,
      'level' => $request->level,
	]);
   return redirect('/petugas');
  }

   // ini adalah hapus siswa

   public function hapus_petugas($id_petugas)
   {
	 DB::table('petugas')->where('id_petugas',$id_petugas)->delete();
	  return redirect('/petugas');
   }
}
