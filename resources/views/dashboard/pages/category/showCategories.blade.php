@extends('dashboard.index')
@section('content')
    <!-- Container Fluid-->
    <div class="container-fluid" id="container-wrapper">
        <div class="d-sm-flex align-items-center justify-content-between mb-4">
            <h1 class="h3 mb-0 text-gray-800">Show all categories</h1>
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="./">Home</a></li>
                <li class="breadcrumb-item">Category</li>
                <li class="breadcrumb-item active" aria-current="page">Show categories</li>
            </ol>
        </div>

        <!-- Row -->
        <div class="row">
            <div class="col-lg-12">
                <div class="card mb-4">
                    <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                        <h6 class="m-0 font-weight-bold text-primary">Show categories</h6>
                    </div>
                    <div class="table-responsive p-3">
                        <table class="table align-items-center table-flush table-hover" id="categoryTable">
                            <thead class="thead-light">
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Parent</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tfoot>
                            <tr>
                                <th>#</th>
                                <th>Name</th>
                                <th>Description</th>
                                <th>Parent</th>
                                <th>Created at</th>
                                <th>Action</th>
                            </tr>
                            </tfoot>
                            <tbody>
                                @isset($categories)
                                @foreach($categories as $category)
                                <tr>
                                    <td>{{$category->id}}</td>
                                    <td>{{$category->name}}</td>
                                    <td class="table-user" data-toggle="modal" data-target="#descriptionModal">
                                        <div>
                                            {{$category->description}}
                                        </div>
                                    </td>
                                    <td>{{$category->parent}}</td>
                                    <td>{{$category->created_at}}</td>
                                    <td>
                                        <a href="#" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#deleteCategoryModal{{$category->id}}">
                                            <i class="fas fa-trash"></i>
                                        </a>
                                        <a href="#" class="btn btn-success btn-sm" data-toggle="modal" data-target="#editCategoryModal{{$category->id}}">
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
            $('#categoryTable').DataTable();
        });
    </script>
@endsection
