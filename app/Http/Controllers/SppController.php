<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class sppController extends Controller
{
    public function spp()
   {
      $spp = DB::table('spp')->get();

      // mengirim data spp ke view spp
    return view('data_spp', compact ('spp'));
   }

   // ini adalah form tambah spp
   public function tambah_spp()
   {

     $spp = DB::table('spp')->get();

    return view('tambah_spp', compact('spp'));
   }


   // ini adalah proses tambah spp ke database
   public function input_spp(Request $request)
   {
	// insert data ke table spp
	DB::table('spp')->insert([
		'tahun' => $request->tahun,
      'nominal' => $request->nominal
	]);
	// alihkan halaman ke halaman 
	return redirect('/spp');
   }

// ini adalah form edit spp
public function edit_spp($id_spp)
{
   $spp = DB::table('spp')
            ->where('id_spp', $id_spp)
            ->get(); 

// alihkan halaman ke halaman pegawai
return view('edit_spp', compact('spp'));
}


public function edit_spp_simpan(Request $request)
   {
	// simpan data ke table siswa
	DB::table('spp')
       ->where('id_spp',$request->id_spp)
       ->update([
		'tahun' => $request->tahun,
		'nominal' => $request->nominal
	]);
   return redirect('/spp');
  }

   // ini adalah hapus siswa

   public function hapus_spp($id_spp)
   {
	 DB::table('spp')->where('id_spp',$id_spp)->delete();
	  return redirect('/spp');
   }
}