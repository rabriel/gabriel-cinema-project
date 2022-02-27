@extends('layouts.main')

@section('title',  ' '  . $booked['title'] . ' Details')


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
                    <img src="{{ asset('/assets/images/films/' . $booked->film['image'] ) }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4 class="mt-3 text-uppercase">{{ $booked->film['title'] }}</h4>
                    <hr>
                    {{ $booked->film['description'] }}
                    <hr>
                    <h4 class="mt-3 text-uppercase">Booking Reference</h4>
                    <p><strong>{{ $booked->booking_reference }}</strong></p>
                    <hr>
                    <h4 class="mt-3 text-uppercase">Showtime</h4>
                    <br>
                    <table class="table">
                        <thead>
                        <tr>
                            <th scope="col">Day</th>
                            <th scope="col">Time</th>
                            <th scope="col">Cinema & Theatre</th>
                        </tr>
                        </thead>
                        <tbody>
                        <!--begin:: Get Film Showtimes -->
                          <tr>
                                <td>{{ date('D', (strtotime($booked->show_time)))   }}</td>
                                <td>{{ date('H:i:s', (strtotime($booked->show_time)))   }}</td>
                                <td>{{ $booked->cinema->name  }}</td>
                            </tr>
                       <!--end:: Get Film Showtimes -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <button type="button" class="btn btn-sm btn-danger" >Cancel Booking</button>
                           <a href="{{ url()->previous() }}" class="btn btn-sm btn-outline-secondary">Return Back</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
