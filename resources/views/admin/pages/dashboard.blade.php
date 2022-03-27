@extends('admin.app')
@section('title' , 'Dashboard')

@section('content')
    <section class="content">
        <div class="container-fluid">
            <!-- Info boxes -->
            <div class="row">
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon elevation-1 text-center">
                            <img src="admin/dist/img/notebook.png" alt="note"></span>
                        <div class="info-box-content">
                            <span class="info-box-text h5 my-3"><a href="{{route('tex.index')}}">Row Clothes</a></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>
                        <div class="info-box-content">
                            <span class="info-box-text h5 my-3"><a href="{{route('supplier.index')}}">Suppliers</a></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h5 my-3"><a href="{{route('tex.index')}}">New Cutting</a></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h5 my-3"><a href="{{route('tex.index')}}">Offices</a></span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box">
                        <span class="info-box-icon elevation-1 text-center"><img src="admin/dist/img/notebook.png"></span>
                        <div class="info-box-content">
                            <span class="info-box-text h4">Materials</span>
                            <span class="info-box-number">
                  10
                  <small>%</small>
                </span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h4">Workers</span>
                            <span class="info-box-number">41,410</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h4">Makers</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h4">Makers</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h4">Makers</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h4">Makers</span>
                            <span class="info-box-number">760</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h4">Cutting</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>
                <div class="col-12 col-sm-4 col-md-2">
                    <div class="info-box mb-3">
                        <span class="info-box-icon elevation-1"><img src="admin/dist/img/notebook.png"></span>

                        <div class="info-box-content">
                            <span class="info-box-text h4">Cutting</span>
                            <span class="info-box-number">2,000</span>
                        </div>
                        <!-- /.info-box-content -->
                    </div>
                    <!-- /.info-box -->
                </div>

                <!-- /.col -->
            </div>
            <!-- /.row -->

            <!-- Main row -->


@stop