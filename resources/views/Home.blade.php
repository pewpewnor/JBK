<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/CSS/Home.css" />
    <link rel="stylesheet" href="/ICON CSS/css/all.css">
    <link rel="stylesheet" href="/CSS/Header.css">
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
      @foreach ($database as $db)
        @if ($loop->index == 4)
            @break
        @else
        <div class="main-card-1">
            <img src="/Assets/{{$db->image}}" alt="item" class="item"></a>
            <h1>{{$db->itemName}}</h1>
            <p><i class="fa-solid fa-rupiah-sign"></i>{{$db->price}}</p>
            <p><i class="fa-solid fa-truck"></i> Deliver to {{$db->location}} Only</p>
            <p><i class="fa-solid fa-square-check"></i>{{$db->shopName}}</p>
        </div>
        @endif
      @endforeach
    </div>
    <br><br>


    <div class="subjudul">
      <h1>Motorcycle that are popular</h1>
    </div>

    <div class="card1">
      <div class="card2"></div>
      @foreach ($database2 as $db2)
        @if ($loop->index == 4)
            @break
        @else
        <div class="main-card-1">
            <img src="/Assets/{{$db2->image}}" alt="item" class="item"></a>
            <h1>{{$db2->itemName}}</h1>
            <p><i class="fa-solid fa-rupiah-sign"></i>{{$db2->price}}</p>
            <p><i class="fa-solid fa-truck"></i> Deliver to {{$db2->location}} Only</p>
            <p><i class="fa-solid fa-square-check"></i>{{$db2->shopName}}</p>
        </div>
        @endif
      @endforeach
    </div>

    <br><br>
@endsection
 

  </body>
</html>
