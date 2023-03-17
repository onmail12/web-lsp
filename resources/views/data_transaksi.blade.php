@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Daftar Transaksi</h3>
  <table class="table table-hover table-striped">
      <tr class="table-primary">
          <th>No</th>
          <th>NISN</th>
          <th>Nama Siswa</th>
          <th>Tgl Bayar</th>
          <th>Bulan Bayar</th>
          <th>Thn Bayar</th>
          <th>Jumlah</th>
          <th>Ket</th>
          <th>Petugas</th>
      </tr> 
      @php $no = 1; @endphp
      @foreach($bayar as $s)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $s->nisn }}</td>
          <td>{{ $s->nama_siswa }}</td>
          <td>{{ $s->tgl_bayar }}</td>
          <td>{{ $s->bulan_bayar }}</td>
          <td>{{ $s->tahun_bayar }}</td>
          <td>{{ $s->jumlah_bayar }}</td>
          <td>{{ $s->keterangan }}</td>
          <td>{{ $s->nama_petugas }}</td>
      </tr>
    @endforeach 
  </table>
</div>

@endsection
