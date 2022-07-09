<!doctype html>
<html lang="en">

<head>
    <title>Register</title>
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
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Planee</h2>
                    @if ($notification = Session::get('error'))
                        <div class="alert alert-danger mt-3" role="alert">
                            <strong>{{ $notification }}</strong>
                        </div>
                    @endif

                    @if ($notification = Session::get('success'))
                        <div class="alert alert-success mt-3" role="alert">
                            <strong>{{ $notification }}</strong>
                        </div>
                    @endif
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <div class="login-wrap p-4 p-md-5">
                        <div class="icon d-flex align-items-center justify-content-center">
                            <span class="fa fa-user-o"></span>
                        </div>
                        <h3 class="text-center mb-4">Create your account</h3>
                        <form action="{{ url('/register') }}" class="login-form text-center" method="POST">
                            @csrf
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Username" name="name" required>
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control rounded-left" placeholder="Email" name="email" required>
                            </div>
                            <div class="form-group d-flex">
                                <input type="password" class="form-control rounded-left" placeholder="Password" name="password" required>
                                    required>
                            </div>
                            {{-- <select class="form-select" aria-label="Default select example" name="access_right">
                                <option selected>Choose Your Role</option>
                                <option value="user">User</option>
                                <option value="vendor">Vendor</option>
                                <option value="event-organizer">Event Organizer</option>
                            </select> --}}

                            {{-- Tambah, jika memilih partner, maka akan ada data tambahan yang harus diisikan. --}}
                            {{-- <div class="form-group d-md-flex">
                                <div class="w-50">
                                    <label class="checkbox-wrap checkbox-primary">Remember Me
                                        <input type="checkbox" checked>
                                        <span class="checkmark"></span>
                                    </label>
                                </div> --}}
                            <div class="w-50 text-right">
                                <a href="/login">Have an account?</a>
                            </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary rounded submit p-3 px-5">Get
                            Started</button>
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
