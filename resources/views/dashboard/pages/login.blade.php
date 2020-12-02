<!-- header -->
@include('dashboard.includes.header')

<body class="bg-gradient-login">
    <div class="container-login">
        <div class="row justify-content-center">
            <div class="col-md-5 col-sm-10">
                <div class="my-5">
                    <img src="{{ asset('dashboard/img/login.svg') }}" class="img-login">
                </div>
            </div>
            <div class="col-md-5 col-sm-12">
                <div class="card shadow-sm my-5">
                    <div class="card-body p-0">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="login-form">
                                    <div class="text-center">
                                        <img src="{{ asset('dashboard/img/logo/logo.png')}}"
                                             class="d-inline-block align-self-top bg-gr-logo rounded-lg" style="max-height: 90px">
                                        <h4 class="pt-3"><b>Login</b> here!</h4>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="exampleInputEmail" aria-describedby="emailHelp"
                                                   placeholder="Enter Email Address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" id="exampleInputPassword" placeholder="Password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small" style="line-height: 1.5rem;">
                                                <input type="checkbox" class="custom-control-input" id="customCheck">
                                                <label class="custom-control-label" for="customCheck">Remember Me</label>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <a href="#" class="btn btn-primary btn-block">Login</a>
                                        </div>
                                        <hr>
                                    </form>
                                    <div class="text-center">
                                        <a class="font-weight-bold small" href="#">Login!</a>
                                    </div>
                                    <div class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('dashboard.includes.footerJs')
</body>

</html>
