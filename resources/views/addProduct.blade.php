@extends('masterAdmin')
@section('content')
<div class="col-sm-8">
  @include('message.alert')
  <form class="form" action="{{ url('/addProduct/edit') }}"  method="POST" enctype="multipart/form-data">
      @csrf
      {{ csrf_field() }}
    <div class="form-group">
      <label>Name</label>
      <input type="text" class="form-control" name='name' placeholder="Enter Product Name"/>
    </div>
    
    <div class="form-group">
      <label>Price</label>
      <input type="text" class="form-control" name='price' placeholder="Enter Price"/>
    </div>
    
    <div class="form-group">
        <label>Category</label>
        <label for="category">Choose Category:</label>
  <select name="category">
    <option value="Mobile">Mobile</option>
    <option value="Laptop">Laptop</option>
    <option value="Accessories">Accessories</option>
  </select>
    </div>

    <div class="form-group">
      <label>Gallery</label>
      <input type="file" class="form-control" name='gallery'/>
    </div>
    
    <div class="form-group">
        <label>Description</label>
        <textarea name="description" placeholder="Enter Description"></textarea>
    </div>

    <button type="submit" class="btn btn-primary">Add</button>
  </form>
</div>
@endsection