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

{{--                    <h3 class="card-title">Invoice Number : {{$invoice->info->invoice_number}}</h3>--}}
                </div>
{{--                <div class="card-header">--}}
{{--                    <h3 class="card-title">Supplier :  <a href="{{route('supplier.show',$invoice->id)}}">{{$invoice->supplier->name}}</a></h3>--}}
{{--                </div>--}}
                <div class="card-header">
{{--                    <h3 class="card-title">Date : {{\Carbon\Carbon::parse($invoice->info->date)->format('y-m-d')}}</h3>--}}
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">

                   <h4>invoice number {{$allrow->invoice_number}}</h4>
                   <h4>date {{Carbon\Carbon::parse($allrow->date)->format('Y-m-d')}}</h4>
                   <h4>number of types {{$allrow->no_classes}}</h4>
                   <h4>no.rolls {{$allrow->total_rolls}}</h4>
                   <h4>amount {{$allrow->total_amount}}</h4>

                    <thead>
                    <tr>
                        <th>Material</th>
                        <th>Rolls Number</th>
                        <th>Unit price</th>
                        <th>Quantity</th>
                        <th> price</th>
                        <th>Actions</th>
                    </tr>
                    </thead>
                    <tbody>

                    @foreach(($allrow->rows) as $onerow)
                    <tr>
                        <td>{{$onerow->material}}</td>
                        <td>{{$onerow->Norolls}}</td>
                        <td>{{$onerow->unit_price}}</td>
                        <td>{{$onerow->quantity}}</td>
                        <td>{{$onerow->price}}</td>
                        <td><a href="" class="btn btn-default">Edit</a> </td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tbody>




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