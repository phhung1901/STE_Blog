@extends('account.index')
@section('account')
    <!-- This snippet uses Font Awesome 5 Free as a dependency. You can download it at fontawesome.io! -->

    <body>
        <div class="container">
            <div class="row">
                <div class="col-lg-10 col-xl-9 mx-auto">
                    <div class="card flex-row my-5 border-0 shadow rounded-3 overflow-hidden">
                        <div class="card-img-left d-none d-md-flex">
                            <!-- Background image for card set in CSS! -->
                        </div>
                        <div class="card-body p-4 p-sm-5">
                            <h5 class="card-title text-center mb-5 fw-light fs-5">Register</h5>
                            <form action="{{ route('register') }}" method="POST">
                                @csrf
                                @if (session()->has('noti'))
                                    <div class="alert alert-danger" role="alert">
                                        <strong>{{ session('noti') }}</strong>
                                    </div>
                                @endif
                                <div class="form-floating mb-3">
                                    <label for="floatingInputUsername">Username</label>
                                    <input name="name" type="text" class="form-control" id="floatingInputUsername"
                                        placeholder="myusername" required autofocus>

                                </div>

                                <div class="form-floating mb-3">
                                    <label for="floatingInputEmail">Email address</label>
                                    <input name="email" type="email" class="form-control" id="floatingInputEmail"
                                        placeholder="name@example.com">
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="floatingInputEmail">Birthday</label>
                                    <input name="birthday" type="text" class="form-control" id="floatingInputEmail"
                                        placeholder="YYYY-mm-dd ex: 2001-01-01">
                                </div>

                                <hr>

                                <div class="form-floating mb-3">
                                    <label for="floatingPassword">Password</label>
                                    <input name="password" type="password" class="form-control" id="floatingPassword"
                                        placeholder="Password">
                                </div>

                                <div class="form-floating mb-3">
                                    <label for="floatingPasswordConfirm">Confirm Password</label>
                                    <input name="re-password" type="password" class="form-control"
                                        id="floatingPasswordConfirm" placeholder="Confirm Password">
                                </div>

                                <div class="d-grid mb-2">
                                    <button name="submit" class="btn btn-lg btn-primary btn-login fw-bold text-uppercase"
                                        type="submit">Register</button>
                                </div>

                                <a class="d-block text-center mt-2 small" href="{{route('view.login')}}">Have an account? Sign In</a>

                                <hr class="my-4">

                                <div class="d-grid mb-2">
                                    <button class="btn btn-lg btn-google btn-login fw-bold text-uppercase" type="submit">
                                        <i class="fab fa-google me-2"></i> Sign up with Google
                                    </button>
                                </div>

                                <div class="d-grid">
                                    <button class="btn btn-lg btn-facebook btn-login fw-bold text-uppercase" type="submit">
                                        <i class="fab fa-facebook-f me-2"></i> Sign up with Facebook
                                    </button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
@endsection
