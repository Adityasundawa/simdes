@extends('layouts.app')

@section('title', 'Pecah Kk')

@section('content-header')
    <div class="header pb-8 pt-5 pt-lg-8 d-flex align-items-center"
        style="background-image: url({{ asset('/img/cover-bg-profil.jpg') }}); background-size: cover; background-position: center top;">
        <div class="container-fluid">
            <div class="row">
                <div class="col">
                    <div class="card shadow h-100">
                        <div class="card-header border-0">
                            <div
                                class="d-flex flex-column flex-md-row align-items-center justify-content-center justify-content-md-between text-center text-md-left">
                                <div class="mb-3">
                                    <h2 class="mb-0">Pecah Kk</h2>
                                    <p class="mb-0 text-sm">Kelola Penduduk</p>
                                </div>
                                <div class="mb-3">

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('content')
    @include('layouts.components.alert')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <div class="col-6">
                        <form action="{{ route('penduduk.keluarga.pecah_kartu_keluarga.action') }}" method="post">

                            @csrf

                            <div class="form-group col-lg-4 col-md-6">

                                <input type="hidden" class="form-control mt-2"
                                name="id" placeholder="Masukkan No Kk ..." value="{{ $penduduk->id }}">

                                <input type="text" class="form-control mt-2"
                                    name="kk" placeholder="Masukkan No Kk ..." value="">
                                 <button type="submit" class="btn btn-sm btn-primary">Submit</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
