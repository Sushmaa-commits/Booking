<?php

namespace App\Http\Controllers;

use App\User;
use Carbon\Carbon;
use App\Reservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $reservations = Reservation::all();

        foreach($reservations as $item){
            $user = User::find($item->user_id);
    
            $item['bookers_name'] = $user->name;
        }
        return view('allreservations')->with('reservations', $reservations);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('reserve');
    }

    public function getUserTickets()
    {
        $reservations=Reservation::where('user_id', Auth::id())->get()->toArray();

        return view('getusertickets')->with('reservations',$reservations);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->toArray();

        $reservation = new Reservation();

        $reservation->departure_date = Carbon::parse($data['departure_date']);
        $reservation->pickup_location = $data['pickup_location'];
        $reservation->dropoff_location = $data['dropoff_location'];
        $reservation->number_of_passengers = $data['number_of_passengers'];
        $reservation->type = $data['type'];
        $reservation->contact = $data['contact'];
        $reservation->user_id = Auth::id();

        $reservation->save();

        return redirect('/reserve');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $reservation = Reservation::find($id);
        return view('editreservation')->with('reservation', $reservation);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $reservation = Reservation::find($id);
        $reservation->departure_date = Carbon::parse($request->departure_date);
        $reservation->pickup_location = $request->pickup_location;
        $reservation->dropoff_location = $request->dropoff_location;
        $reservation->number_of_passengers = $request->number_of_passengers;
        $reservation->contact = $request->contact;
        $reservation->save();
        
        return redirect('/mytickets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $reservation = Reservation::find($id);

        $reservation->delete();

        return redirect('/mytickets');
    }
}
