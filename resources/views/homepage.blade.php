@extends('layouts.layout')

@section('content')
  <div class="containerMain">
    <div class="content">
      <div class="title-section">
        <span>current series</span>
      </div>
      @foreach ($comics as $key => $comic)
        <div class="card">
          <div class="card-img">
            <a href="{{route('comic', ['id' => $key] )}}"><img src="{{$comic['thumb']}}" alt="{{$comic['series']}}"></a>
          </div>
          <h4>{{$comic['series']}}</h4>
        </div>
      @endforeach
    </div>
    <div class="button">
        <span>Load more</span>
    </div>
    <section class="info">
      <div class="content-info">
        <div class="card">
          <img src="{{asset('img/buy-comics-digital-comics.png')}}" alt="Digital Comics">
          <span>Digital Comics</span>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-merchandise.png')}}" alt="DC Merchandise">
          <span>DC Merchandise</span>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-subscriptions.png')}}" alt="Subscription">
          <span>Subscription</span>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-comics-shop-locator.png')}}" alt="Comic Shop Locator">
          <span>Comic Shop Locator</span>
        </div>
        <div class="card">
          <img src="{{asset('img/buy-dc-power-visa.svg')}}" alt="DC Power Visa">
          <span>DC Power Visa</span>
        </div>
      </div>
    </section>
  </div>
@endsection