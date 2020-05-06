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
                            <h2 class="pageheader-description">Seo Settings</h2>
                            <p class="pageheader-text">Proin placerat ante duiullam scelerisque a velit ac porta, fusce sit amet vestibulum mi. Morbi lobortis pulvinar quam.</p>
                            <div class="page-breadcrumb">
                                <nav aria-label="breadcrumb">
                                    <ol class="breadcrumb">
                                        <li class="breadcrumb-item"><a href="/admin" class="breadcrumb-link">Dashboard</a></li>
                                        <li class="breadcrumb-item active" aria-current="page">Edit Seo Settings</li>
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
                                        <h5 class="card-header">Edit Seo Settings</h5>
                                        <div class="card-body">
                                        <form class="splash-container" method="POST" action="/admin/settings/seo">
                                                @csrf
                                                @method('PUT')
                                                <div class="form-group">
                                                    <label for="inputdescription">Description</label>
                                                    <input id="inputdescription" type="text" class="form-control form-control-lg @error('description') is-invalid @enderror" name="description" value="{{ old('description', $category->description) }}" required autocomplete="description" autofocus placeholder="Add Site Title">
                                                    @error('description')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                                <div class="form-group">
                                                    <label for="inputkeywords">Keywords</label>
                                                    <input id="inputkeywords" type="text" class="form-control form-control-lg @error('keywords') is-invalid @enderror" name="keywords" value="{{ old('keywords', $category->keywords) }}" required autocomplete="keywords" autofocus placeholder="Add Street Address">
                                                    @error('keywords')
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
                                                        <button type="submit" class="btn btn-space btn-primary" onclick="if (! confirm('Your SEO Settings have been updated!')) {return false;}">Submit</button>
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