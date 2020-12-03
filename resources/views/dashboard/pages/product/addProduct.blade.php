@extends('dashboard.index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add product</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Product</li>
                <li class="breadcrumb-item active" aria-current="page">Add new product</li>
            </ol>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Add new product</h6>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{route('products.store')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Product name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus id="name" aria-describedby="name" placeholder="Product name.." name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" placeholder="Product description.." class="form-control @error('description') is-invalid @enderror" autocomplete="description" autofocus
                                          required id="description" rows="3">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="price">Price</label>
                                <div class="input-group mb-3">
                                    <div class="input-group-prepend">
                                        <span class="input-group-text">$</span>
                                    </div>
                                    <input type="number" step="0.1" min="0" name="price" id="price" class="form-control @error('price') is-invalid @enderror" value="{{ old('price') }}" autocomplete="price" autofocus placeholder="Product price..">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="description">Stock</label>
                                <input type="number" min="0" class="form-control @error('stock') is-invalid @enderror" value="{{ old('stock') }}" autocomplete="stock" autofocus id="stock"
                                     placeholder="Product stock.." name="stock" required>
                            </div>
                            <div class="form-group">
                                <label for="selectCategory">Category multi</label>
                                <select class="select2-product form-control" name="categories[]" multiple="multiple" id="selectCategory">
                                    <option disabled value="">Select Category..</option>
                                    @foreach($categories as $category)
                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                    @endforeach
                                </select>
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
    <!-- Select2 -->
    <link href="{{ asset('dashboard/vendor/select2/dist/css/select2.min.css') }}" rel="stylesheet" type="text/css">
@endsection
@section('footerJs')
    <!-- Select2 -->
    <script src="{{ asset('dashboard/vendor/select2/dist/js/select2.min.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('.select2-product').select2();
        });
    </script>
@endsection
