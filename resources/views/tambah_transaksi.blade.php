@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Transaksi Pembayaran SPP</h3>
   <form action="/tambah_transaksi" method="post">
   {{ csrf_field() }}
     <table>
         <tr>
            <td><input type="hidden" name="id_petugas" value="{{ Auth::user()->id_petugas; }}"></td>
         </tr>
         <tr>
            <td><input type="hidden" name="keterangan" value="Lunas"></td>
         </tr>
         <tr>
             <td><label>NAMA SISWA</label></td>
             <td><select class="form-control" name="nisn">
                @foreach ($nisn as $k)
                   <option value="{{ $k->nisn }}">{{ $k->nama_siswa }}</option>
                @endforeach
             </select>
             </td>
          </tr>
          <tr>
             <td><label>TGL BAYAR</label></td>
             <td><input type="date" name="tgl" value="" size=40></td>
          </tr> 
          <tr>
            <td><label>BULAN BAYAR</label></td>
            <td><select class="form-control" name="bulan">
                  <option value="Januari">Januari</option>
                  <option value="Pebruari">Pebruari</option>
                  <option value="Maret">Maret</option>
                  <option value="April">April</option>
                  <option value="Mei">Mei</option>
                  <option value="Juni">Juni</option>
                  <option value="Juli">Juli</option>
                  <option value="Agustus">Agustus</option>
                  <option value="September">September</option>
                  <option value="Oktober">Oktober</option>
                  <option value="Nopember">Nopember</option>
                  <option value="Desember">Desember</option>
            </select>
            </td>
         </tr> 
         <tr>
            <td><label>TAHUN BAYAR</label></td>
            <td><select class="form-control" name="tahun">
                  <option value="2022">2022</option>
                  <option value="2023">2023</option>
                  <option value="2024">2024</option>
            </select>
            </td>
         </tr> 
         <tr>
            <td><label>ID SPP</label></td>
            <td><select class="form-control" name="id_spp">
               @foreach ($spp as $k)
                  <option value="{{ $k->id_spp }}">{{ $k->id_spp }}</option>
               @endforeach
            </select>
            </td>
         </tr>
         <tr>
            <td><label>JUMLAH BAYAR</label></td>
            <td><input type="text" name="jumlah" value="" size=40></td>
         </tr> 
          <tr>
             <td></td>
             <td><button class="btn btn-outline-success btn-block btn-sm" >BAYAR</button></td>
          </tr>
     </table>  
   </form>    
    
    <p>Tetap Semangat dan Selamat Bekerja </p>
   </div>

@endsection