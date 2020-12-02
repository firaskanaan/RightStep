@extends('dashboard.index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Add category</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Category</li>
                <li class="breadcrumb-item active" aria-current="page">Add new category</li>
            </ol>
        </div>

        <div class="row justify-content-center">
            <div class="col-lg-10">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Add new category</h6>
                    </div>
                    <div class="card-body">
                        <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/')}}">
                            @csrf
                            <div class="form-group">
                                <label for="name">Category name</label>
                                <input type="text" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}" autocomplete="name" autofocus id="name" aria-describedby="name" placeholder="Category name" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea name="description" placeholder="Category description.." class="form-control @error('description') is-invalid @enderror" autocomplete="description" autofocus
                                          required id="description" rows="3">{{ old('description') }}</textarea>
                            </div>
                            <div class="form-group">
                                <label for="parent">Parent</label>
                                <input type="text" class="form-control @error('parent') is-invalid @enderror" value="{{ old('parent') }}" autocomplete="parent" autofocus id="parent" name="parent" placeholder="Parent.." required>
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
