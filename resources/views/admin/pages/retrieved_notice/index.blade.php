@extends('admin.app')
@section('title' , 'Offices invoices')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /<a href="{{route('OfficeInvoice.index')}}">invoice</a>/invoices</li>
@endsection
@section('page_title')
    <h1 class="m-0">All Offices Invoice </h1>
@endsection
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">
                    <h3 class="card-title">Offices Invoices</h3>
                    <div class="card-tools">
                        <a type="button" class="btn btn-primary" href="{{route('OfficeInvoice.create')}}">Add new Invoice</a>
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>Invoice Number</th>
                        <th>customer</th>
                        <th>date</th>
                        <th>no models</th>
                        <th>Image</th>
                        <th>sub total</th>
                        <th>total amount</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($invoices as $invoice)
    <tr>
        <td>{{$invoice->invoice_number}}</td>
        <td>{{$invoice->office->name}}</td>
        <td>{{ Carbon\Carbon::parse($invoice->date)->format('Y-m-d') }}</td>
        <td>{{$invoice->no_models}}</td>
                @if($invoice->image == null)
            <td>null</td>
        @else
        <td><img src="{{$invoice->image}}" width="30" height="30" alt="g"/></td>
                @endif
        <td>{{$invoice->sub_total}}</td>
        <td>{{$invoice->total_amount}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('OfficeInvoice.show' , $invoice)}}">
                <i class="fas fa-eye"></i>
            </a>
                <a href="{{route('OfficeInvoice.edit' , $invoice)}}" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </a>
            <form action="{{route('OfficeInvoice.destroy' , $invoice)}}" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
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
                {{$invoices->links()}}
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
