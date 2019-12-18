<div class="sidebar" data-color="purple" data-image="{{ asset('backend/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="{{ route('welcome') }}" class="simple-text">
           Top Car
        </a>
    </div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a href="{{ route('admin.dashboard') }}">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li> 
            <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
                <a href="{{ route('car_body_type.index') }}">
                    <i class="material-icons">directions_car</i>
                    <p>Car Body Type</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/slider*') ? 'active': '' }}">
                <a href="{{ route('car_model.index') }}">
                    <i class="material-icons">store</i>
                    <p>Car Model</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/item*') ? 'active': '' }}">
                <a href="{{ route('item.index') }}">
                    <i class="material-icons">library_books</i>
                    <p>Items</p>
                </a>
            </li>
        </ul>
    </div>
</div>