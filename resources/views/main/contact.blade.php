@extends('main/template/main-template')

@section('title')
    Contact Us
@stop

@section('active-class-contact')
    current-list-item
@stop

@section('content')
    <!-- breadcrumb-section -->
    <div class="breadcrumb-section breadcrumb-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 text-center">
                    <div class="breadcrumb-text">
                        <p>Get 24/7 Support</p>
                        <h1>Contact us</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end breadcrumb section -->

    <!-- contact form -->
    @if ($notification = Session::get('success'))
        <div class="alert alert-success alert-block">
            <strong>{{ $notification }}</strong>
        </div>
    @endif
    @if ($notification = Session::get('error'))
        <div class="alert alert-danger alert-block">
            <strong>{{ $notification }}</strong>
        </div>
    @endif
    <div class="contact-from-section mt-150 mb-150">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0">
                    <div class="form-title">
                        <h2>Have you any question?</h2>
                    </div>
                    <div id="form_status"></div>
                    <div class="contact-form">
                        <form type="POST" id="planee-contact" onSubmit="return valid_datas( this );"
                            action="/admin/contact">
                            @csrf
                            <p>
                                <input type="text" placeholder="Name" name="name" id="name">
                                <input type="email" placeholder="Email" name="email" id="email">
                            </p>
                            <p>
                                <input type="tel" placeholder="Phone" name="phone" id="phone">
                                <input type="text" placeholder="Subject" name="subject" id="subject">
                            </p>
                            <p>
                                <textarea name="message" id="message" cols="30" rows="10" placeholder="Message"></textarea>
                            </p>
                            <input type="hidden" name="token" value="FsWga4&@f6aw" />
                            <p><input type="submit" value="Submit"></p>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="contact-form-wrap">
                        <div class="contact-form-box">
                            <h4><i class="fas fa-map"></i> Address</h4>
                            <p>Keputih, Sukolilo, <br> Surabaya City, <br> East Java 60117</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="far fa-clock"></i> Online Hours</h4>
                            {{-- <p>MON - FRIDAY: 8 to 9 PM <br> SAT - SUN: 10 to 8 PM </p> --}}
                            <p>24 Hours</p>
                        </div>
                        <div class="contact-form-box">
                            <h4><i class="fas fa-address-book"></i> Contact</h4>
                            <p>Phone: <br> Email: planeeidn@gmail.com</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- end contact form -->

    <!-- find our location -->
    <div class="find-location blue-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <p> <i class="fas fa-map-marker-alt"></i> Find Us</p>
                </div>
            </div>
        </div>
    </div>
    <!-- end find our location -->

    <!-- google map section -->
    <div class="embed-responsive embed-responsive-21by9">
        <iframe <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3957.637250161104!2d112.79216731379708!3d-7.282049973585347!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa130a8e340f%3A0xd998df9d9b8dc70e!2sSurabaya%2C%20Keputih%2C%20Sukolilo%2C%20Surabaya%20City%2C%20East%20Java%2060117!5e0!3m2!1sen!2sid!4v1657873985559!5m2!1sen!2sid"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade" class="embed-responsive-item"></iframe>
    </div>
    <!-- end google map section -->
@endsection
