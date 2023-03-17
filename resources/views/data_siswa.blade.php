@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Daftar SISWA SMKN 6 Balikpapan</h3>
    <p><a href="/tambah_siswa"><button class="btn btn-outline-info btn-sm" >Tambah Siswa </button> </a></p>
  <table class="table table-hover table-striped">
      <tr class="table-primary">
          <th>No</th>
          <th>NIS</th>
          <th>Nama</th>
          <th>Kelas</th>
          <th colspan=2>Aksi</th>
      </tr> 
      @php $no = 1; @endphp
      @foreach($siswa as $s)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $s->nis }}</td>
          <td>{{ $s->nama_siswa }}</td>
          <td>{{ $s->nama_kelas }}</td>
          <td><a href="/edit_siswa/{{ $s->nis }}"><button class="btn btn-block btn-outline-info btn-sm">EDIT </button></a></td>
          <td><a href="/hapus_siswa/{{ $s->nis }}" onclick = "return confirm('Yakin Data Akan Dihapus');"><button class="btn btn-block btn-outline-dark btn-sm">HAPUS </button></a></td>
      </tr>
    @endforeach 
  </table>
</div>

@endsection
