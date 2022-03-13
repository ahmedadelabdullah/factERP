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
                       <h3 class="">INVOICE {{$allrow->invoice_number}} , {{$allrow->sup->name}}</h3>
                   </div>
                    <div class="col-md-3">
                       <div class="">
                           <h4>Date: {{Carbon\Carbon::parse($allrow->date)->format('Y-m-d')}}</h4>
                           <h4>Rolls Number: {{$allrow->total_rolls}}</h4>
                           <h4>Amount: {{$allrow->total_amount}}</h4>
                   </div>
                    </div>
                    <div class="col-md-3">
                       <div class="">
                           <h4>Price: {{$allrow->total_amount}}</h4>
                           <h4>Classes NO: {{$allrow->no_classes}}</h4>

                           <h4>Image: <a href="{{URL::asset($allrow->image)}}" target="_blank" class="btn btn-file">Image</a> </h4>
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

                    @foreach(($allrow->rows) as $onerow)
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

                <div class="row p-3">
                    <div class="form-controlr col-md-2">
                        <a href="" class="btn btn-primary w-100">Edit</a>
                    </div>
                    <div class="col-md-2">
                        <a href="" class="btn btn-danger w-100">Delete</a>
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