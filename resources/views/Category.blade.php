<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="/css/Category.css" />
    <link rel="stylesheet" href="/css/Header.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <title>Category</title>
  </head>
<body>

@extends('Header.atas')
    
@section('container')
    <div class="c-container">
      <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="/Assets/Bugatti.jpg" class="d-block w-100 c-image" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Bugatti</h5>
            <p>Bugatti adalah mobil Prancis produsen dari mobil kinerja tinggi, yang didirikan pada tahun 1909.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/Assets/Ford.jpg" class="d-block w-100 c-image" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Ford</h5>
            <p>Produsen mobil asal Amerika Serikat yang didirikan oleh Henry Ford di Dearborn.</p>
          </div>
        </div>
        <div class="carousel-item">
          <img src="/Assets/Toyota-86.jpg" class="d-block w-100 c-image" alt="...">
          <div class="carousel-caption d-none d-md-block">
            <h5>Toyota</h5>
            <p>Toyota adalah produsen otomotif multinasional Jepang yang berkantor pusat di Jepang.</p>
          </div>
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
    </div>
    
    <br><br>
    <div class="c-content">
    @foreach ($categories as $category)
      <div class="subjudul">
          <h1>{{ $category->name }}</h1>
        </div>
      <div class="c-row">
      @foreach ($category->data as $item)
				<div class="card">
            <div class="card-img">
              <img src="/Assets/{{$item->image}}" alt="item" class="" />
            </div>
            <div class="card-header">
              <p>{{ $item->itemName }}</p>
            </div>
            <div class="card-body">
              <p><i class="fa-solid fa-rupiah-sign"></i><b>Harga:</b> Rp{{$item->price}}</p>
              <p><i class="fa-solid fa-square-check"></i><b>Penjual:</b> {{$item->shopName}}</p>
              <p><i class="fa-solid fa-truck"></i> <i>Deliver to {{$item->location}} Only</i></p>
            </div>
            <div class="card-footer">
              <a href="/DetailPage/{{$item->id}}">
                <button class="card-btn">VIEW DETAIL</button>
              </a>
            </div>
          </div>
          @endforeach
        </div>
        <br>
        <br>
    @endforeach
@endsection
</div>
</body>
</html>
