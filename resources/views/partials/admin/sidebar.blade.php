<aside class="col-md-3 admin-aside">
    <h1><i class="fa fa-tachometer"></i> Dashboard</h1>
    <div class="list-group">
        <a href="{{ route('admin.user.index') }}" class="list-group-item"><i class="fa fa-user"></i> Users</a>
        <a href="{{ route('admin.manufacturer.index') }}" class="list-group-item"><i class="fa fa-wrench"></i> Manufacturers</a>
        <a href="{{ route('admin.category.index') }}" class="list-group-item"><i class="fa fa-align-justify"></i> Categories</a>
        <a href="{{ route('admin.product.index') }}" class="list-group-item"><i class="fa fa-desktop"></i> Products</a>
    </div>
</aside>