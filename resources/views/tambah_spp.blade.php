@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Tambah spp SMKN 6 Balikpapan</h3>
   <form action="/input_spp" method="post">
   {{ csrf_field() }}
     <table>
         <tr>
            <td><label>Tahun</label></td>
            <td><input type="text" name="tahun" value="" size=40></td>
         </tr>
         <tr>
             <td><label>Nominal</label></td>
             <td><input type="text" name="nominal" value="" size=40></td>
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