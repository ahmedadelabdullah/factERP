@extends('admin.app')
@section('title' , 'Ores')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /Ores</li>
@endsection
@section('page_title')
    <h1 class="m-0">All Ores </h1>
@endsection
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">
                    <h3 class="card-title">All Ore</h3>
                    <div class="card-tools">
{{--                        <a type="button" class="btn btn-primary" href="{{route('ore.create')}}">Add ore</a>--}}
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>Id</th>
                        <th>Material</th>
                        <th>supplier</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($infos as $info)


        @foreach($info->rows as $mat_info )
            <tr>
            <td>{{$info->id}}</td>
        <td>{{$mat_info->material}}</td>

        <td>{{$info->sup->name}}</td>
        @endforeach
    </tr>
  @endforeach
{{--@endforeach--}}
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                {{$infos->links()}}
            </div>
        </div>
        <!-- /.col -->
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!--/. container-fluid -->
    </section>
    </div>
@stop
