@extends('layout')

@section('konten')

<div class="row">
    <div class="col-lg-8">

        <section class="mt-2">
            <div class="card bg-light">
                <div class="card-body">
                    <!-- Comment form-->
                    <!-- Single comment-->
                    <!-- Post title-->
                <h2 class="fw-bolder mb-1">Selamat Datang di Web Pembayaran SPP</h2>
                <!-- Post meta content-->
                <div class="text-muted fst-italic mb-2">Posted on March 23, 2023 by {{ Auth::user()->nama_petugas; }} </div>
                <!-- Post categories-->
                </div>
            </div>
        </section>
        <!-- Comments section-->
        <section class="mt-2">
            <div class="card bg-light">
                <div class="card-body">
                    <!-- Comment form-->
                    <!-- Single comment-->
                    <div class="d-flex">
                        <div class="flex-shrink-0"><img class="rounded-circle" src="https://dummyimage.com/50x50/ced4da/6c757d.jpg" alt="..." /></div>
                        <div class="ms-3">
                            <div class="fw-bold">Hello..{{ Auth::user()->nama_petugas; }}</div>
                            <p>Anda login sebagai {{ Auth::user()->level; }} </p>
                            <p> Silahkan gunakan aplikasi pembayaran SPP ini sesuai kebutuhan </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
@endsection