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
    <form class="row invoice_details w-75 m-auto" id="invoice_details_offices" method="POST" action="{{route('OfficeInvoice.store')}}" enctype="multipart/form-data">
        @csrf
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-3">
                    <span class="label font-weight-bolder">Customer</span>
                </div>
                <div class="col-md-9">
                    <select class="form-control office d-inline-block" name="customer" id="offices_id" required>
                        <option value="">Not Set</option>
                        @foreach($offices as $office)
                            <option value="{{$office->id}}">{{$office->name}}</option>
                        @endforeach
                    </select>
                    <a href="">Create new office</a>
                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">Invoice Number</span>
                </div>
                <div class="col-md-7">
                    <input type="number" class="form-control" name="invoice_number" placeholder="invoice number">

                </div>

            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">NO.Pieces</span>
                </div>
                <div class="col-md-7">
                    <input type="number" class="form-control total_pieces" readonly placeholder="NO.Pieces" name="total_pieces">
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="row">
                <div class="col-md-3">
                    <span class="label font-weight-bolder">Date</span>
                </div>
                <div class="col-md-9">
                    <input type="date" class="form-control pickadate date"  name="date" placeholder="Date">
                </div>
            </div>
        </div>


        <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">Discount</span>
                </div>
                <div class="col-md-7">
                    <input type="number" class="form-control discount" placeholder="Discount" name="discount">

                </div>

            </div>
        </div>

        <div class="col-md-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">Sub_Total</span>
                </div>
                <div class="col-md-7">
                    <input type="number" class="form-control sub_total" readonly placeholder="Sub_Total" name="sub_total">

                </div>

            </div>
        </div>

        <div class="col-md-4 py-4">
            <div class="row">
                <div class="col-md-3">
                    <span class="label font-weight-bolder">image</span>
                </div>
                <div class="col-md-9">
                    <input type="file" class="form-control image" id="material" name="image">
                </div>

            </div>
        </div>


        <div class="col-md-4 py-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">no models</span>
                </div>
                <div class="col-md-7">
                    <input type="number"  value="1"  class="form-control no_models" id="material" name="no_models" readonly>
                </div>

            </div>
        </div>

        <div class="col-md-4 py-4">
            <div class="row">
                <div class="col-md-5">
                    <span class="label font-weight-bolder">Total Amount</span>
                </div>
                <div class="col-md-7">
                    <input type="number" class="form-control total_amount" id="total_amount" readonly placeholder="Total amount" name="total_amount">

                </div>

            </div>
        </div>

        <hr style="    width: 100%;
    height: 1px;
    color: white;
    font-weight: 500;
    background-color: white;"/>
<div class="cont row" id="cont">
        <div class="repeated col-sm-12" id="0">
            <div class="col-md-5 col-sm-1">
                <div class="row">
                    <div class="col-md-9">
                        <select class="form-control office d-inline-block mt-md-4 mt-sm-5" name="model[0]" required>
                            <option value="">Model Name</option>
                            @foreach($dresses as $dress)
                                <option value="{{$dress->id}}">{{$dress->model_name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
            </div>
        <div class="col-md-2">
{{--            <label for="inputPassword5" class="form-label">NO.Pieces</label>--}}
            <input type="number" placeholder="quantity" class="form-control quantity mt-md-4 mt-sm-5"  name="quantity[0]" step="any">
        </div>
        <div class="col-md-2">
{{--            <label for="inputPassword5" class="form-label">Unit Price</label>--}}
            <input type="number" placeholder="Unit Price" class="form-control unit_price mt-md-4 mt-sm-5"  name="unit_price[0]">
        </div>
        <div class="col-md-2">
{{--            <label for="inputPassword12" class="form-label">Quantity</label>--}}
            <input type="number" placeholder="price" class="price form-control mt-md-4 mt-sm-5"  name="price[0]" readonly>
        </div>

            <div class="col-md-1 mt-2">
                <button type="button" class="btn btn-danger mt-md-4 mt-sm-5">Delete</button>
            </div>
        </div>

</div>
        <a href="">Create new model</a>

{{--        <div class="col-md-12 mt-4">--}}
{{--            <textarea rows="7" class="form-control comment" name="comment"></textarea>--}}
{{--        </div>--}}

        <div class="col-md-2">
            <label for="inputPassword5" class="form-label"></label>
            <button class="btn btn-primary w-100 add_next" type="button">Add row</button>
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

@push('js')
    <script>
        $(document).ready(function () {
            const $dresses = @json($dresses);
            console.log()
        });
    </script>
@endpush
