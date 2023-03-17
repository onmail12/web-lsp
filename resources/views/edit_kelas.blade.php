@extends('layout')
@section('konten')
<div class="card-body">
    <h3>Edit Kelas</h3>
   <form action="/edit_kelas" method="post">
   {{ csrf_field() }}
   @foreach($kelas as $s)
   <table>
        <tr>
           <td><input type="hidden" name="id_kelas" value="{{ $s->id_kelas }}" size=40></td>
        </tr>
        <tr>
           <td><label>NAMA KELAS</label></td>
           <td><input type="text" name="kelas" value="{{ $s->nama_kelas }}" size=40></td>
        </tr> 
        <tr>
            <td><label>KOMPETENSI KEAHLIAN</label></td>
            <td><input type="text" name="kompetensi" value="{{ $s->kompetensi_keahlian }}" size=40></td>
         </tr> 
        <tr>
         <td></td>
         <td><button class="btn btn-block btn-success btn-sm" >UPDATE</button></td>
        </tr>
     </table>  
   </form> 
   @endforeach    
   </div>
@endsection   