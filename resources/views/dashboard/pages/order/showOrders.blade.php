@extends('dashboard.index')
@section('content')
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Orders</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Show all orders</li>
            </ol>
        </div>
        <div class="row">
            @foreach($orders as $order)
                <div class="col-xl-4 col-lg-4">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">
                            <img class="img-profile rounded-circle" src="http://127.0.0.1:8000/dashboard/img/profile.png" style="max-width: 60px">
                            <span class="d-none d-lg-inline ">{{$order->user->name}}</span>
                        </h6>
                        <div class="dropdown no-arrow">
                            @if($order['state']=='pending')
                                <span class="badge badge-primary">Pending</span>
                            @elseif($order['state']=='shipped')
                                <span class="badge badge-success">Shipped</span>
                            @else
                                <span class="badge badge-danger">Canceled</span>
                            @endif
                        </div>
{{--                        <p> new order by   {{$order->user->name}}</p>--}}
                    </div>
                    <div class="card-body py-0">
                        <div class="row align-items-center mb-3">
                            <div class="col">
                                <div class="h4 mb-0 font-weight-bold text-gray-800"> {{$order->product->name}}</div>
                            </div>
                            <div class="col-auto">
                                <div class="mt-2 mb-0 text-muted">
                                    <p class="fa-2x font-weight-bolder mr-2"><i class="fa fa-dollar-sign text-warning "> {{$order->product->price}}</i></p>
                                </div>
                            </div>
                        </div>
                        <form id="form{{$order->id}}"  class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/')}}">
                            @csrf
                            <div class="row col-12">
                                <div class="col-md-4 col-sm-12 custom-control custom-switch d-inline">
                                    <input type="checkbox" class="custom-control-input" id="{{$order->name}}{{$loop->iteration}}"
                                           value="{{$order->id}}" onChange="updateStatus({{$order->id}});"
                                           {{$order['state']=='pending' ? 'checked' : ''}} name="state">
                                    <label class="custom-control-label small" for="{{$order->name}}{{$loop->iteration}}">Pending</label>
                                </div>
                                <div class="col-md-4 col-sm-12 custom-control custom-switch d-inline">
                                    <input type="checkbox" class="custom-control-input check-success" id="{{$order->name}}{{$loop->iteration +1}}"
                                           value="{{$order->id}}" onChange="updateStatus({{$order->id}});"
                                           {{$order['state']=='shipped' ? 'checked' : ''}} name="state">
                                    <label class="custom-control-label" for="{{$order->name}}{{$loop->iteration +1}}">Shipped</label>
                                </div>
                                <div class="col-md-4 col-sm-12 custom-control custom-switch d-inline ">
                                <input type="checkbox" class="custom-control-input check-danger" id="{{$order->name}}{{$loop->iteration +2}}"
                                       value="{{$order->id}}" onChange="updateStatus({{$order->id}});"
                                       {{$order['state']=='canceled' ? 'checked' : ''}} name="state">
                                <label class="custom-control-label small" for="{{$order->name}}{{$loop->iteration +2}}">Canceled</label>
                            </div>
                            </div>
                            <div class="small text-gray-500 message-time font-weight-bold text-right my-2">{{$order->created_at}}</div>
                        </form>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('footerJs')
<script>
    function updateStatus(id) {
        var form = document.getElementById('form'+id);
        form.submit();
    }
</script>
@endsection
