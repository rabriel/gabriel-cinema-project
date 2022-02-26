@extends('layouts.main')

@section('title',  ' '  . $film['title'] . ' Details')


@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Film Details</h1>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-light">
        <div class="container">

            <div class="row">
                <div class="col-md-4">
                   <img src="{{ asset('/assets/images/films/' . $film['image'] ) }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4 class="mt-3 text-uppercase">{{ $film['title'] }}</h4>
                    <hr>
                    {{ $film['description'] }}
                    <hr>
                    <h4 class="mt-3 text-uppercase">Showtime</h4>
                    <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                           </tr>
                        </thead>
                        <tbody>
                        <!--begin:: Get Film Showtimes -->
                        @foreach($film->showTimes as $showtime)
                            <tr>
                                <td>{{ date('D', (strtotime($showtime->show_date)))   }}</td>
                                <td>{{ date('H:i:s', (strtotime($showtime->show_date)))   }}</td>
                            </tr>
                        @endforeach
                        <!--end:: Get Film Showtimes -->
                      </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <button type="button" class="btn btn-sm btn-outline-secondary">Book Now</button>
                            <a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-secondary">Return Back</a>
                        </div>
                        <small class="text-muted">Duration: 1h 55m</small>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
