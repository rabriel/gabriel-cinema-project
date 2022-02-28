@extends('layouts.main')

@section('title',  ' '  . $booked['title'] . ' Details')


@section('content')
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Booked Film Details</h1>
            </div>
        </div>
    </section>

    <div class="album py-5 bg-dark text-white">
        <div class="container">

            <div class="row">
                <div class="col-md-4 text-center">
                    <img src="{{ asset('/assets/images/films/' . $booked->film['image'] ) }}" class="img-fluid">
                </div>
                <div class="col-md-8">
                    <h4 class="mt-3 text-uppercase text-primary">{{ $booked->film['title'] }}</h4>
                    <hr>
                    {{ $booked->film['description'] }}
                    <hr>
                    <h4 class="mt-3 text-uppercase text-primary mt-4">Booking Reference</h4>
                    <p class=""><strong>{{ $booked->booking_reference }}</strong></p>
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
                        <tr>
                            <td>{{ date('D', (strtotime($booked->show_time)))   }}</td>
                            <td>{{ date('H:i:s', (strtotime($booked->show_time)))   }}</td>
                            <td>{{ $booked->cinema->name  }}</td>
                        </tr>
                        <tr>
                            <!--begin:: Check If User can Cancel Their Booking -->
                            <td colspan="3">
                                <?php $show_start = \Carbon\Carbon::parse($booked->show_time) ?>
                                <?php $current_time = Carbon\Carbon::now()->addHours(1)  ?>
                               <strong>{{ $current_time > $show_start ? 'Cancellation UnAvailable' : 'Cancellation Available' }}</strong>
                           </td>
                        </tr>
                        <!--end:: Check If User can Cancel Their Booking -->
                        </tbody>
                    </table>
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                            <a href="{{ url()->previous() }}" class="btn btn-sm btn-secondary mt-3">Return Back</a>
                        </div>
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection
