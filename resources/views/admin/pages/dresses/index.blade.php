@extends('admin.app')
@section('title' , 'Dresses')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /Dresses</li>
@endsection
@section('page_title')
    <h1 class="m-0">All Cuttings </h1>
@endsection
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">
                    <h3 class="card-title">All dresses</h3>
                    <div class="card-tools">
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>Model Number</th>
                        <th>Model Name</th>
                        <th>Meterage</th>
                        <th>price</th>
                        <th>Available</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($dresses as $dress)
    <tr>
        <td>{{$dress->model_number}}</td>
        <td>{{$dress->model_name}}</td>
        <td>{{$dress->meterage}}</td>
        <td>{{$dress->price}}</td>
        <td>{{$dress->available}}</td>
    </tr>
  @endforeach
{{--@endforeach--}}
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
                {{$dresses->links()}}
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
