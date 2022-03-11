@extends('admin.app')

@section('title' , 'Show invoices')

@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('tex.index')}}">Dashboard</a> /invoices</li>
@endsection

@section('page_title')
    <h1 class="m-0">Show Invoice's Textile </h1>
@endsection

@section('content')

    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">

                    <h3 class="card-title">Invoice Number : {{$invoice->id}}</h3>
                </div>
                <div class="card-header">
{{--                    <h3 class="card-title">Supplier :  <a href="{{route('supplier.show',$invoice->id)}}">{{$invoice->supplier->name}}</a></h3>--}}
                </div>
                <div class="card-header">
                    <h3 class="card-title">Date : {{$invoice->date}}</h3>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>Rolls Number</th>
                        <th>Material</th>
                        <th>Unit price</th>
                        <th>Quantity</th>
                        <th> price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                <td>{{$invoice->date}}</td>
{{--                <td>{{$invoice->material}}</td>--}}
{{--                <td>{{$invoice->unit_price}}</td>--}}
{{--                <td>{{$invoice->quantity}}</td>--}}
{{--                <td>{{$invoice->price}}</td>--}}
                <td>
                    <button class="btn btn-primary">Show</button>
                    <button class="btn btn-info">Edit</button>
                    <button class="btn btn-danger">Delete</button>
                </td>

                    </tbody>
                    <tfoot>

                    </tfoot>
                </table>

            </div>
        </div>
        <!-- /.col -->


        <!-- /.col -->
    </div>

    <!-- /.row -->
    </div><!--/. container-fluid -->
    </section>
    </div>

@endsection