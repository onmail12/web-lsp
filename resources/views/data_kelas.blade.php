@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Daftar Kelas</h3>
    <p><a href="/tambah_kelas"><button class="btn btn-outline-info btn-sm" >Tambah Kelas </button> </a></p>
  <table class="table table-hover table-striped">
      <tr class="table-primary">
          <th>No</th>
          <th>Nama Kelas</th>
          <th>Kompetensi Keahlian</th>
          <th colspan=2>Aksi</th>
      </tr> 
      @php $no = 1; @endphp
      @foreach($kelas as $s)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $s->nama_kelas }}</td>
          <td>{{ $s->kompetensi_keahlian }}</td>
          <td><a href="/edit_kelas/{{ $s->id_kelas }}"><button class="btn btn-block btn-outline-info btn-sm">EDIT </button></a></td>
          <td><a href="/hapus_kelas/{{ $s->id_kelas }}" onclick = "return confirm('Yakin Data Akan Dihapus');"><button class="btn btn-block btn-outline-dark btn-sm">HAPUS </button></a></td>
      </tr>
    @endforeach 
  </table>
</div>

@endsection
