@extends('layouts.app')

@section('title')
Reservation Confirmed - {{$settings["general"]->site_title}}
@endsection

@section('content')
    <div id="offers-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-8 offset-md-2 thank-you">
                    <h1 class="text-center">Thank You</h1>
                    <p class="text-center">You reservation has been confirmed</p>
                </div>
            </div>
        </div>
    </div>
@endsection