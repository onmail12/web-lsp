@extends('layout')

@section('konten')

<div class="card-body">
    <h3>Daftar spp</h3>
    <p><a href="/tambah_spp"><button class="btn btn-outline-info btn-sm" >Tambah spp </button> </a></p>
  <table class="table table-hover table-striped">
      <tr class="table-primary">
          <th>No</th>
          <th>Tahun</th>
          <th>Nominal</th>
          <th colspan=2>Aksi</th>
      </tr> 
      @php $no = 1; @endphp
      @foreach($spp as $s)
      <tr>
          <td>{{ $no++ }}</td>
          <td>{{ $s->tahun }}</td>
          <td>{{ $s->nominal }}</td>
          <td><a href="/edit_spp/{{ $s->id_spp }}"><button class="btn btn-block btn-outline-info btn-sm">EDIT </button></a></td>
          <td><a href="/hapus_spp/{{ $s->id_spp }}" onclick = "return confirm('Yakin Data Akan Dihapus');"><button class="btn btn-block btn-outline-dark btn-sm">HAPUS </button></a></td>
      </tr>
    @endforeach 
  </table>
</div>

@endsection