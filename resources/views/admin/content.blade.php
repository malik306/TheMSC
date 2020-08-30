<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Admin</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item active">Admin</li>
                    </ol>
                </div><!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-4 text-white">
                    <div class="card bg-green-7 p-3">
                        <div class="card-body ">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-6"><h5 class="card-title">Student</h5>
                                    <p class="card-text counter"> {{$student}} </p></div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span class="fa fa-user-graduate fa-3x mt-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline bg-teal-7 p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <h5 class="card-title">Employee</h5>
                                    <p class="card-text counter">{{$employee}} </p>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span class="fa fa-chalkboard-teacher fa-3x mt-2"></span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
                <!-- /.col-md-6 -->
                <div class="col-lg-4 text-white">
                    <div class="card bg-purple-7 p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <h5 class="card-title">Course</h5>
                                    <p class="card-text counter">{{$course}} </p>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span class="fa fa-book fa-3x mt-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="card card-primary card-outline bg-pink-7 p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <h5 class="card-title">Class</h5>
                                    <p class="card-text counter">{{$class}} </p>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span class="fa fa-book-reader fa-3x mt-2"></span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card -->
                </div>
                <div class="col-lg-4 text-white">
                    <div class="card bg-gray-7 p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <h5 class="card-title">Carousel</h5>
                                    <p class="card-text counter">{{$carousel}} </p>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span class="far fa-images fa-3x mt-2"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card card-primary card-outline bg-teal-7 p-3">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <h5 class="card-title">Series</h5>
                                    <p class="card-text counter">{{$series}} </p>
                                </div>
                                <div class="col-lg-6 col-sm-6 col-6">
                                    <span class="fas fa-list-ul fa-3x mt-2"></span>
                                </div>
                            </div>
                        </div>
                    </div><!-- /.card -->

                </div>

                <!-- /.col-md-6 -->
            </div>
            <!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
</div>


