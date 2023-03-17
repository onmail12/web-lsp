@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Tambah SISWA SMKN 6 Balikpapan</h3>
   <form action="/input_siswa" method="post">
   {{ csrf_field() }}
     <table>
         <tr>
            <td><label>NISN</label></td>
            <td><input type="text" name="nisn" value="" size=40></td>
         </tr>
         <tr>
             <td><label>NIS</label></td>
             <td><input type="text" name="nis" value="" size=40></td>
          </tr>
          <tr>
             <td><label>NAMA</label></td>
             <td><input type="text" name="nama" value="" size=40></td>
          </tr> 
          <tr>
            <td><label>ALAMAT</label></td>
            <td><input type="text" name="alamat" value="" size=40></td>
         </tr> 
          <tr>
            <td><label>KELAS</label></td>
            <td><select class="form-control" name="kelas">
               @foreach ($kelas as $k)
                  <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
               @endforeach
            </select>
            </td>
         </tr>
         <tr>
            <td><label>NOMOR HP</label></td>
            <td><input type="text" name="hp" value="" size=40></td>
         </tr>
         <tr>
            <td><label>ID SPP</label></td>
            <td><select class="form-control" name="id_spp">
               @foreach ($spp as $s)
                  <option value="{{ $s->id_spp }}">{{ $s->nominal }}</option>
               @endforeach
            </select>
            </td>
         </tr>
          <tr>
             <td></td>
             <td><button class="btn btn-outline-success btn-block btn-sm" >INPUT</button></td>
          </tr>
     </table>  
   </form>    
    
    <p>Tetap Semangat dan Selamat Bekerja </p>
   </div>

@endsection