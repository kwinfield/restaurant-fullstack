@extends('layouts.app')

@section('title')
Contact - {{$settings["general"]->site_title}}
@endsection

@section('content')
    <div id="contact-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>Contact Us</h1>
                    <h3>Address</h3>
                    <p>
                    {{$settings["general"]->address_1}},<br>
                    {{$settings["general"]->city}}, {{$settings["general"]->state}} {{$settings["general"]->zipcode}} </p>
                    <h3>Phone Number</h3>
                    <p>
                    <p><a href="{{$settings["general"]->phone_number}}">(410) 760-3421</a></p>
                </div>
                <div class="col-md-6">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d98951.09164594057!2d-76.64478366152491!3d39.192412856028795!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe196b02fd7c305b!2sBurger%20King!5e0!3m2!1sen!2sus!4v1588796796204!5m2!1sen!2sus" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0">
                    </iframe>
                </div>
            </div>
        </div>
    </div>
@endsection