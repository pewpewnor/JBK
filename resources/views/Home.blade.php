<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/Home.css" />
    <link rel="stylesheet" href="/ICON CSS/css/all.css">
    <link rel="stylesheet" href="/css/Header.css">
    <title>Home</title>
  </head>
  <body>

@extends('Header.atas')
    
@section('container')
    <div class="home-container">
      <img src="/Assets/Toyota-86.jpg" alt="mobil" class="Toyota-86" />
    </div>
    
    <br><br>

    <div class="subjudul">
      <h1>Cars that are popular</h1>
    </div>

    <div class="card1">
      <div class="card2"></div>
      @foreach ($mobils as $mobil)
        <div class="main-card-1">
            <a href="/DetailPage/{{$mobil->id}}"><img src="/Assets/{{$mobil->image}}" alt="item" class="item"></a>
            <h1>{{$mobil->itemName}}</h1>
            <p><i class="fa-solid fa-rupiah-sign"></i>{{$mobil->price}}</p>
            <p><i class="fa-solid fa-truck"></i> Deliver to {{$mobil->location}} Only</p>
            <p><i class="fa-solid fa-square-check"></i>{{$mobil->shopName}}</p>
        </div>
      @endforeach
    </div>
    <br><br>


    <div class="subjudul">
      <h1>Motorcycles that are popular</h1>
    </div>

    <div class="card1">
      <div class="card2"></div>
      @foreach ($motors as $motor)
        <div class="main-card-1">
          <a href="/DetailPage/{{$motor->id}}"><img src="/Assets/{{$motor->image}}" alt="item" class="item"></a>
            <h1>{{$motor->itemName}}</h1>
            <p><i class="fa-solid fa-rupiah-sign"></i>{{$motor->price}}</p>
            <p><i class="fa-solid fa-truck"></i> Deliver to {{$motor->location}} Only</p>
            <p><i class="fa-solid fa-square-check"></i>{{$motor->shopName}}</p>
        </div>
      @endforeach
    </div>
    <br><br>
  @endsection
  </body>
</html>
