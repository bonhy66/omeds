<div class="nav-left-sidebar sidebar-dark">
    <div class="menu-list">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="d-xl-none d-lg-none" href="#">Dashboard</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav flex-column">




                    <li class="nav-item ">
                        <a class="nav-link inactive" href="{{route('admin.index')}}" aria-expanded="false"
                            data-target="#submenu-1" aria-controls="submenu-1"><i class="fa fa-home"></i>Dashboard
                        </a>

                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-2" aria-controls="submenu-2">
                            <i class="fas fa-people-carry"></i>Employees</a>
                        <div id="submenu-2" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.employee.list')}}">Employee List</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.employee.form')}}">Employee add</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-3" aria-controls="submenu-3"><i
                                class="fab fa-accusoft"></i>Products</a>
                        <div id="submenu-3" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.category.list')}}">Category</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.product.list')}}">Product list</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.product.add')}}">Product Add</a>
                                </li>

                            </ul>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-4" aria-controls="submenu-4"><i
                                class="fas fa-building"></i>Company</a>
                        <div id="submenu-4" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.company.list')}}">Company list</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.company.entry')}}">Company add</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-5" aria-controls="submenu-5"><i class="fab fa-first-order"></i>Order
                        </a>
                        <div id="submenu-5" class="collapse submenu" style="">
                            <ul class="nav flex-column">

                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.order.list')}}" >All Order</a>

                                </li>


                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('order.pending')}}">Pending</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('order.processed')}}">Processed</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="{{route('order.delivered')}}">Delivered</a>
                                    </li>


                                <li class="nav-item">
                                    <a class="nav-link" href="{{route('admin.order-details.list')}}">Order-details</a>
                                </li>

                            </ul>
                        </div>
                    </li>

                    {{-- <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="collapse" aria-expanded="false"
                            data-target="#submenu-6" aria-controls="submenu-6">

                            <i class="fas fa-money-check-alt"></i>Payment</a>

                        <div id="submenu-6" class="collapse submenu" style="">
                            <ul class="nav flex-column">
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/general-table.html">Paid</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/data-tables.html">Deu</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="pages/data-tables.html">All</a>
                                </li>
                            </ul>
                        </div>
                    </li> --}}



                </ul>
            </div>
        </nav>
    </div>
</div>
