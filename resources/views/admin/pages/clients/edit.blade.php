@extends('admin.app')
@section('title' , 'edit invoice')
@section('page_title')
    <h4 class="">Edit Invoice</h4>
@endsection
{{--{{dd($edit_info->rows->)}}--}}
@section('breadcramb')
    <li class="breadcrumb-item"><h4><a href="{{route('dashboard.index')}}">Dashboard</a>
            /<a href="{{route('OfficeInvoice.index')}}"> All Invoices</a> / Create invoice</h4></li>
@endsection

@section('content')
    <div class="form-style bg-light">
        <form class="row invoice_details w-75 m-auto" id="invoice_details_offices" method="POST" action="{{route('OfficeInvoice.update', $edit_info)}}" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3">
                        <span class="label font-weight-bolder">Customer</span>
                    </div>
                    <div class="col-md-9">
                        <select class="form-control office d-inline-block" name="customer" id="offices_id"
                                 required>
                            <option value="{{$edit_info->customer}}">{{$edit_info->customer}}</option>
                            @foreach($offices as $office)
                                <option value="{{$office->name}}">{{$office->name}}</option>
                            @endforeach
                            @error('customer')
                            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                            @enderror
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
                        <input type="number" class="form-control" name="invoice_number"
                               placeholder="invoice number" value="{{$edit_info->invoice_number}}" required>
                        @error('invoice_number')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-5">
                        <span class="label font-weight-bolder">NO.Pieces</span>
                    </div>
                    <div class="col-md-7">
                        <input type="number" class="form-control total_pieces" readonly placeholder="total_pieces"
                               name="total_pieces" value="{{$edit_info->total_pieces}}">
                        @error('total_pieces')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-3">
                        <span class="label font-weight-bolder">Date</span>
                    </div>
                    <div class="col-md-9">
                        <input type="date" class="form-control pickadate date"  name="date"
                               placeholder="Date" required value="{{$edit_info->date}}">
                        @error('date')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>


            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-5">
                        <span class="label font-weight-bolder">Discount</span>
                    </div>
                    <div class="col-md-7">
                        <input type="number" class="form-control discount" placeholder="Discount"
                               value="{{$edit_info->discount}}" name="discount">
                    </div>

                </div>
            </div>

            <div class="col-md-4">
                <div class="row">
                    <div class="col-md-5">
                        <span class="label font-weight-bolder">Sub_Total</span>
                    </div>
                    <div class="col-md-7">
                        <input type="number" class="form-control sub_total" readonly placeholder="Sub_Total"
                               name="sub_total" required value="{{$edit_info->sub_total}}">
                        @error('sub_total')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                </div>
            </div>

            <div class="col-md-4 py-4">
                <div class="row">
                    <div class="col-md-3">
                        <span class="label font-weight-bolder">Image</span>
                    </div>
                    <div class="col-md-9">
                        <input type="file" class="form-control image" name="image" value="{{$edit_info->image}}">
                    </div>

                </div>
            </div>


            <div class="col-md-4 py-4">
                <div class="row">
                    <div class="col-md-5">
                        <span class="label font-weight-bolder">No Models</span>
                    </div>
                    <div class="col-md-7">
                        <input type="number"  value="1"  class="form-control no_models" id="material" name="no_models" readonly>
                        @error('no_models')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="col-md-4 py-4">
                <div class="row">
                    <div class="col-md-5">
                        <span class="label font-weight-bolder">Total Amount</span>
                    </div>
                    <div class="col-md-7">
                        <input type="number" class="form-control total_amount" id="total_amount"
                               readonly placeholder="Total amount" name="total_amount"
                              value="{{$edit_info->total_amount}}" required>
                        @error('total_amount')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>

                </div>
            </div>
            <hr style="    width: 100%;
    height: 1px;
    color: white;
    font-weight: 500;
    background-color: white;"/>
            <div class="cont row" id="cont">
                @foreach($edit_info->rows as $one_row)
                <div class="repeated col-sm-12" id="0">
                    <div class="col-md-5 col-sm-1">
                        <div class="row">
                            <div class="col-md-9">
                                <select class="form-control model d-inline-block mt-md-4 mt-sm-5"
                                        name="model['0']" required>
                                    <option value="{{$one_row->model}}" selected>{{$one_row->model}}</option>
                                    @foreach($dresses as $dress)
                                        <option value="{{$dress->model_name}}">{{$dress->model_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        {{--            <label for="inputPassword5" class="form-label">NO.Pieces</label>--}}
                        <input type="number" placeholder="quantity" class="form-control quantity mt-md-4 mt-sm-5"
                               name="quantity['0']" step="any" required value="{{$one_row->quantity}}">
                        @error('quantity[0]')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                    </div>
                    <div class="col-md-2">
                        {{--            <label for="inputPassword5" class="form-label">Unit Price</label>--}}
                        <input type="number" placeholder="Unit Price" class="form-control unit_price mt-md-4 mt-sm-5"
                               name="unit_price['0']" required value="{{$one_row->unit_price}}">
                    </div>
                    <div class="col-md-2">
                        <input type="number" placeholder="price" class="price form-control mt-md-4 mt-sm-5"
                               name="price['0']" readonly required value="{{$one_row->price}}">
                    </div>
                    <div class="col-md-1 mt-2 ">
                        <button type="button" class="btn btn-danger mt-md-4 mt-sm-5">Delete</button>
                    </div>


                </div>
                @endforeach
            </div>
            <a href="">Create new model</a>
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
            $('#invoice_details , #invoice_details_offices').on('keyup blur' , '.quantity' , function () {
                let $row = $(this).closest('.repeated');
                let quantity = $row.find('.quantity').val() || 0;
                let unit_price = $row.find('.unit_price').val() || 0;
                let total_pieces = $('.total_pieces').val() || 0;
                $row.find('.price').val((quantity * unit_price).toFixed(0));
                $('.sub_total').val(sum_price('.price'));
                $('.total_amount').val(($('.sub_total')));
                $('.total_rolls').val(sum_price('.Norolls'));
                let sub_total = $('.sub_total').val() || 0;
                $('.total_amount ').val(sub_total - (sum_price('.quantity') * ($('.discount').val())));
            });

            $('#invoice_details ,  #invoice_details_offices').on('keyup blur' , '.unit_price' , function () {
                let $row = $(this).closest('.repeated');
                let quantity = $row.find('.quantity').val() || 0;
                let unit_price = $row.find('.unit_price').val() || 0;
                $row.find('.price').val((quantity * unit_price).toFixed(0));
                $('.sub_total').val(sum_price('.price'));
                let sub_total = $('.sub_total').val() || 0;
                $('.total_amount ').val(sub_total - (sum_price('.quantity') * ($('.discount').val())));
                $('.total_rolls').val(sum_price('.Norolls'));
            });


            $('#invoice_details , #invoice_details_offices').on('keyup blur' , '.Norolls , .quantity' , function () {
                $('.total_rolls ').val(sum_price('.Norolls'));
                $('.total_pieces').val(sum_price('.quantity'));
            });

            $('#invoice_details , #invoice_details_offices').on('keyup blur' , '.discount' , function () {
                let sub_total = $('.sub_total').val() || 0;
                $('.total_amount ').val(sub_total - (sum_price('.quantity') * ($('.discount').val())));
            });



            let sum_price = function ($selector) {
                let sum = 0;
                $($selector).each(function () {
                    let selectorVal = $(this).val() !== '' ? $(this).val() : 0;
                    sum += parseFloat( selectorVal);
                });
                return sum.toFixed(0);
            }


            $(document).on('click' , '.del' , function (e) {
                $(this).parent().remove();
                let rows_number = parseInt($('.repeated').length); // The no created rows
                $('.no_models').val(rows_number);
                $('.total_amount').val(sum_price('.price'));
                $('.total_rolls').val(sum_price('.Norolls'));
                $('.sub_total').val(sum_price('.price'));
                let sub_total = $('.sub_total').val() || 0;
                $('.total_amount ').val(sub_total - (sum_price('.quantity') * ($('.discount').val())));


            });


            $('.pickadate').pickadate({
                format: 'yyyy-mm-dd',
                selectMonth:true,
                selectYear:true,
                clear:true,
                closeOnSelect:true
            });

            $('#invoice_details').on('submit',function (e) {
                $('select.supplier').each(function () {$(this).rules('add',{required:true})})
                $('input.material').each(function () {$(this).rules('add',{required:true})})
                $('input.Norolls').each(function () {$(this).rules('add',{required:true})})
                $('input.unit_price').each(function () {$(this).rules('add',{required:true})})
                $('input.quantity').each(function () {$(this).rules('add',{required:true})})
                $('input.price').each(function () {$(this).rules('add',{required:true})})
                $('input.date').each(function () {$(this).rules('add',{required:true})})
            })

            $('#invoice_details').validate({
                rules: {
                    'invoice_number' :{required:true},
                    'date' :{required:true},
                    'material' :{required:true},
                    'Norolls' :{required:true},
                    'unit_price' :{required:true},
                    'quantity' :{required:true},
                    'price' :{required:true},
                    'supplier_id' :{required:true},
                },
                submitHandler:function (form) {
                    form.submit();
                }
            });
            {{--        Start Adding New Product In Office's Invoice --}}
                var repeated = $('#invoice_details_offices').find('.repeated').length;
            console.log(repeated);
            for(var i = 1 ; i <=repeated ; i++)
            {
                $('.repeated:nth-child(' + i + ') .model').closest('.repeated').attr('id' , i - 1);
                $('.repeated:nth-child(' + i + ') .model').attr('name' , 'model['+[i - 1]+']');
                $('.repeated:nth-child(' + i + ') .unit_price').attr('name' , 'unit_price['+[i - 1]+']');
                $('.repeated:nth-child(' + i + ') .quantity').attr('name' , 'quantity['+[i - 1]+']');
                $('.repeated:nth-child(' + i + ') .price').attr('name' , 'price['+[i - 1]+']');
                if(i > 1){
                    $('.repeated:nth-child(' + i + ') .btn').parent().addClass('del');

                }
            }
            $(document).on('click' , '.add_next' , function () {
                let no_repeated = $('#invoice_details_offices').find('.repeated').length;
                let numIncreament = no_repeated > 0 ? parseInt($('#invoice_details_offices').find('.repeated:last').attr('id'))+ 1 : 0;
                let cont = document.getElementById('cont');
                let rep = document.getElementById('0').cloneNode(true);
                rep.setAttribute('id' , numIncreament);
                cont.appendChild(rep);
                $('.repeated:last .model').val('');
                $('.repeated:last .quantity').val('');
                $('.repeated:last .unit_price').val('');
                $('.repeated:last .price').val('');
                $('.repeated:last .model').attr('name' , 'model['+[numIncreament]+']');
                $('.repeated:last .quantity').attr('name' , 'quantity['+[numIncreament]+']');
                $('.repeated:last .unit_price').attr('name' , 'unit_price['+[numIncreament]+']');
                $('.repeated:last .price').attr('name' , 'price['+[numIncreament]+']');
                $('.no_models').val(numIncreament +1 );
                $('.repeated:last .btn').parent().addClass('del');
            });
        });
    </script>
@endpush
