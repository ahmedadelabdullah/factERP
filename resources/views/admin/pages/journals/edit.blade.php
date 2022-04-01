@extends('admin.app')

@section('title' , 'edit invoices')

@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('tex.index')}}">Dashboard</a> /invoices</li>
@endsection

@section('page_title')
    <h1 class="m-0">Show Invoice's Textile </h1>
@endsection


@section('content')
    <form class="row invoice_details w-75 m-auto" id="invoice_details" method="POST"
          action="{{route('supplier.update',$supplier)}}">
        @csrf
        @method('PUT')
        <div class="col-md-6">
            <label for="" class="form-label">Name</label>
            <input type="text" class="form-control" name="name" value="{{$supplier->name}}">
        </div>
        <div class="col-md-6">
            <label class="form-label">Supply</label>
            <input type="text" class="form-control" name="supply" value="{{$supplier->supply}}">
        </div>

        <div class="col-md-6">
            <label class="form-label">mobile</label>
            <input type="text" class="form-control" name="mobile" value="{{$supplier->mobile}}">
        </div>
        <div class="col-md-6">
            <label class="form-label">Title</label>
            <input type="text" class="form-control" name="title" value="{{$supplier->title}}">
        </div>

        <button type="submit" class="btn btn-primary my-3">Update</button>
    </form>
@endsection