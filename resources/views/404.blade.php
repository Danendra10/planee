@extends('main/template/main-template')

@section('title')
    404!
@stop

@section('content')

    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Fresh adn Organic</p>
                        <h1>404 - Not Found</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->
    <!-- error section -->
    <div class="full-height-section error-section">
        <div class="full-height-tablecell">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 offset-lg-2 text-center">
                        <div class="error-text">
                            <i class="far fa-sad-cry"></i>
                            <h1>Oops! Not Found.</h1>
                            <p>The page you requested for is not found.</p>
                            @if (Auth::check())
                                @if (Auth::user()->role == 'user')
                                    <a href="/user/dashboard" class="boxed-btn">Back to Home</a>
                                @elseif(Auth::user()->role == 'vendor')
                                    <a href="/vendor/dashboard" class="boxed-btn">Back to Home</a>
                                @elseif(Auth::user()->role == 'event-organizer')
                                    <a href="/event-organizer/dashboard" class="boxed-btn">Back to Home</a>
                                @endif
                            @else
                                <a href="/" class="boxed-btn">Back to Home</a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
