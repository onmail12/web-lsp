@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Tambah Petugas</h3>
   <form action="/input_petugas" method="post">
   {{ csrf_field() }}
     <table>
         <tr>
            <td><label>USERNAME</label></td>
            <td><input type="text" name="username" value="" size=40></td>
         </tr>
         <tr>
             <td><label>PASSWORD</label></td>
             <td><input type="text" name="password" value="" size=40></td>
          </tr>
          <tr>
             <td><label>NAMA PETUGAS</label></td>
             <td><input type="text" name="nama" value="" size=40></td>
          </tr> 
          <tr>
            <td><label>LEVEL</label></td>
            <td><select class="form-control" name="level">
                  <option value="admin">Admin</option>
                  <option value="petugas">Petugas</option>
            </select></td>
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