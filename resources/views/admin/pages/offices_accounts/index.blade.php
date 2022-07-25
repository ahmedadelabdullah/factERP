@extends('admin.app')
@section('title' , 'Offices processes')
@section('breadcramb')
    <li class="breadcrumb-item"><a href="{{route('dashboard.index')}}">Dashboard</a> /<a href="{{route('OfficeInvoice.index')}}">invoice</a>/invoices</li>
@endsection
@section('page_title')
    <h1 class="m-0">All offices Processes </h1>
@endsection
@section('content')
    <div class="row">
        <!-- Left col -->
        <div class="col-md-12">
            <!-- MAP & BOX PANE -->
            <div class="card m-5">
                <div class="card-header">
                    <h3 class="card-title">Offices Invoices</h3>
                    <div class="card-tools">
                        <a type="button" class="btn btn-primary" href="{{route('OfficeInvoice.create')}}">Add new Invoice</a>
                    </div>
                </div>
                <table id="example2" class="table table-bordered table-hover w-100">
                    <thead>
                    <tr>
                        <th>Office Name</th>
                        <th>customer</th>
                        <th>Payment</th>
                        <th>Add</th>
                        <th>Opposite</th>
                        <th>Retrieved</th>
                        <th>Calculating</th>
                    </tr>
                    </thead>
                    <tbody>
@foreach($accounts as $account)
    <tr>
        <td>{{$account->office}}</td>
        <td>{{$account->payment}}</td>
        <td>{{ Carbon\Carbon::parse($account->date)->format('Y-m-d') }}</td>
        <td>{{$account->add}}</td>
        <td>{{$account->retrieved}}</td>
        <td><img src="{{$account->image}}" width="30" height="30" alt="g"/></td>
        <td>{{$account->sub_total}}</td>
        <td>{{$account->total_amount}}</td>
        <td>
            <a class="btn btn-primary" href="{{route('OfficeInvoice.show' , $account)}}">
                <i class="fas fa-eye"></i>
            </a>
                <a href="{{route('OfficeInvoice.edit' , $account)}}" class="btn btn-primary">
                    <i class="fa fa-edit"></i>
                </a>
            <form action="{{route('OfficeInvoice.destroy' , $account)}}" method="post" class="d-inline-block">
                @csrf
                @method('DELETE')
                @include('admin.layout.modal')
            </form>
        </td>
    </tr>
  @endforeach
{{--@endforeach--}}
                    </tbody>
                    <tfoot>
                    </tfoot>
                </table>
{{--                {{$accounts->links()}}--}}
            </div>
        </div>
        <!-- /.col -->
        <!-- /.col -->
    </div>
    <!-- /.row -->
    </div><!--/. container-fluid -->
    </section>
    </div>
@stop
