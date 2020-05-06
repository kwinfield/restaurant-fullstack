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
                            <h2 class="pageheader-site_title">General Settings</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit General Settings</li>
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
                                        <h5 class="card-header">Edit General Settings</h5>
                                        <div class="card-body">
                                        <form class="splash-container" method="POST" action="/admin/settings/general">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="inputtitle">Business Name</label>
                                                    <input id="inputtitle" type="text" class="form-control form-control-lg @error('site_title') is-invalid @enderror" name="site_title" value="{{ old('site_title', $category->site_title) }}" required autocomplete="site_title" autofocus placeholder="Add Site Title">
                                                    @error('site_title')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputaddress1">Address 1</label>
                                                    <input id="inputaddress1" type="text" class="form-control form-control-lg @error('address_1') is-invalid @enderror" name="address_1" value="{{ old('address_1', $category->address_1) }}" required autocomplete="address_1" autofocus placeholder="Add Street Address">
                                                    @error('address_1')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputaddress2">Address 1</label>
                                                    <input id="inputaddress2" type="text" class="form-control form-control-lg @error('address_2') is-invalid @enderror" name="address_2" value="{{ old('address_2', $category->address_2) }}" autocomplete="address_2" autofocus placeholder="">
                                                    @error('address_2')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputcity">City</label>
                                                    <input id="inputcity" type="text" class="form-control form-control-lg @error('city') is-invalid @enderror" name="city" value="{{ old('city', $category->city) }}" required autocomplete="city" autofocus placeholder="Add City">
                                                    @error('city')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputstate">State</label>
                                                    <input id="inputstate" type="text" class="form-control form-control-lg @error('state') is-invalid @enderror" name="state" value="{{ old('state', $category->state) }}" required autocomplete="state" autofocus placeholder="Add State">
                                                    @error('state')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputzipcode">Zipcode</label>
                                                    <input id="inputzipcode" type="text" class="form-control form-control-lg @error('zipcode') is-invalid @enderror" name="zipcode" value="{{ old('zipcode', $category->zipcode) }}" required autocomplete="zipcode" autofocus placeholder="Add Zipcode">
                                                    @error('zipcode')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputphonenumber">Phone Number</label>
                                                    <input id="inputphonenumber" type="text" class="form-control form-control-lg @error('phone_number') is-invalid @enderror" name="phone_number" value="{{ old('phone_number', $category->phone_number) }}" required autocomplete="phone_number" autofocus placeholder="Add Phone Number">
                                                    @error('phone_number')
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
                                                        <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Your General Settings have been updated!')) {return false;}">Submit</button>
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