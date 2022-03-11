@extends('admin.app')

@section('title' , 'New invoice')

@section('content')
    <form class="row invoice_details w-75 m-auto" id="invoice_details" method="POST" action="{{route('tex.store')}}">
        @csrf
        <div class="col-md-12 d-none">
            <label for="inputEmail4" class="form-label">Invoice Number</label>
            <input type="text" class="form-control" id="inputEmail4">
            <input type="password" class="form-control" id="inputEmail4">
        </div>
        <div class="col-md-12">
            <label for="" class="form-label">Supplier</label>
            <select class="form-control supplier" name="supplier_id" id="supplier_id" required>
                <option value="">Not Set</option>
                @foreach($suppliers as $supplier)
                    <option value="{{$supplier->id}}">{{$supplier->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-md-6">
            <label for="inputPassword4" class="form-label">Invoice Number</label>
            <input type="number" class="form-control" id="inputPassword4" name="invoice_number">
        </div>
        <div class="col-md-6">
            <label for="inputPassword10" class="form-label">Date</label>
            <input type="date" class="form-control pickadate date" id="inputPassword10" name="date">
        </div>
<div class="cont">
        <div class="repeated col-md-12" id="0">

            <div class="col-md-2">
                <label for="inputPassword5" class="form-label my-md-4">Material</label>
                <input type="text" class="form-control material" id="material" name="material[0]" autocomplete="off">
            </div>

            <div class="col-md-2">
                <label for="inputPassword5" class="form-label my-md-4 float-left">Rolls Number</label>
                <input type="number" class="form-control Norolls" id="inputPassword5" name="Norolls[0]">
            </div>
        <div class="col-md-2">
            <label for="inputPassword5" class="form-label my-md-4">Unit price</label>
            <input type="number" class="form-control unit_price" id="unit_price" name="unit_price[0]" step="any">
        </div>
        <div class="col-md-2">
            <label for="inputPassword5" class="form-label my-md-4">Quantity</label>
            <input type="number" class="form-control quantity" id="quantity" name="quantity[0]">
        </div>
        <div class="col-md-2">
            <label for="inputPassword12" class="form-label my-md-4">Price</label>
            <input type="number" class="price form-control" id="inputPassword12" name="price[0]" readonly>
        </div>
            <div class="col-md-1 mt-3">
                <label for="inputPassword5" class="form-label my-md-4"></label>

                <button type="reset" class="btn btn-primary" id="inputPassword5">Reset</button>
            </div>
            <div class="col-md-1 mt-3">
                <label for="inputPassword5" class="form-label my-md-4 del"></label>

                <button type="button" class="btn btn-danger" id="inputPassword5">Delete</button>
            </div>
        </div>
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
            <input type="number" class="form-control total_rolls" id="total_rolls" readonly placeholder="total Rolls" name="total_rolls">
        </div>

        <div class="col-md-2 ">
            <label for="inputPassword5" class="form-label"></label>
            <input type="number" class="form-control total_amount" id="total_amount" readonly placeholder="total amount" name="total_amount">
        </div>
    </form>
@endsection