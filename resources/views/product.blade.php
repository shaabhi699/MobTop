@extends('master')
@section('content')

<div class="custom-product">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              
              @foreach ($productslimit as $item)
              <li data-target="#myCarousel" data-slide-to="{{$loop->index}}"></li>
              @endforeach
             
            </ol>
          
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
              @foreach ($productslimit as $item)
              <div class="item {{ $loop->first ? 'active' : '' }} ">
                <a href="detail/{{$item['id']}}">
                  <img class="slider-img" src="{{asset('storage/'.$item->path)}}" alt="Mobiles & Laptops">
                <div class="carousel-caption slider-text">
                  <h3 style="color:blue;">{{$item['name']}}</h3>
                  <p style="color:blue;">{{$item['description']}}</p>
                </div>
              </a>
              </div>
              @endforeach
            </div>


        
            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
          <div class="trending-wrapper">
            <h1>Trending Products</h1>
            <div class="">
              @foreach ($products as $item)
              <div class="trending-item card m-5">
                <div class="card-body">
                <a href="detail/{{$item['id']}}">
                <img class="trending-img" src="{{asset('storage/'.$item->path)}}" class="img-fluid">
                <div class="">
                  <h3>{{$item['name']}}</h3>
                </div>
              </a>
              </div>
              </div>
              @endforeach
            </div>
          </div>
</div>
@endsection
