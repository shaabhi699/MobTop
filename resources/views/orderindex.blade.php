@extends('masterAdmin')
@section('content')
<div class="container">
    <a class="btn btn-primary btn-sm" href="{{ url('/addProduct')}}">Add Product</a>
    <br><br>
    <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>ID</th>
                <th>Product ID</th>
                <th>User ID</th>
                <th>Address</th>
                <th>Status</th>
                <th>Payment Method</th>
                <th>Payment Status</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($orders as $item)
              <tr>
                  <td>{{$item['id']}}</td>
                  <td>{{$item['product_id']}}</td>
                  <td>{{$item['user_id']}}</td>
                  <td>{{$item['address']}}</td>
                  <td>{{$item['status']}}</td>
                  <td>{{$item['payment_method']}}</td>
                  <td>{{$item['payment_status']}}</td>
                  <td>
                    <a class="btn btn-danger" href="deleteOrder/{{$item['id']}}">Delete</a>
                </td>
              </tr>
              @endforeach
        </tbody>
    </table>
</div>
@endsection
