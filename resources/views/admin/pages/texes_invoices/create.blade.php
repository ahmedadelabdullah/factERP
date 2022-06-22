@extends('admin.app')

@section('title' , 'New invoice')
@section('page_title')
    <h4 class="">Create new Invoice</h4>
@endsection

@section('breadcramb')
    <li class="breadcrumb-item"><h4><a href="{{route('dashboard.index')}}">Dashboard</a>
        /<a href="{{route('tex.index')}}"> All Invoices</a> / Create invoice</h4></li>
@endsection

@section('content')
    <div class="form-style bg-light">
    <form class="row invoice_details w-75 m-auto" id="invoice_details" method="POST" action="{{route('tex.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-3">
                    <span class="label font-weight-bolder">Supplier</span>
                </div>
                <div class="col-md-9">
                    <select class="form-control supplier d-inline-block" name="supplier_id" id="supplier_id" required>
                        <option value="">Not Set</option>
                        @foreach($suppliers as $supplier)
                            <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                        @endforeach
                    </select>
                    <a href="">Create new supplier</a>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">Invoice Number</span>
                </div>
                <div class="col-md-7">
                    <input type="number" class="form-control" id="inputPassword4" name="invoice_number">

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">NO.Rolls</span>
                </div>
                <div class="col-md-7">
                    <input type="number" class="form-control total_rolls" id="total_rolls" readonly placeholder="Total Rolls" name="total_rolls">
                </div>
            </div>
        </div>
        <div class="col-md-4 offset-md-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">Date</span>
                </div>
                <div class="col-md-7">
                    <input type="date" class="form-control pickadate date" id="inputPassword10" name="date" placeholder="Date">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">Total Amount</span>
                </div>
                <div class="col-md-7">
                    <input type="number" class="form-control total_amount" id="total_amount" readonly placeholder="Total amount" name="total_amount">

                </div>

            </div>
        </div>

        <div class="col-md-4 offset-md-4 py-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">image</span>
                </div>
                <div class="col-md-7">
                    <input type="file" class="form-control image" id="material" name="image">
                </div>

            </div>
        </div>

        <hr style="    width: 100%;
    height: 1px;
    color: white;
    font-weight: 500;
    background-color: white;"/>
<div class="cont row">
        <div class="repeated col-sm-12" id="0">

            <div class="col-md-3 col-sm-1">
                <label for="inputPassword5" class="form-label  ">Material</label>
                <input type="text" class="form-control material mt-md-4 mt-sm-5" id="material" name="material[0]" autocomplete="off">
            </div>
            <div class="col-md-2">
                <label for="inputPassword5" class="form-label">Rolls</label>
                <input type="number" class="form-control Norolls mt-md-4 mt-sm-5" id="inputPassword5" name="Norolls[0]">
            </div>
        <div class="col-md-2">
            <label for="inputPassword5" class="form-label">Unit</label>
            <input type="number" class="form-control unit_price mt-md-4 mt-sm-5" id="unit_price" name="unit_price[0]" step="any">
        </div>
        <div class="col-md-2">
            <label for="inputPassword5" class="form-label">Quantity</label>
            <input type="number" class="form-control quantity mt-md-4 mt-sm-5" id="quantity" name="quantity[0]">
        </div>
        <div class="col-md-2">
            <label for="inputPassword12" class="form-label">Price</label>
            <input type="number" class="price form-control mt-md-4 mt-sm-5" id="inputPassword12" name="price[0]" readonly>
        </div>

            <div class="col-md-1 mt-2">
                <label for="inputPassword5" class="form-label del"></label>

                <button type="button" class="btn btn-danger mt-md-4 mt-sm-5" id="inputPassword5">Delete</button>
            </div>
        </div>
</div>

{{--        <div class="col-md-12 mt-4">--}}
{{--            <textarea rows="7" class="form-control comment" name="comment"></textarea>--}}
{{--        </div>--}}

        <div class="col-md-2">
            <label for="inputPassword5" class="form-label"></label>
            <button class="btn btn-primary w-100 add_row" type="button">Add row</button>
        </div>
        <div class="col-md-2">
            <label for="inputPassword5" class="form-label"></label>
            <button class="btn btn-primary w-100" type="reset">Reset</button>
        </div>

        <div class="col-md-2">
            <label for="inputPassword5" class="form-label"></label>
            <button class="btn btn-primary w-100" type="submit">Save</button>
        </div>

    </form>
    </div>
@endsection
