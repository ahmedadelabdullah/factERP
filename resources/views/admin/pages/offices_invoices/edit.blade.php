@extends('admin.app')

@section('title' , 'edit invoices')

@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('tex.index')}}">Dashboard</a> /invoices</li>
@endsection

@section('page_title')
    <h1 class="m-0">Show Invoice's Textile </h1>
@endsection


@section('content')
    <form class="row invoice_details w-75 m-auto" id="invoice_details" method="POST" action="{{route('tex.update',$edit_info)}}" enctype="multipart/form-data">
        @csrf
        @method('PATCH')
        <div class="col-md-12 d-none">
            <label for="inputEmail4" class="form-label">Invoice Number</label>
            <input type="text" class="form-control" id="inputEmail4">
            <input type="password" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <label for="" class="form-label">Supplier</label>
            <select class="form-control supplier" name="supplier_id" id="supplier_id" required>
                <option value="{{$edit_info->sup->name}}" selected>{{$edit_info->sup->name}}</option>
                @foreach($suppliers as $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-12">
            <label for="inputPa" class="form-label my-md-4">image</label>
            <input type="file" class="form-control image" id="material" name="image" value="{{URL::asset($edit_info->image)}}">
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Invoice Number</label>
            <input type="number" class="form-control" id="inputPassword4" name="invoice_number" value="{{ $edit_info->invoice_number}}">
        </div>
        <div class="col-md-6">
            <label for="inputPassword10" class="form-label">Date</label>
            <input type="date" class="form-control pickadate date" id="inputPassword10"
                   name="date" value="{{ Carbon\Carbon::parse($edit_info->date)->format('Y-m-d') }}">
        </div>
        <div class="cont">
            <div class="row mt-3">
                <div class="col-md-2 form-label ml-md-4 float-left text-bold">Material</div>
                <div class="col-md-2 form-label float-left text-bold">Rolls Number</div>
                <div class="col-md-2 form-label float-left text-bold">Unit price</div>
                <div class="col-md-2 form-label float-left text-bold">Quantity</div>
                <div class="col-md-2 form-label float-left text-bold">price</div>

            </div>
            @foreach($edit_info->rows as $one_row)
                <div class="repeated col-md-12 m-2" id="0">
                    <div class="col-md-2">
                        <input type="text" class="form-control material" id="material" name="material[0]"
                               autocomplete="off" value="{{$one_row->material}}">
                    </div>



                    <div class="col-md-2">
                        <input type="number" class="form-control Norolls" id="inputPassword5"
                               name="Norolls[0]" value="{{$one_row->Norolls}}">
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control unit_price" id="unit_price"
                               name="unit_price[0]" step="any" value="{{$one_row->unit_price}}">
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="form-control quantity" id="quantity"
                               name="quantity[0]" value="{{$one_row->quantity}}">
                    </div>
                    <div class="col-md-2">
                        <input type="number" class="price form-control" id="inputPassword12" name="price[0]"
                               readonly value="{{$one_row->price}}">
                    </div>
                    <div class="col-md-1">

                        <button type="reset" class="btn btn-primary" id="inputPassword5">Reset</button>
                    </div>
                    <div class="col-md-1">

                        <button type="button" class="btn btn-danger" id="inputPassword5">Delete</button>
                    </div>
                </div>
            @endforeach


        </div>
        <div class="col-md-12 mt-4">
            <textarea rows="7" class="form-control comment" name="comment"></textarea>
        </div>

        <div class="col-md-2">
            <label for="inputPassword5" class="form-label"></label>
            <button class="btn btn-primary w-100 add_row" type="button">Add row</button>
        </div>

        <div class="col-md-2">
            <label for="inputPassword5" class="form-label"></label>
            <button class="btn btn-primary w-100" type="submit">Save</button>
        </div>

        <div class="col-md-2 offset-md-4">
            <label for="inputPassword5" class="form-label"></label>
            <input type="number" class="form-control total_rolls" id="total_rolls" readonly
                   placeholder="total Rolls" name="total_rolls" value="{{$edit_info->total_rolls}}">
        </div>

        <div class="col-md-2 ">
            <label for="inputPassword5" class="form-label"></label>
            <input type="number" class="form-control total_amount" id="total_amount"
                   readonly placeholder="total amount" name="total_amount" value="{{$edit_info->total_amount}}">
        </div>
    </form>
@endsection