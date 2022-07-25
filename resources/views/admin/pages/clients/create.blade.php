@extends('admin.app')

@section('title' , 'New invoice')
@section('page_title')
    <h4 class="">Create new Invoice</h4>
@endsection

@section('breadcramb')
    <li class="breadcrumb-item"><h4><a href="{{route('dashboard.index')}}">Dashboard</a>
        /<a href="{{route('OfficeInvoice.index')}}"> All Invoices</a> / Create invoice</h4></li>
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
                    <select class="form-control office d-inline-block" name="offices_id" id="offices_id"
                            value="" required>
                        @error('customer')
                        <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                        @enderror
                        <option value>Not Set</option>
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
                    <input type="number" class="form-control" name="invoice_number"
                           placeholder="invoice number" value="" required>
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
                    <input type="number" class="form-control total_pieces" readonly placeholder="total_pieces" name="total_pieces">
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
                    <input type="date" class="form-control pickadate date"  name="date" placeholder="Date" required>
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
                    <input type="number" class="form-control sub_total" readonly placeholder="Sub_Total" name="sub_total" required>
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
                    <input type="file" class="form-control image" id="material" name="image">
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
                           readonly placeholder="Total amount" name="total_amount" required>
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
        <div class="repeated col-sm-12" id="0">
            <div class="col-md-5 col-sm-1">
                <div class="row">
                    <div class="col-md-9">
                        <select class="form-control office d-inline-block mt-md-4 mt-sm-5" name="model[0]" required>
                            <option value >Model Name</option>
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
                   name="quantity[0]" step="any" required>
            @error('quantity[0]')
            <span class="text-danger" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
            @enderror
        </div>
        <div class="col-md-2">
{{--            <label for="inputPassword5" class="form-label">Unit Price</label>--}}
            <input type="number" placeholder="Unit Price" class="form-control unit_price mt-md-4 mt-sm-5"
                   name="unit_price[0]" required>
        </div>
        <div class="col-md-2">
{{--            <label for="inputPassword12" class="form-label">Quantity</label>--}}
            <input type="number" placeholder="price" class="price form-control mt-md-4 mt-sm-5"
                   name="price[0]" readonly required">
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
            $(document).on('click' , '.add_next' , function () {
                let no_repeated = $('#invoice_details_offices').find('.repeated').length;
                let numIncreament = no_repeated > 0 ? parseInt($('#invoice_details_offices').find('.repeated:last').attr('id'))+ 1 : 0;
                let cont = document.getElementById('cont');
                let rep = document.getElementById('0').cloneNode(true);
                rep.setAttribute('id' , numIncreament);
                cont.appendChild(rep);
                $('.repeated:last .select').val('');
                $('.repeated:last .Nopieces').val('');
                $('.repeated:last .quantity').val('');
                $('.repeated:last .unit_price').val('');
                $('.repeated:last .price').val('');
                $('.repeated:last .office').attr('name' , 'model['+[numIncreament]+']');
                $('.repeated:last .Nopieces').attr('name' , 'Nopieces['+[numIncreament]+']');
                $('.repeated:last .quantity').attr('name' , 'quantity['+[numIncreament]+']');
                $('.repeated:last .unit_price').attr('name' , 'unit_price['+[numIncreament]+']');
                $('.repeated:last .price').attr('name' , 'price['+[numIncreament]+']');
                $('.no_models').val(numIncreament +1 );
                $('.repeated:last .btn').parent().addClass('del');
            });
            {{--        End Adding New Product In Office's Invoice --}}

        });



    </script>
@endpush
