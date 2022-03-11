$(document).ready(function () {
$('#invoice_details').on('keyup blur' , '.quantity' , function () {
    let $row = $(this).closest('.repeated');
    let quantity = $row.find('.quantity').val() || 0;
    let unit_price = $row.find('.unit_price').val() || 0;
    $row.find('.price').val((quantity * unit_price).toFixed(2));
    $('.total_amount').val(sum_price('.price'));
    $('.total_rolls').val(sum_price('.Norolls'));
});

    $('#invoice_details').on('keyup blur' , '.Norolls' , function () {
        $('.total_rolls').val(sum_price('.Norolls'));
    });

    $('#invoice_details').on('keyup blur' , '.unit_price' , function () {
        let $row = $(this).closest('.repeated');
        let quantity = $row.find('.quantity').val() || 0;
        let unit_price = $row.find('.unit_price').val() || 0;
        $row.find('.price').val((quantity * unit_price).toFixed(2));
        $('.total_amount').val(sum_price('.price'));
        $('.total_rolls').val(sum_price('.Norolls'));
    });
    
    $(document).on('click' , '.add_row' , function () {
        let divCount = $('#invoice_details').find('.repeated:last').length;
        let numIncreament = divCount > 0 ? parseInt($('#invoice_details').find('.repeated:last').attr('id'))+ 1 : 0;
        $('.cont').append($(`<div class="repeated col-md-12" id='`+numIncreament+`'>
            <div class="col-md-2 mt-3">
                <input type="text" class="form-control material" name="material[`+numIncreament+`]" autocomplete="off">
            </div>

            <div class="col-md-2 mt-3">
                <input type="number" class="form-control Norolls" name="Norolls[`+numIncreament+`]">
            </div>
        <div class="col-md-2 mt-3">
            <input type="number" class="form-control unit_price" name="unit_price[`+numIncreament+`]">
        </div>
        <div class="col-md-2 mt-3">
            <input type="number" class="form-control quantity" name="quantity[`+numIncreament+`]">
        </div>
        <div class="col-md-2 mt-3">
            <input type="number" class="price form-control" name="price[`+numIncreament+`]">
        </div>
            <div class="col-md-1 mt-3">

                <button type="reset" class="btn btn-primary" id="inputPassword5">Reset</button>
            </div>
            <div class="col-md-1 mt-3 del">

                <button type="button" class="btn btn-danger" id="inputPassword5">Delete</button>
            </div>

        </div>`));
    })
    $(document).on('click' , '.del' , function (e) {
        $(this).parent().remove();
    });
    
    
    let sum_price = function ($selector) {
        let sum = 0;
        $($selector).each(function () {
            let selectorVal = $(this).val() !== '' ? $(this).val() : 0;
            sum += parseFloat( selectorVal);
        });
        return sum.toFixed(2);
    }

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

});

