@extends('admin.app')
@section('title' , 'Suppliers')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /Suppliers</li>
@endsection
@section('page_title')
    <h1 class="m-0">All Suppliers </h1>
@endsection
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">
                    <h3 class="card-title">All suppliers</h3>
                    <div class="card-tools">
                        <a type="button" class="btn btn-primary" href="{{route('supplier.create')}}">Add Supplier</a>
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>Name</th>
                        <th>Supply</th>
                        <th>Mobile number</th>
                        <th>Title</th>
                        <th>Balance</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($suppliers as $supplier)
    <tr>
        <td><a href="{{route('supplier.show' , $supplier)}}">{{$supplier->name}}</a></td>
        <td>{{$supplier->supply}}</td>
        <td>{{$supplier->mobile}}</td>
        <td>{{$supplier->title}}</td>
        <td>{{$supplier->balance}}</td>
        <td class="d-flex">
            <a class="btn btn-primary" href="{{route('supplier.show' , $supplier)}}">
                <i class="fas fa-eye"></i>
            </a>
                <a href="{{route('supplier.edit' , $supplier)}}" class="btn btn-primary mx-2">
                    <i class="fa fa-edit"></i>
                </a>

            <form action="{{route('supplier.destroy' , $supplier)}}" method="post" class="d-inline-block">
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
                {{$suppliers->links()}}
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
