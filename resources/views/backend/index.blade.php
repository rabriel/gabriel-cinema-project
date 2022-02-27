@extends('layouts.main')

@section('title',  'Manage Bookings')


@section('content')
    <section class="py-2 pb-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Your Films</h1>
                <p class="lead text-muted">Hi <strong>{{ Auth::user()->name  }},</strong> below is the films that you have booked, you may also cancel your booking 1 hours prior to the show commencement. </p>
                <p>
                    <a href="{{ route('logout') }}" class="btn btn-danger my-2" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout</a>
                </p>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                    @csrf
                </form>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                @foreach($booked as $film)
                    <div class="col">
                        <div class="card shadow-sm ">
                            <img alt="card image" class="card-img-top mt-5" src="{{ asset('/assets/images/films/' . $film->film['image'] ) }}" />
                            <div class="card-body px-5 mb-4">
                                <h4 class="mt-3 text-center text-uppercase">{{ $film->film['title'] }}</h4>
                                <p class="card-text mt-4 mb-5">{{ substr($film->film['description'], 0, 120) }} [...]</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-danger">Cancel Booking</button>
                                        <a href="{{ route('backend.view', $film->film['id']) }}" class="btn btn-sm btn-outline-secondary">View Film</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
