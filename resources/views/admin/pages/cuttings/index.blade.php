@extends('admin.app')
@section('title' , 'cuts')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /cuts</li>
@endsection
@section('page_title')
    <h1 class="m-0">All cuts </h1>
@endsection
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">
                    <h3 class="card-title">All cuts</h3>
                    <div class="card-tools">
                        <a type="button" class="btn btn-primary" href="{{route('cutting.create')}}">Add cut</a>
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>Model Number</th>
                        <th>Model Name</th>
                        <th>NO. pieces</th>
                        <th>Material</th>
                        <th>Metrage</th>
                        <th>Cutter</th>
                        <th>Patronist</th>
                        <th>status</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($cuts as $cut)
    <tr>
{{--        <td><a href="{{route('cut.show' , $cut)}}">{{$cut->name}}</a></td>--}}
        <td>{{$cut->model_number}}</td>
        <td>{{$cut->model_name}}</td>
        <td>{{$cut->no_pieces}}</td>
        <td>{{$cut->materials}}</td>
        <td>{{$cut->meterage}}</td>
        <td>{{$cut->cutter}}</td>
        <td>{{$cut->patronist}}</td>
        <td>{{$cut->status}}</td>
        <td class="d-flex">
            <a class="btn btn-primary" href="">
                <i class="fas fa-eye"></i>
            </a>
                <a href="" class="btn btn-primary mx-2">
                    <i class="fa fa-edit"></i>
                </a>

            <form action="" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                @include('admin.layout.modal')
            </form>

        </td>
    </tr>
  @endforeach
{{--@endforeach--}}
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                {{$cuts->links()}}
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
