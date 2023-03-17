@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Daftar Petugas</h3>
    <p><a href="/tambah_petugas"><button class="btn btn-outline-info btn-sm" >Tambah Petugas </button> </a></p>
  <table class="table table-hover table-striped">
      <tr class="table-primary">
          <th>No</th>
          <th>Nama Petugas</th>
          <th>Username</th>
          <th>Level</th>
          <th colspan=2>Aksi</th>
      </tr> 
      @php $no = 1; @endphp
      @foreach($petugas as $s)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $s->nama_petugas }}</td>
          <td>{{ $s->username }}</td>
          <td>{{ $s->level }}</td>
          <td><a href="/edit_petugas/{{ $s->id_petugas }}"><button class="btn btn-block btn-outline-info btn-sm">EDIT </button></a></td>
          <td><a href="/hapus_petugas/{{ $s->id_petugas }}" onclick = "return confirm('Yakin Data Akan Dihapus');"><button class="btn btn-block btn-outline-dark btn-sm">HAPUS </button></a></td>
      </tr>
    @endforeach 
  </table>
</div>

@endsection
