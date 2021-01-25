<!-- Search -->
<div class="advanced-search color" id="booking">
        <div class="wrap">
            <form role="form" action="/booking/update/{{$reservation->id}}" method="post">
                @csrf
    
                <!-- Row -->
                <div >
                    <div class="form-group datepicker one-third">
                        <label for="ret-date">Departure date and time</label>
                        <input type="text" value="{{$reservation->departure_date}}" id="ret-date" name="departure_date"/>
                    </div>
                    <div class="form-group select one-third">
                        <label>Pick up location</label>
                        <select name="pickup_location" value="{{$reservation->pickup_location}}">
                            <option selected>&nbsp;</option>
                            <option value="Inaruwa">Inaruwa</option>
                            <option value="Itahari">Itahari</option>
                        </select>
                    </div>
                    <div class="form-group select one-third">
                        <label>Drop off location</label>
                        <select name="dropoff_location"  value="{{$reservation->pickup_location}}">
                            <option selected>&nbsp;</option>
                            <option value="Gausala">Gausala</option>
                            <option value="Koteswor">Koteswor</option>
                        </select>
                    </div>
                </div>
                <!-- //Row -->
    
                <!-- Row -->
                <div class="f-row">
                    <div class="form-group spinner">
                        <label for="people">How many people <small>(including children)</small>?</label>
                        <input type="number"  value="{{$reservation->number_of_passengers}}" name="number_of_passengers" id="people" min="1" />
                    </div>
                    <div class="form-group">
                            <label for="oneway">Contact Info</label>
                            <input type="number" value="{{$reservation->contact}}" name="contact" name="contact" value="contact" checked />
                    </div>
                    <div class="form-group radios">
                        <div></div>
                        <div>
                            <input type="radio" name="type" name="radio" value="oneway" checked />
                            <label for="oneway">One way</label>
                        </div>
                    </div>
                    <div class="form-group right">
                        <button type="submit" class="btn large black">Update</button>
                    </div>
                </div>
                <!--// Row -->
            </form>
        </div>
    </div>
    <!-- //Search -->