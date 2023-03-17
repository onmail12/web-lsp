@extends('layout')
@section('konten')
<div class="card-body">
    <h3>Edit siswa</h3>
   <form action="/edit_siswa" method="post">
   {{ csrf_field() }}
   @foreach($siswa as $s)
   <table>
        <tr>
           <td><input type="hidden" name="nis" value="{{ $s->nis }}" size=40></td>
        </tr>
        <tr>
           <td><label>NAMA</label></td>
           <td><input type="text" name="nama" value="{{ $s->nama_siswa }}" size=40></td>
        </tr> 
        <tr>
           <td><label>KELAS</label></td>
           <td><select class="form-control" name="id_kelas">
            @foreach ($kelas as $k)
               <option value="{{ $k->id_kelas }}">{{ $k->nama_kelas }}</option>
            @endforeach
         </select>
      </td>
      <tr>
        <td><label>ALAMAT</label></td>
        <td><input type="text" name="alamat" value="{{ $s->alamat }}" size=40></td>
     </tr>
     <tr>
        <td><label>NOMOR HP</label></td>
        <td><input type="text" name="hp" value="{{ $s->no_tlp }}" size=40></td>
     </tr>
     <tr>
        <td><label>ID SPP</label></td>
        <td><input type="text" name="hp" value="{{ $s->id_spp }}" size=40></td></td>
      <tr>
         <td></td>
         <td><button class="btn btn-block btn-success btn-sm" >UPDATE</button></td>
        </tr>
     </table>  
   </form> 
   @endforeach    
   </div>
@endsection   