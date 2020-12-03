@extends('dashboard.index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Setting</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Setting</li>
            </ol>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/')}}">
                    @csrf
                    <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Show setting</h6>
                        <div class="custom-control custom-switch float-right">
                            <input type="checkbox" class="custom-control-input check-success" id="storeStatus"
                                   name="storeStatus" checked>
                            <label class="custom-control-label" for="storeStatus">Open store</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                                <label for="name">Store name:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus id="name" aria-describedby="name" placeholder="Store name.." name="name" required>
                    </div>
                        <div class="form-group">
                            <label for="currency">Currency:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-donate"></i> </span>
                                </div>
                                <input type="number" min="0" name="currency" id="currency" class="form-control @error('currency') is-invalid @enderror" value="{{ old('currency') }}" autocomplete="currency" autofocus placeholder="Currency..">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="vat">VAT:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-exclamation-triangle"></i> </span>
                                </div>
                                <input type="number" min="0" name="vat" id="vat" class="form-control @error('vat') is-invalid @enderror" value="{{ old('vat') }}" autocomplete="vat" autofocus placeholder="VAT..">
                            </div>
                        </div>
                        <button type="submit" class="btn btn-outline-primary">Ok, Edit</button>
                    </div>
                </div>
                </form>
            </div>
            <div class="col-md-4">

            </div>
        </div>

    </div>
    <!---Container Fluid-->
@endsection

@section('headerCss')

@endsection
@section('footerJs')

@endsection
