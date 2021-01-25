@extends('layouts.frontend')
@section('title', 'mytickets')
@section('content')
<div class="wrap">
        <div class="row">
            <div class="three-fourth">
                @foreach ($reservations as $item)
                    <div class="box readonly">
                        <h3>Ticket #{{$item['id']}}</h3>
                        <a href="/booking/edit/{{$item['id']}}" class="btn btn-primary">Edit</a>
                        <form action="/booking/delete/{{$item['id']}}" method="POST">
                            @csrf
                            {{method_field('DELETE')}}
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>

                        <div class="f-row">
                            <div class="one-fourth">departure_date</div>
                            <div class="three-fourth">{{$item['departure_date']}}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">Pickup Location</div>
                            <div class="three-fourth">{{$item['pickup_location']}}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">dropoff_location</div>
                            <div class="three-fourth">{{$item['dropoff_location']}}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">number of passengers</div>
                            <div class="three-fourth">{{$item['number_of_passengers']}}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">type</div>
                            <div class="three-fourth">{{$item['type']}}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">contact</div>
                            <div class="three-fourth">{{$item['contact']}}</div>
                        </div>
                        <div class="f-row">
                            <div class="one-fourth">Booked on</div>
                            <div class="three-fourth">{{$item['created_at']}}</div>
                        </div>
                        
                        
                        <h3>TOTAL: {{$item['number_of_passengers'] * 1200}} NPR</h3>
                    </div>
                @endforeach

            </div>
            <div class="one-fourth">
            </div>
        </div>
    </div>
@endsection
