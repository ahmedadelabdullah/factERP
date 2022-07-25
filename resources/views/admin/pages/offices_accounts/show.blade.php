@extends('admin.app')

@section('title' , 'Show office invoices')

@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /<a href="{{route('OfficeInvoice.index')}}">invoice</a>/invoices</li>
@endsection

@section('page_title')
    <h1 class="m-0">Show Offices Invoice </h1>
@endsection

@section('content')

    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card card-blue bg-black">
                   <div class="row d-flex justify-content-center align-items-center p-3">
                   <div class="col-md-4">
                       <h5 class="">INVOICE NUMBER : {{$invoiceinf->invoice_number}}</h5>
                       <h5 class="">TO OFFICE : {{$invoiceinf->customer}}</h5>
                       <h5 class="">Date : {{$invoiceinf->date}}</h5>
                   </div>
                    <div class="col-md-4">
                       <div class="">
{{--                           <h4>Date: {{Carbon\Carbon::parse($invoiceinf->date)->format('Y-m-d')}}</h4>--}}
                           <h5>Number Of Pieces : {{$invoiceinf->total_pieces}}</h5>
                           <h5>Number Of Models : {{$invoiceinf->total_pieces}}</h5>
                           <h5>Image: <a href="{{URL::asset($invoiceinf->image)}}" target="_blank" class="btn btn-file">Image</a> </h5>
                   </div>
                    </div>
                    <div class="col-md-4">
                       <div class="">
                           <h5>Sub Total: {{$invoiceinf->total_amount}}</h5>
                           <h5>Total Amount: {{$invoiceinf->no_classes}}</h5>

                           <h4>Image: <a href="{{URL::asset($invoiceinf->image)}}" target="_blank" class="btn btn-file">Image</a> </h4>
                       </div>
                   </div>
                   </div>
                </div>
                <table id="example2" class="table table-dark table-striped table-hover w-80">
                    <thead>
                    <tr>
                        <th>Model</th>
                        <th>quantity</th>
                        <th>Unit price</th>
                        <th>price</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach(($invoiceinf->rows) as $onerow)
                    <tr>
                        <td>{{$onerow->model}}</td>
                        <td>{{$onerow->quantity}}</td>
                        <td>{{$onerow->unit_price}}</td>
                        <td>{{$onerow->price}}</td>
                    </tr>
                    @endforeach
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>

                <div class="row p-2">
                    <div class="p-2">
                        <a href="{{route('OfficeInvoice.edit',$invoiceinf)}}" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                    </div>
                    <div class="p-2">
                                    <form action="{{route('OfficeInvoice.destroy' , $invoiceinf)}}" method="post" class="d-inline-block w-100">
                                        @csrf
                                        @method('delete')
                                        @include('admin.layout.modal')
                                    </form>
                    </div>
                </div>


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
