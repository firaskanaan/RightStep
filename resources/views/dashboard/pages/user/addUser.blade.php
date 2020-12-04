@extends('dashboard.index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add user</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">User</li>
                <li class="breadcrumb-item active" aria-current="page">Add new user</li>
            </ol>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Add new user</h6>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('users.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus id="name" aria-describedby="name" placeholder="Name.." name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Email</label>
                                <input type="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}" autocomplete="email" autofocus id="email" aria-describedby="email" placeholder="Email.." name="email" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Password</label>
                                <input type="password" class="form-control @error('password') is-invalid @enderror" value="{{ old('password') }}" autocomplete="password" autofocus id="password" aria-describedby="password" placeholder="Password.." name="password" required>
                            </div>
                            <div class="form-group">
                                <label for="name">Confirm Password</label>
                                <input type="password" class="form-control @error('password_confirmation') is-invalid @enderror" value="{{ old('password_confirmation') }}" autocomplete="password_confirmation" autofocus id="password_confirmation" aria-describedby="password_confirmation" placeholder="Confirm Password.." name="password_confirmation" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Ok, Add</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <!---Container Fluid-->
@endsection

@section('headerCss')

@endsection
@section('footerJs')

@endsection
