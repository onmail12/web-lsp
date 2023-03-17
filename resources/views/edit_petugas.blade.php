@extends('layout')
@section('konten')
<div class="card-body">
    <h3>Edit Petugas</h3>
   <form action="/edit_petugas" method="post">
   {{ csrf_field() }}
   @foreach($petugas as $s)
   <table>
        <tr>
           <td><input type="hidden" name="id_petugas" value="{{ $s->id_petugas }}" size=40></td>
        </tr>
        <tr>
           <td><label>USERNAME</label></td>
           <td><input type="text" name="username" value="{{ $s->username }}" size=40></td>
        </tr> 
        <tr>
            <td><label>PASSWORD</label></td>
            <td><input type="text" name="password" value="{{ $s->password }}" size=40></td>
         </tr> 
        <tr>
           <td><label>NAMA PETUGAS</label></td>
           <td><input type="text" name="nama" value="{{ $s->nama_petugas }}" size=40></td>
      <tr>
        <td><label>LEVEL</label></td>
        <td><input type="text" name="level" value="{{ $s->level }}" size=40></td>
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