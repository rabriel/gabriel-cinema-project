@extends('layouts.main')

@section('title',  'Manage Bookings')


@section('content')
    <section class="py-2 pb-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                @if($booked->isEmpty())
                    <h1 class="fw-light">No Bookings</h1>
                    <p class="lead text-muted">Hi <strong>{{ Auth::user()->name  }},</strong> looks like you haven’t made any bookings yet, you can easily <strong><a href="/"> click here</a></strong> to start booking your films. </p>
                @else
                <h1 class="fw-light">Your Films</h1>
                <p class="lead text-muted">Hi <strong>{{ Auth::user()->name  }},</strong> below is the films that you have booked, you may also cancel your booking 1 hours prior to the show commencement. </p>
                @endif
                <p>
                    <a href="/" class="btn btn-primary my-2" >Book Films</a>
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
            <!--begin:: Get Users Booked Films -->
            @if($booked->isEmpty())
            @else
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-5">
                @foreach($booked as $film)
                    <div class="col">
                        <div class="card shadow-sm ">
                            <img alt="card image" class="card-img-top mt-5" src="{{ asset('/assets/images/films/' . $film->film['image'] ) }}" />
                            <div class="card-body px-5 mb-4">
                                <h4 class="mt-3 text-center text-uppercase">{{ $film->film['title'] }}</h4>

                                <p class="card-text mt-4 mb-5 text-center"><strong>Booking Reference</strong> <br>{{ $film->booking_reference }}</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        <form  method="post" action="{{ route('backend.cancel-booking',  $film['id']) }}">
                                            @csrf
                                           <button type="submit" class="btn btn-sm btn-danger">Cancel Booking</button>
                                        </form>
                                        <a href="{{ route('backend.view', $film['id']) }}" class="btn btn-sm btn-outline-secondary">View Film</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            @endif
           <!--end:: Get Users Booked Films -->
        </div>
    </div>
@endsection
