<!-- Modal Logout -->
<div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabelLogout" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabelLogout">Ohh No!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to logout?</p>
            </div>
            <div class="modal-footer">
                <form action="/logout" method="post">
                    @csrf
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- /Modal Logout -->

<!-- Modal description category -->
<div class="modal fade show" id="descriptionModal" tabindex="-1" role="dialog" aria-labelledby="descriptionCategoryModal" aria-modal="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="descriptionCategoryModal">Category description!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <h5 class="font-weight-bold">Title</h5>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ac orci phasellus egestas tellus rutrum tellus. Suspendisse sed nisi lacus
                    sed. Erat pellentesque adipiscing commodo elit at imperdiet dui. Eget dolor morbi non arcu risus
                    quis varius quam. Elit ullamcorper dignissim cras tincidunt. At risus viverra adipiscing at in
                    tellus integer feugiat. Dictum non consectetur a erat nam at lectus urna. Est velit egestas dui id.
                    Sed id semper risus in hendrerit. Malesuada fames ac turpis egestas maecenas pharetra convallis
                    posuere. Pretium vulputate sapien nec sagittis aliquam. In hendrerit gravida rutrum quisque non.
                    Neque ornare aenean euismod elementum nisi quis eleifend quam adipiscing. Lacus luctus accumsan
                    tortor posuere. Urna molestie at elementum eu facilisis. Neque egestas congue quisque egestas diam.
                    Turpis egestas integer eget aliquet nibh praesent. Egestas dui id ornare arcu odio ut.</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal description category -->


@isset($categories)
    @foreach($categories as $category)
        <!-- Modal edit category -->
        <div class="modal fade show" id="editCategoryModal{{$category->id}}" tabindex="-1" role="dialog" aria-labelledby="editCateModal" aria-modal="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCateModal">Category edit!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{route('categories.update',$category -> id)}}" method="POST" >
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="name">Category name</label>
                        <input type="text" class="form-control" value="{{$category->name}}" id="name" aria-describedby="name" placeholder="Category name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Category description.." class="form-control"
                                  required id="description" rows="3">{{$category->description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label for="parent">Parent</label>
                        <input type="text" class="form-control" value="{{$category->parent}}" id="parent" name="parent" placeholder="Parent.." required>
                    </div>
                    <button type="submit" class="btn btn-primary">Ok, Edit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
        <!-- /Modal edit category -->

        <!-- Modal delete category -->
        <div class="modal fade show" id="deleteCategoryModal{{$category-> id}}" tabindex="-1" role="dialog" aria-labelledby="editCateModal" aria-modal="true" >
            <div class="modal-dialog modal-dialog-scrollable" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editCateModal">Category delete!</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Are you sure to delete this?</p>
                    </div>
                    <div class="modal-footer">
                        <form method="post"
                              action="{{route('categories.destroy',$category-> id)}}">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                            <button type="submit" class="btn btn-danger">Yes,delete</button>
                        </form>

                    </div>
                </div>
            </div>
        </div>
        <!-- /Modal delete category -->

    @endforeach
@endisset



<!-- Modal edit user -->
<div class="modal fade show" id="editUserModal" tabindex="-1" role="dialog" aria-labelledby="editUsersModal" aria-modal="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUsersModal">User edit!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">User name</label>
                        <input type="text" class="form-control" value="firas" id="name" aria-describedby="name" placeholder="User name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="User description.." class="form-control"
                                  required id="description" rows="3">firas </textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Ok, Edit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal edit user -->


<!-- Modal delete user -->
<div class="modal fade show" id="deleteUserModal" tabindex="-1" role="dialog" aria-labelledby="editUsersModal" aria-modal="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editUsersModal">User delete!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this?</p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-danger">Yes,delete</a>
            </div>
        </div>
    </div>
</div>
<!-- /Modal delete user -->


@isset($products)
    @foreach($products as $product)
<!-- Modal edit product -->
<div class="modal fade show" id="editProductModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="editProductsModal" aria-modal="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductsModal">Product edit!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" enctype="multipart/form-data" action="{{route('products.update',$product -> id)}}" method="POST" >
                    @method('PUT')
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
                    <button type="submit" class="btn btn-primary">Ok, Edit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<!-- /Modal edit product -->


<!-- Modal delete product -->
<div class="modal fade show" id="deleteProductModal{{$product->id}}" tabindex="-1" role="dialog" aria-labelledby="editProductsModal" aria-modal="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductsModal">Product delete!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <p>Are you sure to delete this?</p>
            </div>
            <div class="modal-footer">
                <form method="post"
                      action="{{route('products.destroy',$product-> id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                    <button type="submit" class="btn btn-danger">Yes,delete</button>
                </form>

            </div>
        </div>
    </div>
</div>
<!-- /Modal delete product -->

    @endforeach
@endisset
