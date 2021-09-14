@extends('masterAdmin')
@section('content')
<div>
    <a class="btn btn-success" href="addProduct">Add Product</a>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Category</th>
                <th>Gallery</th>
                <th>Description</th>
                <th>Created Date</th>
                <th>Updated Date</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $item)
              <tr>
                  <td>{{$item['id']}}</td>
                  <td>{{$item['name']}}</td>
                  <td>{{$item['price']}}</td>
                  <td>{{$item['category']}}</td>
                  <td>{{$item['gallery']}}</td>
                  <td>{{$item['description']}}</td>
                  <td>{{$item['created_at']}}</td>
                  <td>{{$item['updated_at']}}</td>
                  <td>
                    <a class="btn btn-warning" href="editProduct/{{$item['id']}}">Edit</a>||
                    <a class="btn btn-danger" href="deleteProduct/{{$item['id']}}">Delete</a>
                </td>
              </tr>
              @endforeach
        </tbody>
    </table>
</div>
@endsection
