<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
            <img src="{{asset('admin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
            <a href="#" class="d-block">Alexander Pierce</a>
        </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-sidebar">
                    <i class="fas fa-search fa-fw"></i>
                </button>
            </div>
        </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <li class="nav-item menu-open">
                <a href="#" class="nav-link active">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="right fas fa-angle-left"></i>
                    </p>
                </a>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{Route::currentRouteName() == 'supplier.edit' ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Opposites
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{route('supplier.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>create invoice</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ore.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>invoices</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link {{Route::currentRouteName() == 'supplier.edit' ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                row clothes
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{route('supplier.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>create invoice</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ore.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>invoices</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Payments
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{route('supplier.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>create supplier</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ore.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>suppliers</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                               offices
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{route('supplier.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>offices</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ore.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>create office</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="{{route('OfficeInvoice.index')}}" class="nav-link {{Route::currentRouteName() == 'OfficeInvoice.index' ? 'active' : ''}}">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Office Invoice
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{route('OfficeInvoice.create')}}" class="nav-link {{Route::currentRouteName() == 'OfficeInvoice.create' ? 'active' : ''}}">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>create Office Invoice</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ore.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Ore</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Level 2
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('dashboard.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{route('supplier.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Supplier</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ore.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Ore</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Level 2
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('dashboard.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{route('supplier.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Supplier</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ore.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Ore</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <ul class="nav nav-treeview">
                    <li class="nav-item">
                        <a href="#" class="nav-link">
                            <i class="far fa-circle nav-icon"></i>
                            <p>
                                Level 2
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{route('dashboard.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-item">
                            <li class="nav-item">
                                <a href="{{route('supplier.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Supplier</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{route('ore.index')}}" class="nav-link">
                                    <i class="far fa-dot-circle nav-icon"></i>
                                    <p>Ore</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
        </ul>
    </nav>
    <!-- /.sidebar-menu -->
</div>
</aside>
