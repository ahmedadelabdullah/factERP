@extends('admin.app')

@section('title' , 'New office')
@section('page_title')
    <h4 class="">Create new office</h4>
@endsection

@section('breadcramb')
    <li class="breadcrumb-item"><h4><a href="{{route('office.index')}}">Dashboard</a>

        /<a href="{{route('office.index')}}"> All offices</a> / Create office</h4></li>
@endsection

@section('content')
    <div class="form-style bg-light">
        <div class="row">
    <form class="row invoice_details w-75 m-auto" id="invoice_details" method="POST"
          action="{{route('office.store')}}" enctype="multipart/form-data">
        @csrf

            <div class="col-md-6">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-6">
                <label class="form-label">title</label>
                <input type="text" class="form-control" name="title">
            </div>

        <div class="col-md-6">
                <label class="form-label">phone</label>
                <input type="text" class="form-control" name="phone">
            </div>
        <div class="col-md-6">
                <label class="form-label">previous balance</label>
                <input type="number" class="form-control" name="previous_balance">
            </div>

        <div class="col-md-6">
            <label class="form-label">State</label>
            <input type="text" class="form-control" name="state">
        </div>

        <div class="col-md-6">
        </div>

            <button type="submit" class="btn btn-primary my-3">Submit</button>

    </form>
    </div>
@endsection
