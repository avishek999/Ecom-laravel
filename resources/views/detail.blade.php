@extends('master')
@section("content")
<div class="container">
    <div class="row">
        <div class="col-sm-6">
        <div class="card mt-5 mb-5" style="width: 30rem;">
        <div class="d-flex justify-content-center">
        <img class="detail-img img-fluid" src="{{$product['gallery']}}" alt="">
        </div>
  <div class="card-body">
    <h5 class="card-title">{{$product['name']}}</h5>
    <p class="card-text"> {{$product['description']}}</p>
    <button class="btn btn-success  mb-5 ">Buy Now</button>
  </div>
</div>
       
        </div>
        <div class="col-sm-6">
            <a class="btn btn-primary mt-5 mb-5" href="/">Go Back</a>
            <h2>{{$product['name']}}</h2>
            <h3>Price : {{$product['price']}}</h3>
            <h3>Category : {{$product['category']}}</h3>
            <h3>Description : {{$product['description']}}</h3>
            <br><br>
            <form action="/add_to_cart" method="post">
                @csrf
             <input type="hidden" name="product_id" value="{{$product['id']}}">
            <button class="btn btn-primary mt-5 mb-5">Add to Cart</button>
            </form>
            
        </div>
    </div>
</div>
@endsection


