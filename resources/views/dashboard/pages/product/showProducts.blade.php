@extends('dashboard.index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Show all products</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active" aria-current="page">Show products</li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Show products</h6>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="productTable">
                            <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Category</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                            @isset($products)
                            @foreach($products as $product)
                                <tr>
                                <td>{{$loop->iteration}}</td>
                                <td>{{$product->name}}</td>
                                <td class="table-user" data-toggle="modal" data-target="#descriptionProductModal{{$product->id}}">
                                    <div>
                                        {{$product->description}}
                                    </div>
                                </td>
                                <td>{{$product->price}}</td>
                                <td>{{$product->stock}}</td>
                                <td width="20%">
                                    @isset($product->categories)
                                        @foreach($product->categories as $category)
                                            <span class="badge badge-light">{{$category->category->name}}</span>
                                        @endforeach
                                    @endisset
                                </td>
                                <td>
                                    <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteProductModal{{$product->id}}">
                                        <i class="fas fa-trash"></i>
                                    </a>
                                    <a href="{{route('products.edit', $product->id)}}" class="btn btn-success btn-sm">
                                        <i class="fas fa-pen"></i>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                            @endisset
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Row-->
    </div>
    <!---Container Fluid-->
@endsection

@section('headerCss')
    <link href="{{ asset('dashboard/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
@endsection
@section('footerJs')
    <script src="{{ asset('dashboard/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dashboard/vendor/datatables/dataTables.bootstrap4.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('#productTable').DataTable();
        });
    </script>
@endsection
