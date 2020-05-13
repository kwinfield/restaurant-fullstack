@extends('layouts.admin')


@section('content')
        <div class="container-fluid  dashboard-content">
                <div class="container-fluid  dashboard-content">
                <!-- ============================================================== -->
                <!-- pageheader -->
                <!-- ============================================================== -->
                <div class="row">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <div class="page-header">
                            <h2 class="pageheader-title">Edit Reservation</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item"><a href="/admin/reservations" class="breadcrumb-link">All Reservations</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Reservation</li>
                                    </ol>
                                </nav>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ============================================================== -->
                <!-- end pageheader -->
                <!-- ============================================================== -->
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                                <div class="card">
                                        <h5 class="card-header">Edit Reservation</h5>
                                        <div class="card-body">
                                         <form class="splash-container" method="POST" action="/admin/reservations/{{$reservation->id}}">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="inputfirstItem">First Name</label>
                                                    <input id="inputfirstItem" type="text" class="form-control form-control-lg @error('fname') is-invalid @enderror" name="fname" value="{{ old('fname', $reservation->fname) }}" required autocomplete="name" autofocus placeholder="First Name">
                                                    @error('fname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputlastItem">Last Name</label>
                                                    <input id="inputlastItem" type="text" class="form-control form-control-lg @error('lname') is-invalid @enderror" name="lname" value="{{ old('lname', $reservation->lname) }}" required autocomplete="name" autofocus placeholder="Last Name">

                                                    @error('lname')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputemail">Email</label>
                                                    <input id="inputemail" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email', $reservation->email) }}" required autocomplete="email" placeholder="E-mail">

                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputphonenumber">Phone Number</label>
                                                    <input id="inputphonenumber" type="tel" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $reservation->phone_number) }}" autocomplete="phone_number" placeholder="Phone Number">

                                                    @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="guestInput">How Many Guest?</label>
                                                    <select name="guest_total" class="form-control @error('guest_total') is-invalid @enderror" id="guestInput" value="{{ old('guest_total', $reservation->guest_total) }}">
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    </select>
                                                    @error('guest_total')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="guest_total">
                                                    <label for="timeInput">What time?</label>
                                                    <select name="time" class="form-control @error('time') is-invalid @enderror" id="timeInput" value="{{ old('time', $reservation->time) }}">
                                                    <option value="6">6:00</option>
                                                    <option value="7">7:00</option>
                                                    <option value="8">8:00</option>
                                                    <option value="9">9:00</option>
                                                    <option value="10">10:00</option>
                                                    </select>
                                                    @error('time')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="row">
                                                <div class="col-sm-6 pb-2 pb-sm-4 pb-lg-0 pr-0">
                                                        
                                                </div>
                                                <div class="col-sm-6 pl-0">
                                                        <p class="text-right">
                                                        <button type="submit" class="btn btn-space btn-primary">Submit</button>
                                                        </p>
                                                </div>
                                                </div>
                                            </form>
                                        </div>
                                </div>
                                </div>
                
                </div>
        </div>
@endsection