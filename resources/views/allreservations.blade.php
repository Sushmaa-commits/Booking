@extends('layouts.dash')
@section('content')
<div class="card mb-3">
    <div class="card-header">
        <i class="fas fa-ticket-alt"></i>
        All Users reservations</div>
    <div class="card-body">
        <div class="table-responsive">
            <div id="dataTable_wrapper" class="dataTables_wrapper dt-bootstrap4">
                <div class="row">
                    <div class="col-sm-12">
                        <table class="table table-bordered dataTable" id="dataTable" width="100%" cellspacing="0" role="grid"
                            aria-describedby="dataTable_info" style="width: 100%;">
                            <thead>
                                <tr role="row">
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                        style="width: 160px;">Departure Date</th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Position: activate to sort column ascending" style="width: 268px;">Pickup Location</th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Office: activate to sort column ascending" style="width: 114px;">Dropoff Location</th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Age: activate to sort column ascending" style="width: 52px;">Number_of_passengers</th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Start date: activate to sort column ascending" style="width: 110px;">Type</th>
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                        aria-label="Salary: activate to sort column ascending" style="width: 89px;">Contact</th>
                                        
                                    <th tabindex="0" aria-controls="dataTable" rowspan="1" colspan="1"
                                    aria-sort="ascending" aria-label="Name: activate to sort column descending"
                                    style="width: 160px;">Booker's Name</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($reservations as $item)
                                    <tr role="row" class="odd">
                                        <td>{{$item->departure_date}}</td>
                                        <td>{{$item->pickup_location}}</td>
                                        <td>{{$item->dropoff_location}}</td>
                                        <td>{{$item->number_of_passengers}}</td>
                                        <td>{{$item->type}}</td>
                                        <td>{{$item->contact}}</td>
                                        <td>{{$item->bookers_name}}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
