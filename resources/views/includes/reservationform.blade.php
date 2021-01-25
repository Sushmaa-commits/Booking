<!-- Search -->
<div class="advanced-search color" id="booking">
    <div class="wrap">
        <form role="form" action="/bookings/add" method="post">
            @csrf

            <!-- Row -->
            <div >
                <div class="form-group datepicker one-third">
                    <label for="ret-date">Departure date and time</label>
                    <input type="text" id="ret-date" name="departure_date"/>
                </div>
                <div class="form-group select one-third">
                    <label>Pick up location</label>
                    <select name="pickup_location">
                        <option selected>&nbsp;</option>
                        <optgroup label="Biratnagar">
                            <option value="Inaruwa">Inaruwa</option>
                            <option value="Itahari">Itahari</option>
                        </optgroup>
                    </select>
                </div>
                <div class="form-group select one-third">
                    <label>Drop off location</label>
                    <select name="dropoff_location">
                        <option selected>&nbsp;</option>
                        <optgroup label="Kathmandu">
                            <option value="Gausala">Gausala</option>
                            <option value="Koteswor">Koteswor</option>
                        </optgroup>

                    </select>
                </div>
            </div>
            <!-- //Row -->

            <!-- Row -->
            <div class="f-row">
                <div class="form-group spinner">
                    <label for="people">How many people <small>(including children)</small>?</label>
                    <input type="number" name="number_of_passengers" id="people" min="1" />
                </div>
                <div class="form-group">
                        <label for="oneway">Contact Info</label>
                        <input type="number" name="contact" name="contact" value="contact" checked />
                </div>
                <div class="form-group radios">
                    <div></div>
                    <div>
                        <input type="radio" name="type" name="radio" value="oneway" checked />
                        <label for="oneway">One way</label>
                    </div>
                </div>
                <div class="form-group right">
                    <button type="submit" class="btn large black">Book</button>
                </div>
            </div>
            <!--// Row -->
        </form>
    </div>
</div>
<!-- //Search -->