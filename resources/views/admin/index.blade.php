@extends('layouts.admin_nav')

@section('content')

    <section class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon purple-3-bg elevation-1">
                            <span class="iconify text-light" data-icon="simple-icons:blogger"></span>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Blogs</span>
                            <span class="info-box-number">
                                {{ $blogs->count() }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-6 col-sm-6 col-md-3">
                    <div class="info-box">
                        <span class="info-box-icon purple-3-bg elevation-1">
                            <i class="iconify text-light" data-icon="zondicons:portfolio"></i>
                        </span>
                        <div class="info-box-content">
                            <span class="info-box-text">Projects</span>
                            <span class="info-box-number">
                                {{ $projects->count() }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon purple-3-bg text-light elevation-1">
                            <span class="iconify" data-icon="akar-icons:php-fill"></span>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">PHP</span>
                            <span class="info-box-number">
                                {{ $projects->where('project_category', 'PHP')->count() }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon purple-3-bg text-light elevation-1"><span class="iconify"
                                data-icon="simple-icons:laravel"></span>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Laravel</span>
                            <span class="info-box-number">
                                {{ $projects->where('project_category', 'Laravel')->count() }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon purple-3-bg text-light elevation-1">
                            <span class="iconify" data-icon="whh:codeigniter"></span>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">CodeIgniter</span>
                            <span class="info-box-number">
                                {{ $projects->where('project_category', 'CodeIgniter')->count() }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- /.col -->
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon purple-3-bg text-light elevation-1">
                            <span class="iconify" data-icon="cib:javascript"></span>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">Javascript</span>
                            <span class="info-box-number">
                                {{ $projects->where('project_category', 'Javascript')->count() }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon purple-3-bg text-light elevation-1">
                            <span class="iconify" data-icon="fontisto:nodejs"></span>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">NodeJs</span>
                            <span class="info-box-number">
                                {{ $projects->where('project_category', 'NodeJs')->count() }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <!-- /.col -->
                <div class="col-6 col-sm-6 col-md-3">
                    <div class="info-box mb-3">
                        <span class="info-box-icon purple-3-bg text-light elevation-1">
                            <span class="iconify" data-icon="teenyicons:react-outline"></span>
                        </span>

                        <div class="info-box-content">
                            <span class="info-box-text">React</span>
                            <span class="info-box-number">
                                {{ $projects->where('project_category', 'React')->count() }}
                            </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix hidden-md-up"></div>


            </div>
            <!-- /.row -->
        </div>
        <!--/. container-fluid -->
    </section>

@endsection
