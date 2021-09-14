@extends('master')
@section('content')

<div class="custom-product">
      <div class="trending-wrapper">
            <h4>Mobiles</h4>
            <div class="">
              @foreach ($products as $item)
              <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                <img class="trending-img" src="{{asset('storage/'.$item->path)}}">
                <div class="">
                  <h2>{{$item['name']}}</h2>
                  <h5>{{$item['description']}}</h5>
                </div>
              </a>
              </div>
              @endforeach
            </div>
      </div>
</div>
@endsection