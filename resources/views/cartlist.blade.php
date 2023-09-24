@extends('master')
@section("content")
<!-- Carousel -->

<div class="custom-product">
    <div class="col-sm-10">
        <div class="trending-wrapper">
            <h4 class="text-center fw-bold mb-5">YOUR CART</h4>
            <br>
            @foreach ($products as $item)
            <div class="row searched-item cart-list mb-5">
                <div class="col-sm-4 mb-5">
                    <a href="detail/{{$item->id}}">
                        <img class="trending-img" src="{{$item->gallery}}">
                    </a>
                </div>
                <div class="col-sm-4 mb-5">
                    <a href="detail/{{$item->id}}">
                        <div class="">
                            <h3>{{$item->name}}</h3>
                            <br>
                            <h5>{{$item->description}}</h5>
                        </div>
                    </a>
                </div>
                <div class="col-sm-4 mb-5">
                    <a href="/removcart/{{$item->cart_id}}" class="btn btn-warning">REMOVE</a>
                </div>
            </div>
            @endforeach
        </div>
    </div>
    <div class="text-center">
        <a class="btn btn-success mb-5 text-center" href="order">Order Now </a>
    </div>
</div>

@endsection