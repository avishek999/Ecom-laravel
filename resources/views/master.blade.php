<!doctype html>
<html lang="en">

<head>
  <title>AVISHEK</title>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS v5.2.1 -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <!-- Jquery -->
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

</head>

<body>
  {{View::make('header')}}
 @yield('content')
 {{View::make('footer')}}

 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
</body>
<style>
  .custom-login{
     height: 500px;
     padding-top: 100px;
  }
  .slider-img{
   height: 400px !important;
   background-color: black !important;
  }
  .carousel-caption{
    background-color: #e6e6ff;
    color: black;
  }

  .trending-img{
    height: 100px;
  }
  .trending-items{
    float: left;
    width: 25%;
    background-color: #fff;;
  }

.detail-img{
  height: 250px !important;
}

.cart-list{
  border-bottom: 1px solid;
  margin-bottom: 20px;
  padding-bottom: 20px;
}
.order-img{
  height: 250px !important;
  width: 350px;
}
</style>

</html>