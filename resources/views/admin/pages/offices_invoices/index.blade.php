@extends('admin.app')
@section('title' , 'Offices invoices')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /invoices</li>
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
                        <th>id</th>
                        <th>Invoice number</th>
                        <th>customer</th>
                        <th>date</th>
                        <th>no models</th>
                        <th>total pieces</th>
                        <th>total amount</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($invoices as $invoice)
    <tr>
        <td>{{$invoice->id}}</td>
        <td>{{$invoice->invoice_number}}</td>
        <td>{{$invoice->customer}}</td>
        <td>{{ Carbon\Carbon::parse($invoice->date)->format('Y-m-d') }}</td>
        <td>{{$invoice->total_pieces}}</td>
{{--        <td>--}}
{{--        <a href="{{route('supplier.show' , $invoice->sup->id)}}">{{$invoice->sup->name}}</a>--}}
        {{--        </td>--}}
        <td>{{$invoice->sub_total}}</td>
        <td>{{$invoice->no_models}}</td>
        <td>{{$invoice->total_amount}}</td>
{{--        @if($invoice->image == null)--}}
{{--        <td>null</td>--}}
{{--        @else <td><img src="{{$invoice->image}}" width="30" height="30" alt="g"/></td>--}}
{{--        @endif--}}
        <td>
            <a class="btn btn-primary" href="{{route('tex.show' , $invoice)}}">
                <i class="fas fa-eye"></i>
            </a>
                <a href="{{route('tex.edit' , $invoice)}}" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </a>

            <form action="{{route('tex.destroy' , $invoice)}}" method="post" class="d-inline-block">
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
