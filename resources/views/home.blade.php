@extends('master')
@section("content")
<!-- Carousel -->

<section>

  <div id="testimonials" class="carousel slide" data-bs-ride="carousel" data-bs-keyboard="true">
  <button class="carousel-control-prev" type="button" data-bs-target="#testimonials" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#testimonials" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
    <div class="carousel-inner">
      @foreach ($products as $item)
      <div class="carousel-item {{$item['id']==1?'active':''}}">
        <a href="detail/{{$item['id']}}">
          <img class="slider-img" src="{{$item['gallery']}}">
          <div class="carousel-caption slider-text">
          <h3>{{$item['name']}}</h3>
              <p>{{$item['description']}}</p>
            </div>
            <a href="detail/{{$item['id']}}"></a>
        </a> <!-- Close the <a> tag here -->
      </div>
      @endforeach
    </div>
        </div>
        <br>

   <div class="trending-wrapper">
    <h3 class="text-center fw-bold">Trending Items</h3>
    <br>
    <div class="">
      @foreach ($products as $item)
      <div class="trending-items">
      <a href="detail/{{$item['id']}}">
          <img class="trending-img" src="{{$item['gallery']}}">
          <div class="">
          <h3>{{$item['name']}}</h3>
            </div>
            </a>
      </div>
      @endforeach

   </div>

  </div>
</section>
@endsection
