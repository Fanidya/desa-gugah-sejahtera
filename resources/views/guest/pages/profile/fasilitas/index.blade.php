@extends('guest.layouts.main')
@section('container')
    <div class="container my-5">
        <h2 class="text-center mb-4">Fasilitas Desa</h2>
        <div class="row">
            @foreach ($fasilitas as $fasilita)
                <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="{{ asset("storage/".$fasilita->image_url) }}" class="card-img-top" alt="Foto " data-bs-toggle="modal"
                        data-bs-target="#fotoModal-{{ $loop->iteration }}">
                    <div class="card-body">
                        <h5 class="card-title">{{ $fasilita->title }}</h5>
                    </div>
                </div>
            </div>

            <!-- Modal untuk setiap foto -->
            <div class="modal fade" id="fotoModal-{{ $loop->iteration }}" tabindex="-1" aria-labelledby="fotoModalLabel"
                aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="fotoModalLabel">Foto {{ $fasilita->title }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <img src="{{ asset("storage/".$fasilita->image_url) }}" class="img-fluid" alt="Foto ">
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection
