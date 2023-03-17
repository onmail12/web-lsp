@extends('layout')
    
@section('konten')
<h2 class="display-5">Edit Data Spp</h2>
<div class="border rounded-4">
 
    <form class="px-3 mx-3 mt-3 mb-3" action="/edit_spp" method="POST">
        {{ csrf_field() }}
        @foreach ($spp as $spp)
        <input type="hidden" name='id_spp' value="{{$spp->id_spp}}">

        <div class="form-group mb-3 my-2">
            <label for="tahun">Tahun</label>
            <input type="text" class="form-control" value="{{$spp->tahun}}" name="tahun" placeholder="Enter Tahun">
        </div>
        <div class="form-group mb-3 my-2">
            <label for="nominal">nominal</label>
            <input type="text" class="form-control" value="{{$spp->nominal}}" name="nominal"
                placeholder="Enter Nominal">
        </div>

        @endforeach
        <button type="submit" class="btn btn-primary">Submit</button>
    </form>
</div>
@endsection