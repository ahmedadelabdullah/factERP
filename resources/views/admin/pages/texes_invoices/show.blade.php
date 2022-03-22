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
                <div class="card card-blue bg-blue">
                   <div class="row d-flex justify-content-center align-items-center p-3">
                   <div class="col-md-6">
                       <h3 class="">INVOICE {{$invoiceinf->invoice_number}} , {{$invoiceinf->sup->name}}</h3>
                   </div>
                    <div class="col-md-3">
                       <div class="">
                           <h4>Date: {{Carbon\Carbon::parse($invoiceinf->date)->format('Y-m-d')}}</h4>
                           <h4>Rolls Number: {{$invoiceinf->total_rolls}}</h4>
                           <h4>Amount: {{$invoiceinf->total_amount}}</h4>
                   </div>
                    </div>
                    <div class="col-md-3">
                       <div class="">
                           <h4>Price: {{$invoiceinf->total_amount}}</h4>
                           <h4>Classes NO: {{$invoiceinf->no_classes}}</h4>

                           <h4>Image: <a href="{{URL::asset($invoiceinf->image)}}" target="_blank" class="btn btn-file">Image</a> </h4>
                       </div>
                   </div>
                   </div>
                </div>
                <table id="example2" class="table table-dark table-striped table-hover w-100">
                    <thead>
                    <tr>
                        <th>Material</th>
                        <th>Rolls Number</th>
                        <th>Unit price</th>
                        <th>Quantity</th>
                        <th> price</th>

                    </tr>
                    </thead>
                    <tbody>

                    @foreach(($invoiceinf->rows) as $onerow)
                    <tr>
                        <td>{{$onerow->material}}</td>
                        <td>{{$onerow->Norolls}}</td>
                        <td>{{$onerow->unit_price}}</td>
                        <td>{{$onerow->quantity}}</td>
                        <td>{{$onerow->price}}</td>

                    </tr>
                    @endforeach
                    </tbody>

                    <tfoot>


                    </tfoot>
                </table>

                <div class="row p-2">
                    <div class="p-2">
                        <a href="{{route('tex.edit',$invoiceinf)}}" class="btn btn-primary">
                            <i class="fa fa-edit"></i>
                        </a>
                    </div>
                    <div class="p-2">
                                    <form action="{{route('tex.destroy' , $invoiceinf)}}" method="post" class="d-inline-block w-100">
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