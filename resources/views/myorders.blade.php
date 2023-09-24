@extends('master')
@section("content")
<div class="custom-product">
     <div class="col-sm-10">
        <div class="trending-wrapper">
            <h2 class="mb-5">my orders </h2>
            <br>
            @foreach($orders as $item)
            <div class=" row searched-item cart-list-devider">
             <div class="col-sm-3">
               <a href="detail/{{$item->id}}">
                  <img class="order-img mt-5 mb-5" src="{{$item->gallery}}">
                  </a>
             </div>
             <div class="col-sm-4  cart-list">
                    <div class="">
                      <h2>Name : {{$item->name}}</h2>
                      <br>
                      <h5>Delivery Status : {{$item->status}}</h5>
                      <h5>Address : {{$item->address}}</h5>
                      <h5>Payment Status : {{$item->status}}</h5>
                      <h5>Payment Method : {{$item->payment_method}}</h5>
                            <br>
                    </div>
             </div>
            
            </div>
            @endforeach
          </div>

     </div>
</div>
@endsection 