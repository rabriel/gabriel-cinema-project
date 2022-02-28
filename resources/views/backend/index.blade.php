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
                <h1 class="fw-bold">Your Booked Films</h1>
                <p class="lead text-muted">Hi <strong>{{ Auth::user()->name  }},</strong> below is the films that you have booked, you may also cancel your booking 1 hours prior to the show commencement. </p>
                    <hr>
                    <p>For Testing Purposes, admin may also tweak booked films dates to hour prior to show start. <a href="javascript:void(0)" class="text-white fw-bold" data-bs-toggle="modal" data-bs-target="#datesModal"> Tweak Dates</a></p>
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

    <div class="py-5 bg-dark">
        <div class="container">
            <!--begin:: Get Users Booked Films -->
            @if($booked->isEmpty())
            @else
                <div class="row row-cols-1 row-cols-sm-1 row-cols-md-3 g-3">
                @foreach($booked as $film)
                    <div class="col">
                        <div class="card shadow-sm ">
                            <img alt="card image" class="card-img-top mt-5" src="{{ asset('/assets/images/films/' . $film->film['image'] ) }}" />
                            <div class="card-body px-5 mb-4">
                                <h4 class="mt-3 text-center text-uppercase text-primary fw-bold">{{ $film->film['title'] }}</h4>
                                <p class="card-text mt-4 mb-5 text-center"><strong>Booking Reference</strong> <br>{{ $film->booking_reference }}</p>
                                <div class="d-flex justify-content-center align-items-center">
                                    <div class="btn-group">
                                        <form  method="post" action="{{ route('backend.cancel-booking',  $film['id']) }}">
                                            @csrf
                                           <button type="submit" class="btn btn-sm btn-danger">Cancel Booking</button>
                                        </form>
                                        <a href="{{ route('backend.view', $film['id']) }}" class="btn btn-sm btn-primary">View Film</a>
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

    <!-- begin:: changes dates modal -->
    @if($booked->isEmpty())
    @else
    <div class="modal fade" id="datesModal" tabindex="-1" aria-labelledby="datesModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <form method="post" action="{{ route('backend.tweak-dates') }}">
                @csrf
                <div class="modal-content bg-dark text-white">
                    <div class="modal-header">
                        <h5 class="modal-title text-primary py-3" id="exampleModalLabel">Change Dates For Booked Movies</h5>
                        <button type="button" class="btn-close text-white" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="email" class="form-label">Booked Movies</label>
                                @foreach($booked as $film)
                                <select name="id" class="form-select">
                                    <option value="{{ $film['id'] }}">{{ $film->film['title'] }}@ {{ $film['show_time'] }}</option>
                                </select>
                                @endforeach
                            </div>
                            <div class="col-md-12">
                                <label for="show_time" class="form-label">New Date</label>
                                <input type="text" class="form-control" name="show_time" placeholder="2022-03-03 20:00:00" value="{{ old('show_time') }}">
                            </div>

                            <div class="col-md-12 text-center">
                                <p>Please change date to 1 hours prior before the show start. <br><strong>Use current time form your PC.</strong></p>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer border-0">
                        <button type="submit" class="btn btn-primary m-auto border-0 mb-4">Submit Testing Date</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- end:: changes dates modal -->
    @endif
@endsection
