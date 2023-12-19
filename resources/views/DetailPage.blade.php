<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/CSS/Home.css" />
    <link rel="stylesheet" href="/ICON CSS/css/all.css">
    <link rel="stylesheet" href="/CSS/Header.css">
    <title>Detail Page</title>
</head>

@extends('Header.atas')

<body>



     <div style="width: 100%; height: 100%; position: relative; background: white">

        <div class="Gambar_Mobil" >
            <div style="width: 720px; height: 100px; left: 880px; top: 170px; position: absolute">
                <img style="width: 720px; height: 520px; left: 0px; top: 150px; position: absolute; border-radius: 30px" src="{{ asset('Assets/' . $vehicle->image) }}" />
                    {{-- Frame Gambar utama --}}
                {{-- <div style="width: 220px; height: 220px; left: 0px; top: 754px; position: absolute; background: #D9D9D9; border-radius: 30px"></div>
                <div style="width: 220px; height: 220px; left: 250px; top: 754px; position: absolute; background: #D9D9D9; border-radius: 30px"></div>
                <div style="width: 220px; height: 220px; left: 500px; top: 754px; position: absolute; background: #D9D9D9; border-radius: 30px"></div> --}}
            </div>
        </div>




        <div class="Data_Mobil" >
            <div style="width: 857px; height: px; left: 250px; top: 150px; position: absolute">

            <div style="width: 840px; left: 0px; top: 135px; position: absolute"><span style="color: #00A9FF; font-size: 58px; font-family: Roboto; font-weight: 700; word-wrap: break-word">{{$vehicle->itemName}} {{--Nama Judul Mobil--}} </span><span style="color: black; font-size: 48px; font-family: Roboto; font-weight: 700; word-wrap: break-word">    {{--Deskripsi samping judul --}}</span></div>
            <div style="left: 0px; top: 730px; position: absolute; color: #00A9FF; font-size: 72px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Rp {{ number_format($vehicle->price, 0, '.', '.') }} {{--isi Harga--}}</div>

            <div style="left: 0px; top: 204px; position: absolute; color: #7C7C7C; font-size: 32px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Spesifikasi</div>
            <div style="left: 0px; top: 439px; position: absolute; color: #7C7C7C; font-size: 32px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Deskripsi</div>
            <div style="left: 0px; top: 600px; position: absolute; color: #7C7C7C; font-size: 32px; font-family: Roboto; font-weight: 400; word-wrap: break-word ;  ">Catatan Penjual</div>
            <div style="left: 0px; top: 252px; position: absolute"><span style="color: #00A9FF; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Mesin :</span><span style="color: #7C7C7C; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word"> {{$vehicle->engine}} {{-- Isi Mesin--}} <br/></span><span style="color: #00A9FF; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">  Tenaga :</span><span style="color: #7C7C7C; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">  {{$vehicle->power}} {{-- Tenaga isi--}}<br/></span><span style="color: #00A9FF; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Torsi :</span><span style="color: #7C7C7C; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word"> {{$vehicle->Torsi}} {{-- Torsi--}}<br/></span><span style="color: #00A9FF; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Kilometer :</span><span style="color: #7C7C7C; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word"> {{$vehicle->kilometer}} {{-- Isi Kilometer--}}<br/></span><span style="color: #00A9FF; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">warna : </span><span style="color: #7C7C7C; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word"> {{$vehicle->color}} {{--isi warna--}}</span></div>
            <div style="width: 840px; left: 0px; top: 658px; position: absolute; text-align: justify; color: #7C7C7C; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word; max-width: 550px">{{$vehicle->description}} </div>
            <div style="width: 857px; left: 0px; top: 497px; position: absolute; text-align: justify"><span style="color: #00A9FF; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Lokasi :</span><span style="color: #7C7C7C; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word"> {{$vehicle->location}}  {{--  Isi Lokasi--}}<br/></span><span style="color: #00A9FF; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word">Penjual :</span><span style="color: #7C7C7C; font-size: 24px; font-family: Roboto; font-weight: 400; word-wrap: break-word"> {{$vehicle->shopName}} {{-- Isi Penjual--}}</span></div>

            {{-- <div style="width: 840px; height: 110px; left: 0px; top: 842px; position: absolute; background: #00A9FF; border-radius: 30px"></div> --}} {{--Tombol "Beli"--}}
            {{-- <div style="left: 370px; top: 859px; position: absolute; text-align: center ; color: white; font-size: 60px; font-family: Roboto; font-weight: 700; word-wrap: break-word">Beli</div> Tulisan "Hubungi Penjual" --}}
            <button  class= "Button_Beli "style="width: 840px; height: 110px; left: 0px; top: 842px; position: absolute; background: #00A9FF; border-radius: 30px ; border: none" >

                <div style="left: 370px; top: 15px; position: absolute; text-align: center; color: white; font-size: 60px; font-family: Roboto; font-weight: 700; word-wrap: break-word">
                    Beli
                </div>
            </button>

            </div>
            <img style="width: 1920px; height: 317px; left: 0px; top: 1505px; position: absolute" src="https://via.placeholder.com/1920x317" />  {{-- Bagian Footer--}}
            </div>
        </div>


</body>
</html>
