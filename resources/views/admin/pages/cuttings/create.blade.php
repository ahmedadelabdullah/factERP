@extends('admin.app')

@section('title' , 'New cuts')
@section('page_title')
    <h4 class="">Create new cut</h4>
@endsection

@section('breadcramb')
    <li class="breadcrumb-item"><h4><a href="{{route('supplier.index')}}">Dashboard</a>

        /<a href="{{route('supplier.index')}}"> All cuts</a> / Create New Cut</h4></li>
@endsection

@section('content')
    <div class="form-style bg-light">
        <div class="row">
    <form class="row invoice_details w-75 m-auto" id="invoice_details" method="POST"
          action="{{route('supplier.store')}}" enctype="multipart/form-data">
        @csrf

            <div class="col-md-6">
                <label for="" class="form-label">Name</label>
                <input type="text" class="form-control" name="name">
            </div>
            <div class="col-md-6">
                <label class="form-label">Supply</label>
                <input type="text" class="form-control" name="supply">
            </div>

        <div class="col-md-6">
                <label class="form-label">mobile</label>
                <input type="text" class="form-control" name="mobile">
            </div>
        <div class="col-md-6">
                <label class="form-label">Title</label>
                <input type="text" class="form-control" name="title">
            </div>

            <button type="submit" class="btn btn-primary my-3">Submit</button>

    </form>
    </div>
@endsection
