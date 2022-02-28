@extends('layouts.main')

@section('title',  ' '  . $film['title'] . ' Details')


@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-bold">Film Details</h1>
            </div>
        </div>
    </section>

    <div class="film py-5 bg-dark text-white">
        <div class="container">

            <div class="row">
                <div class="col-md-4 text-center mb-5">
                   <img src="{{ asset('/assets/images/films/' . $film['image'] ) }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4 class="mt-3 text-uppercase text-primary mt-4">{{ $film['title'] }}</h4>
                    <hr>
                    {{ $film['description'] }}
                    <hr>
                    <h4 class="mt-3 text-uppercase text-primary mt-4">Showtime</h4>
                    <br>
                    <table class="table text-white">
                        <thead>
                        <tr>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                            <th scope="col">Cinema & Theatre</th>
                           </tr>
                        </thead>
                        <tbody>
                        <!--begin:: Get Film Showtimes -->
                        @foreach($film->showTimes as $showtime)
                            <tr>
                                <td>{{ date('D', (strtotime($showtime->show_date)))   }}</td>
                                <td>{{ date('H:i:s', (strtotime($showtime->show_date)))   }}</td>
                                <td>{{ $film->theatre->cinema->name  }} <sup><strong>{{ $film->theatre->name  }}</strong></sup></td>
                            </tr>
                        @endforeach
                        <!--end:: Get Film Showtimes -->
                      </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group mt-4">
                            @guest
                            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#loginModal">Book Now</button>
                            @else
                                <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="collapse" href="#bookingInfo" role="button" aria-expanded="false" aria-controls="bookingInfo">Book Now</button>
                            @endguest
                            <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary">Return Back</a>
                        </div>
                        <small class="text-muted">Duration: {{ $film['duration'] }}</small>
                    </div>
                    @guest

                    @else
                    <div class="collapse mt-5" id="bookingInfo">
                        <div class="card card-body">
                            <form class="row g-3" method="post" action="{{ route('backend.post-booking') }}">
                                @csrf
                                <!--begin:: hidden input fields -->
                                <input type="hidden" class="form-control" name="user_id" value="{{ Auth::user()->id }}">
                                <input type="hidden" class="form-control" name="cinema_id" value="{{ $film->theatre->cinema->id }}">
                                <input type="hidden" class="form-control" name="film_id" value="{{ $film['id'] }}">

                                <!--end:: hidden input fields -->
                                <div class="col-md-10">
                                    <label for="show_time" class="form-label">Time & Cinema</label>
                                    <select name="show_time" class="form-select">
                                        <option selected>Choose...</option>
                                        @foreach($film->showTimes as $showtime)
                                            <option value="{{ date($showtime->show_date) }}"> {{ date('D', (strtotime($showtime->show_date)))   }} @ {{ date('H:i:s', (strtotime($showtime->show_date)))   }} in <strong>{{ $film->theatre->cinema->name  }}</strong></option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-2">
                                    <label for="tickets" class="form-label">Tickets</label>
                                    <input type="number" class="form-control" name="tickets" value="{{ old('tickets') }}">
                                </div>
                                <div class="col-12">
                                    <button type="submit" class="btn btn-primary">Book {{ $film['title'] }}</button>
                                </div>
                            </form>
                        </div>
                    </div>

                    @endguest
                </div>
            </div>

        </div>
    </div>
@endsection
