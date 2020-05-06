@extends('layouts.app')

@section('title')
About - {{$settings["general"]->site_title}}
@endsection

@section('content')
    <div id="about-page">
        <div class="content-box">
            <div class="row">
                <div class="col-md-6">
                    <h1>About Us</h1>
                    <p>
                    I'm baby +1 glossier everyday carry skateboard palo santo hella typewriter 90's chicharrones bicycle rights. DIY jianbing tousled, bitters narwhal gochujang knausgaard letterpress vegan man braid you probably haven't heard of them raw denim scenester pabst. Retro vaporware kombucha bushwick banh mi cronut beard swag. Four loko mumblecore kombucha, disrupt seitan photo booth try-hard yuccie umami migas shoreditch letterpress cronut tumeric. Keytar art party retro af activated charcoal truffaut air plant cloud bread helvetica ramps sartorial.
                    </p>
                    <p>
                    I'm baby +1 glossier everyday carry skateboard palo santo hella typewriter 90's chicharrones bicycle rights. DIY jianbing tousled, bitters narwhal gochujang knausgaard letterpress vegan man braid you probably haven't heard of them raw denim scenester pabst. Retro vaporware kombucha bushwick banh mi cronut beard swag. Four loko mumblecore kombucha, disrupt seitan photo booth try-hard yuccie umami migas shoreditch letterpress cronut tumeric. Keytar art party retro af activated charcoal truffaut air plant cloud bread helvetica ramps sartorial.
                    </p>
                </div>
                <div class="col-md-6">
                    <img src="/img/about-page-img.jpeg" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
@endsection