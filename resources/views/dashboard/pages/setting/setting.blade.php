@extends('dashboard.index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Settings</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Settings</li>
            </ol>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('settings.update')}}">
                    @csrf
                    <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Edit Settings</h6>
                        <div class="custom-control custom-switch float-right">
                            <input type="checkbox" class="custom-control-input check-success" value="1" id="storeStatus"
                                   name="store_state" {{$setting->store_state==1?'checked ':''}}>
                            <label class="custom-control-label" for="storeStatus">Open store</label>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                                <label for="name">Store name:</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ $setting->store_name }}" autocomplete="name" autofocus id="name" aria-describedby="name" placeholder="Store name.." name="store_name" required>
                    </div>
                        <div class="form-group">
                            <label for="currency">Currency:</label>
                            <select name="currency"  class="select2-setting form-control" id="currency">
                                    <option value="SAR">SAR Saudi Riyal</option>
                                    <option value="BHD">BHD Bahraini Dinar</option>
                                    <option value="BTC">BTC Bitcoin</option>
                                    <option value="EGP">EGP Egyptian Pound</option>
                                    <option value="EUR">EUR Euro</option>
                                    <option value="IQD">IQD Iraqi Dinar</option>
                                    <option value="JPY">JPY Japanese Yen</option>
                                    <option value="KWD">KWD Kuwaiti Dinar</option>
                                    <option value="LBP">LBP Lebanese Pound</option>
                                    <option value="LYD">LYD Libyan Dinar</option>
                                    <option value="MYR">MYR Malaysian Ringgit</option>
                                    <option value="OMR">OMR Omani Rial</option>
                                    <option value="QAR">QAR Qatari Rial</option>
                                    <option value="RSD">RSD Serbian Dinar</option>
                                    <option value="SYP">SYP Syrian Pound</option>
                                    <option value="TRY">TRY Turkish Lira</option>
                                    <option value="USD">USD US Dollar</option>
                                    <option value="YER">YER Yemeni Rial</option>
                                </select>
                        </div>
                        <div class="form-group">
                            <label for="vat">VAT:</label>
                            <div class="input-group mb-3">
                                <div class="input-group-prepend">
                                    <span class="input-group-text"><i class="fas fa-exclamation-triangle"></i> </span>
                                </div>
                                <input type="number" min="0" max="100" name="VAT" id="vat" class="form-control @error('vat') is-invalid @enderror" value="{{ $setting->VAT }}" autocomplete="vat" autofocus placeholder="VAT..">
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
    <!-- Select2 -->
    <link href="{{ asset('dashboard/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('footerJs')
    <!-- Select2 -->
    <script src="{{ asset('dashboard/vendor/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.select2-setting').select2();
            $('.select2-setting').val('{{$setting->currency}}');
            $('.select2-setting').trigger('change');
        });
    </script>
@endsection
