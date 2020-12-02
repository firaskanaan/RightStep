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
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-primary">Logout</a>
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


<!-- Modal edit category -->
<div class="modal fade show" id="editCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCateModal" aria-modal="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editCateModal">Category edit!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Category name</label>
                        <input type="text" class="form-control" value="firas" id="name" aria-describedby="name" placeholder="Category name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="description">Description</label>
                        <textarea name="description" placeholder="Category description.." class="form-control"
                                  required id="description" rows="3">firas</textarea>
                    </div>
                    <div class="form-group">
                        <label for="parent">Parent</label>
                        <input type="text" class="form-control" value="parent" id="parent" name="parent" placeholder="Parent.." required>
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
<div class="modal fade show" id="deleteCategoryModal" tabindex="-1" role="dialog" aria-labelledby="editCateModal" aria-modal="true" >
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
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-danger">Yes,delete</a>
            </div>
        </div>
    </div>
</div>
<!-- /Modal delete category -->


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



<!-- Modal edit product -->
<div class="modal fade show" id="editProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductsModal" aria-modal="true" >
    <div class="modal-dialog modal-dialog-scrollable" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="editProductsModal">Product edit!</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <form class="form-horizontal" enctype="multipart/form-data" method="POST" action="{{url('/')}}">
                    @csrf
                    <div class="form-group">
                        <label for="name">Product name</label>
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
<!-- /Modal edit product -->


<!-- Modal delete product -->
<div class="modal fade show" id="deleteProductModal" tabindex="-1" role="dialog" aria-labelledby="editProductsModal" aria-modal="true" >
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
                <button type="button" class="btn btn-outline-primary" data-dismiss="modal">Cancel</button>
                <a href="#" class="btn btn-danger">Yes,delete</a>
            </div>
        </div>
    </div>
</div>
<!-- /Modal delete product -->
