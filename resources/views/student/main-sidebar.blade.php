<aside class="main-sidebar sidebar-dark-primary elevation-4 h-auto">
    <!-- Brand Logo -->
    {{--dd($self)--}}
    <a href="{{url('/students')}}" class="brand-link">
        <img src="{{asset('/student/' . $self->profile->image)}}" {{--alt="AdminLTE Logo"--}} class="brand-image img-circle elevation-3"
             style="opacity: .8">
        <span class="brand-text font-weight-light">{{$self->profile->full_name}}</span>
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
                    <a href="/students" class="nav-link active">
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
                    <a href="{{route('solve-assignment.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-file-code"></i>
                        <p>
                            Assignment
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('down-material.index')}}" class="nav-link">
                        <i class="nav-icon fas fa-folder"></i>
                        <p>
                            Material
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="{{route('get-mark')}}" class="nav-link">
                        <i class="nav-icon fa fa-clipboard-list"></i>
                        <p>
                            Marks Distribution
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="{{route('get-attendance')}}">
                        <i class="nav-icon fas fa-business-time"></i>
                        <p>
                            Attendance
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
                    <a href="#" class="nav-link">
                        <i class="nav-icon fa fa-bullhorn"></i>
                        <p>
                            Notification
                            <span class="right badge badge-red-3">New</span>
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    @includeIf('student.sign-out')
                </li>



            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
