<?php
use App\Http\Controllers\productController;
use Illuminate\Support\Facades\Session;
$total = 0;
if(Session::has('user')){
  $total = productController::cartItems();
}


?>
  
<nav class="navbar navbar-expand-lg navbar-light" style="background-color: #1c2331">
  <div class="container-fluid">
    <a class="navbar-brand text-light" href="/">AP</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-light" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-light"href="myOrders">Orders</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          @if(session::has('user'))
          <a class="nav-link text-light" href="/cartlist">Cart({{$total}})</a> 
          <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-light" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            {{session::get('user')['name']}}
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="/logout">logout</a></li>
          </ul>
        </li>
        @else
        <a class="nav-link text-light" href="/login">LOGIN</a>
        @endif
        </li>
      </ul>
    </div>
  </div>
</nav>
