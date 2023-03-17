@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Tambah Kelas</h3>
   <form action="/input_kelas" method="post">
   {{ csrf_field() }}
     <table>
         <tr>
          <tr>
             <td><label>NAMA KELAS</label></td>
             <td><input type="text" name="nama" value="" size=40></td>
          </tr> 
          <tr>
            <td><label>KOMPETENSI KEAHLIAN</label></td>
            <td><input type="text" name="kompetensi" value="" size=40></td>
         </tr> 
          <tr>
             <td></td>
             <td><button class="btn btn-outline-success btn-block btn-sm" >INPUT</button></td>
          </tr>
     </table>  
   </form>    
   </div>

@endsection