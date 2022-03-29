<header>
  <div class="top-header">
    <div class="container">
      <span>Dc Power℠ Visa®</span>
      <span>Additional Dc Sites</span>
      <i class="fas fa-caret-down"></i>
    </div>
  </div>
  <nav>
    <div class="logo">
      <img src="{{asset('img/dc-logo.png')}}" alt="DC-Logo">
    </div>
    <ul>
      <li><a href="#">Characters</a></li>
      <li class="{{ (Route::currentRouteName() == 'home'  ||  Route::currentRouteName() == 'comic') ? 'active' : ''}}"><a href="{{route('home')}}">Comics</a></li>
      <li><a href="#">Movies</a></li>
      <li><a href="#">Tv</a></li>
      <li><a href="#">Games</a></li>
      <li><a href="#">Collectibles</a></li>
      <li><a href="#">Videos</a></li>
      <li><a href="#">Fans</a></li>
      <li class="{{ Route::currentRouteName() == 'news' ? 'active' : ''}}"><a href="{{route('news')}}">News</a></li>
      <li>
        <a href="#">Shop</a>
        <i class="fas fa-caret-down"></i>
      </li>
    </ul>
    <div class="searchBar">
      <input type="text" name="search" placeholder="Search">
      <i class="fas fa-search"></i>
    </div>
  </nav>
</header>