<aside class="main-sidebar sidebar-dark-primary elevation-4 h-auto">
    <!-- Brand Logo -->
    <a href="{{url('/admin')}}" class="brand-link">
        <img src="{{asset('image/output-onlinepngtools.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">Admin</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        {{--<div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{asset('image/output-onlinepngtools.png')}}" class="img-circle elevation-2" alt="User Image">
            </div>
            <div class="info">
                <a href="" class="d-block"> Admin-Info </a>
            </div>
        </div>---}}

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
                     with font-awesome or any other icon font library -->
                <li class="nav-item has-treeview menu-open">
                    <a href="/admin" class="nav-link active">
                        <i class="nav-icon fas fa-home"></i>
                        <p>
                            Home
                            {{--<i class="right fas fa-angle-left"></i>--}}
                        </p>
                    </a>
                    {{--<ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="#" class="nav-link active">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Active Page
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Inactive Page</p>
                            </a>
                        </li>
                    </ul>--}}
                </li>
                <li class="nav-item">
                    <a href="{{route('class.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-desktop"></i>
                        <p>
                            Class
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('course.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-file-code"></i>
                        <p>
                            Subject
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('series.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-user-secret"></i>
                        <p>
                            Series
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{route('student.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-user-alt"></i>
                        <p>
                            Student
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('employee.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-user-graduate"></i>
                        <p>
                            Employee
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-table"></i>
                        <p>
                            Time Table
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('attendance.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-business-time"></i>
                        <p>
                            Attendance
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a class="nav-link">
                        <i class="nav-icon fab fa-searchengin"></i>
                        <p>
                            Selection
                            <i class="right fas fa-angle-double-right"></i>
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                    <ul class="nav nav-treeview">
                        <li class="nav-item">
                            <a href="{{route('selection.index')}}" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>
                                    Employee Selection
                                </p>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">
                                <i class="far fa-circle nav-icon"></i>
                                <p>Student Selection</p>
                            </a>
                        </li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bullhorn"></i>
                        <p>
                            Notification
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

               {{-- <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-receipt"></i>
                        <p>
                            Fee
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-money-check"></i>
                        <p>
                            Income
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-money-check-alt"></i>
                        <p>
                            Expense
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>--}}

                <li class="nav-item">
                    <a href="{{route('carousel.index')}}" class="nav-link">
                        <i class="nav-icon fa fa-image"></i>
                        <p>
                            Carousel
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    @includeIf('admin.sign-out')
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
