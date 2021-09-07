@extends('master')
@section('content')

<div class="custom-product">
      <div class="col-sm-8">  
        <table class="table table-striped">
            <thead>
              <tr>
                <th>Details</th>
                <th>Amounts</th>
              </tr>
            </thead>
            <tbody>
             <tr>
                <td>Price</td>
                <td>NPR. {{$total}}</td>
             </tr>
             <tr>
                <td>Tax</td>
                <td>Rs. 0</td>
              </tr>
              <tr>
                <td>Delivery Charges</td>
                <td>Rs. 100</td>
              </tr>
              <tr>
                <td>Total Amount</td>
                <td>{{$total+100}}</td>
              </tr>
            </tbody>
          </table>


<form method="POST" action="orderplace">
  @csrf
    <div class="form-group">
      <textarea placeholder="Enter Your Address" name="address" class="form-control"></textarea>
    </div>
    <div class="form-group">
        <label for="">Payment Method</label>
      <p>
        <input type="radio" value="Cash" name="payment"> <span>Online Payment</span>
      </p>
      <p>
        <input type="radio" value="Cash" name="payment"> <span>Cash on Delivery</span>
      </p>
    </div>
    <button type="submit" value="Cash" class="btn btn-default">Order Now</button>
  </form> 
      </div>
</div>
@endsection
 