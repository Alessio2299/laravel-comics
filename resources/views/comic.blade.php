@extends('layouts.layout')


@section('content')
  <div class="comic" >
    <div class="containerImage">
      <div class="imageComic">
        <img src="{{$comic['thumb']}}" alt="{{$comic['series']}}">
        <span class="target">{{$comic['type']}}</span>
      </div>
    </div>
    <div class="content">
      <div class="description">
        <h1>{{$comic['title']}}</h1>
        <div class="buy">
          <div class="price">
            <span><b>U.S. Price :</b> {{$comic['price']}}</span>
            <span class="available"><b>Available</b></span>
          </div>
          <div class="checkAvailability">
            <span>Check Availability</span>
          </div>
        </div>
        <p>{{$comic['description']}}</p>
      </div>
      <div class="adv">
        <span>Advertisement</span>
        <img src="{{asset('img/adv.jpg')}}" alt="adv">
      </div>
    </div>
    <div class="infoComic">
      <div class="content">
        <div class="talent">
          <h2>Talent</h2>
          <div class="art border">
            <span class="title">Art by:</span>
            <div class="person">
              @foreach ($comic['artists'] as $artist)
                  <span>{{$artist}},</span>
              @endforeach
            </div>
          </div>
          <div class="written">
            <span class="title">Written by:</span>
            <div class="person">
              @foreach ($comic['writers'] as $writer)
                  <span>{{$writer}},</span>
              @endforeach
            </div>
          </div>
        </div>
        <div class="specs">
          <h2>Specs</h2>
          <div class="series border">
            <span class="title">Series:</span>
            <span class="data color">{{$comic['series']}}</span>
          </div>
          <div class="price">
            <span class="title">U.S. Prices:</span>
            <span class="data">{{$comic['price']}}</span>
          </div>
          <div class="sale">
            <span class="title">On Sale Date:</span>
            <span class="data">{{$comic['sale_date']}}</span>
          </div>
        </div>
      </div>
      <div class="infoSite">
        <div class="digital bordLeft">
          <span>Digital Comics</span>
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="">
        </div>
        <div class="shop">
          <span>Shop Dc</span>
          <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="">
        </div>
        <div class="locator">
          <span>Comic Shop Locator</span>
          <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="">
        </div>
        <div class="sub bordRight">
          <span>Subscriptions</span>
          <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="">
        </div>
      </div>
    </div>
  </div>
@endsection
