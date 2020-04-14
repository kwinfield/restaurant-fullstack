@extends('layouts.app')


@section('content')
    <div id="waitlist-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Get On The List</h1>
                    <form>
                        <div class="form-group">
                            <label for="emailInput">Email Address</label>
                            <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                        </div>
                        <div class="form-group">
                            <label for="phoneInput">Phone Number</label>
                            <input type="phone" class="form-control" id="phoneInput" placeholder="000-000-0000">
                        </div>
                        <div class="form-group">
                            <label for="guestInput">How Many Guest?</label>
                            <select name="guest" class="form-control" id="guestInput">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="timeInput">What time?</label>
                            <select name="time" class="form-control" id="timeInput">
                            <option value="6">6:00</option>
                            <option value="7">7:00</option>
                            <option value="8">8:00</option>
                            <option value="9">9:00</option>
                            <option value="10">10:00</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary mb-2">Confirm</button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6">
                    <p>Please Note: This is not a reservation. You will be added to the current wait list. You may have a short wait once you arrive while we prepare your table.
                </div>
            </div>
        </div>
    </div>
@endsection