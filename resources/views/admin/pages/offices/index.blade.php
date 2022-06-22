@extends('admin.app')
@section('title' , 'offices')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /offices</li>
@endsection
@section('page_title')
    <h1 class="m-0">All offices </h1>
@endsection
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">
                    <h3 class="card-title">All offices</h3>
                    <div class="card-tools">
                        <a type="button" class="btn btn-primary" href="{{route('office.create')}}">Add office</a>
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>id</th>
                        <th>Name</th>
                        <th>title</th>
                        <th>Mobile phone</th>
                        <th>previous balance</th>
                        <th>State</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($offices as $office)
    <tr>
        <td>{{$office->id}}</td>
        <td>{{$office->name}}</td>
        <td>{{$office->title}}</td>
        <td>{{$office->phone}}</td>
        <td><a href="{{route('office.show' , $office)}}">{{$office->previous_balance}}</a></td>
        <td>{{$office->state}}</td>
        <td class="d-flex">
            <a class="btn btn-primary" href="{{route('office.show' , $office)}}">
                <i class="fas fa-eye"></i>
            </a>
                <a href="{{route('office.edit' , $office)}}" class="btn btn-primary mx-2">
                    <i class="fa fa-edit"></i>
                </a>

            <form action="{{route('office.destroy' , $office)}}" method="post" class="d-inline-block">
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
                {{$offices->links()}}
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
