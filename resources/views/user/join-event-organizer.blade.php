<!doctype html>
<html lang="en">

<head>
    <title>Login</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="/css/login/style.css">

</head>

<body>
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center">
                    <h2 class="heading-section">Planee</h2>
                    @if ($notification = Session::get('success-register'))
                        <div class="alert alert-success alert-block">
                            <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                    @if ($notification = Session::get('failed'))
                        <div class="alert alert-danger alert-block">
                            <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">                        
                        <h3 class="text-center mb-4">Be an Event Organizer</h3>
                        <form action="{{ url('/user/join-event-organizer') }}" class="login-form" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Address" name="address"
                                    required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control rounded-left" placeholder="Phone"
                                    name="phone" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control rounded-left" placeholder="Website"
                                    name="website">
                            </div>
                            <div class="form-group d-flex">
                                <input type="text" class="form-control rounded-left" placeholder="NPWP"
                                    name="NPWP" required>
                            </div>
                            <div class="form-group d-md-flex">
                                <div class="w-50">
                                    {{-- <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label> --}}
                                </div>
                                <div class="w-50 text-md-right">
                                    <a href="/register">Create Account?</a>
                                </div>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Login</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="/js/login/jquery.min.js"></script>
    <script src="/js/login/popper.js"></script>
    <script src="/js/login/bootstrap.min.js"></script>
    <script src="/js/login/main.js"></script>

</body>

</html>