@extends('dashboard.index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
            </ol>
        </div>

        <div class="text-center">
            <img src="{{ asset('dashboard/img/home.svg') }}" style="max-height: 200px">
            <h4 class="pt-3">Welcome <b>{{auth()->user()->name}}</b>.</h4>
        </div>
        <!--Row-->

    </div>
    <!---Container Fluid-->
@endsection

@section('headerCss')

@endsection
@section('footerJs')

@endsection
