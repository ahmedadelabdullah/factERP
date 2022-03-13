@extends('admin.app')
@section('title' , 'Texes invoices')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('tex.index')}}">Dashboard</a> /invoices</li>
@endsection
@section('page_title')
    <h1 class="m-0">All Invoice's Textile </h1>
@endsection
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">
                    <h3 class="card-title">Textile Invoices</h3>
                    <div class="card-tools">
                        <a type="button" class="btn btn-primary" href="{{route('tex.create')}}">Add new Invoice</a>
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>Date</th>
                        <th>Invoice number</th>
                        <th>Supplier</th>
                        <th>No Classes</th>
                        <th>Rolls Number</th>
                        <th>Quantity</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($invoiceinfs as $invoiceinf)
{{--  @foreach($texrows as $texrow)--}}
    <tr>
        <td>{{ Carbon\Carbon::parse($invoiceinf->date)->format('Y-m-d') }}</td>
        <td>{{$invoiceinf->invoice_number}}</td>
        <td>{{$invoiceinf->sup->name}}</td>
        <td>{{$invoiceinf->no_classes}}</td>
        <td>{{$invoiceinf->total_rolls}}</td>
        <td>{{$invoiceinf->total_amount}}</td>
        <td><img src="0e1f91f0507beb858a720dd36ac09285.png"/></td>
        <td>{{$invoiceinf->image}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('tex.show' , $invoiceinf)}}">Show</a>
            <button class="btn btn-danger">Delete</button>
        </td>
    </tr>
  @endforeach
{{--@endforeach--}}
                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>
                {{$invoiceinfs->links()}}
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
