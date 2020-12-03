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
                        <h6 class="m-0 font-weight-bold text-primary"> {{$order->product->name}}</h6>
                        <div class="dropdown no-arrow">
                            @if($order['status']=='pending')
                                <span class="badge badge-primary">Pending</span>
                            @elseif($order['status']=='shipped')
                                <span class="badge badge-success">Shipped</span>
                            @else
                                <span class="badge badge-danger">Canceled</span>
                            @endif
                        </div>
                    </div>
                    <div class="card-body">
                        <p class="body-text">
                           {{$order->user->name}}
                        </p>
                        <form id="form{{$order->id}}"  class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/')}}">
                            @csrf
                            <div class="col-md-4 custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input" id="{{$order->name}}{{$loop->iteration}}"
                                       value="{{$order->id}}" onChange="updateStatus({{$order->id}});"
                                       {{$order['status']=='pending' ? 'checked' : ''}} name="status">
                                <label class="custom-control-label" for="{{$order->name}}{{$loop->iteration}}">Pending</label>
                            </div>
                            <div class="col-md-4 custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input check-success" id="{{$order->name}}{{$loop->iteration +1}}"
                                       value="{{$order->id}}" onChange="updateStatus({{$order->id}});"
                                       {{$order['status']=='shipped' ? 'checked' : ''}} name="status">
                                <label class="custom-control-label" for="{{$order->name}}{{$loop->iteration +1}}">Shipped</label>
                            </div>
                            <div class="col-md-4 custom-control custom-switch d-inline">
                                <input type="checkbox" class="custom-control-input check-danger" id="{{$order->name}}{ $loop->iteration +2}}"
                                       value="{{$order->id}}" onChange="updateStatus({{$order->id}});"
                                       {{$order['status']=='canceled' ? 'checked' : ''}} name="status">
                                <label class="custom-control-label" for="{{$order->name}}{{$loop->iteration +2}}">Canceled</label>
                            </div>
                            <div class="small text-gray-500 message-time font-weight-bold text-right mt-2">{{$order->created_at}}</div>
                        </form>
                    </div>

                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

@section('headerCss')

@endsection
@section('footerJs')
<script>
    function updateStatus(id) {
        var form = document.getElementById('form'+id);
        form.submit();
    }
</script>
@endsection
