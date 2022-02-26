@extends('layouts.main')

@section('title',  'Browse Movies')


@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Now Showing</h1>
                <p class="lead text-muted">Currently Showing in Cinema 1 and Cinema 2, book your seat now, please not that you need to login to book. You may not be able to cancel you booking 1-hour prior to the show commencement.</p>
                <p>
                    <a href="#" class="btn btn-primary my-2">Cinema 1</a>
                    <a href="#" class="btn btn-secondary my-2">Cinema 2</a>
                </p>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                @foreach($showing as $film)
                <div class="col">
                    <div class="card shadow-sm ">
                        <img alt="card image" class="card-img-top mt-5" src="{{ asset('/assets/images/films/' . $film['image'] ) }}" />
                        <div class="card-body px-5 mb-4">
                            <h4 class="mt-3 text-center text-uppercase">{{ $film['title'] }}</h4>
                            <p class="card-text mt-4 mb-5">{{ substr($film['description'], 0, 120) }} [...]</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Book Now</button>
                                    <a href="{{ route('frontend.view', $film['id']) }}" class="btn btn-sm btn-outline-secondary">View Film</a>
                                </div>
                                <small class="text-muted">Duration: 1h 55m</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             </div>
        </div>
    </div>
@endsection
