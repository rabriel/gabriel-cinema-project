@extends('layouts.main')

@section('title',  'Browse Films')


@section('content')
    <section class="py-2 pb-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Now Showing</h1>
                <p class="lead text-muted">Currently Showing in Cinema 1 and Cinema 2, book your seat now, please not that you need to login to book. You may not be able to cancel you booking 1-hour prior to the show commencement.</p>
                <p>
                    @guest
                    <a href="#registerModal" class="btn btn-primary my-2" data-bs-toggle="modal" data-bs-target="#registerModal" data-toggle="modal">Register</a>
                    <a href="#loginModal" class="btn btn-secondary my-2" data-bs-toggle="modal" data-bs-target="#loginModal" data-toggle="modal">Login</a>
                    @else
                        <a href="{{ route('backend.index') }}" class="btn btn-primary my-2" >View Bookings</a>
                        <a href="{{ route('logout') }}" class="btn btn-danger my-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                   @endguest
                </p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </section>

    <div class="py-5 bg-dark">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-3">
                @foreach($showing as $film)
                <div class="col">
                    <div class="card shadow-sm bg-light">
                        <img alt="card image" class="card-img-top mt-5" src="{{ asset('/assets/images/films/' . $film['image'] ) }}" />
                        <div class="card-body px-5 mb-4">
                            <h4 class="mt-3 text-center text-uppercase text-primary fw-bold">{{ $film['title'] }}</h4>
                            <p class="card-text mt-4 mb-5">{{ substr($film['description'], 0, 50) }} ...</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <a href="{{ route('frontend.view', $film['id']) }}" class="btn btn-sm btn-outline-secondary">View Film</a>
                                </div>
                                <small class="text-muted">Duration: {{ $film['duration'] }}</small>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
             </div>
        </div>
    </div>
@endsection
