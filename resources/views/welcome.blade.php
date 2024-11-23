@extends('layouts.app')

@section('content')
<div class="main-banner">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 align-self-center">
                <div class="caption header-text">
                    <h6>Welcome to lugx</h6>
                    <h2>BEST STREAMING SITE EVER!</h2>
                    <p>Bebaskan dunia mu tanpa terkendala oleh pembatasan akses.</p>
                    <div class="search-input">
                        <form id="search" action="#">
                            <input type="text" placeholder="Type Something" id='searchText' name="searchKeyword" onkeypress="handle" />
                            <button role="button">Search Now</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 offset-lg-2">
                <div class="right-image">
                    <img src="{{ asset('assets/images/netflix.png')}}" alt="">
                    <span class="offer">-40%</span>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="item">
                        <div class="image">
                            <img src="assets/images/featured-01.png" alt="" style="max-width: 44px;">
                        </div>
                        <h4>Free Bonus</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="item">
                        <div class="image">
                            <img src="assets/images/featured-02.png" alt="" style="max-width: 44px;">
                        </div>
                        <h4>Terpercaya</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="item">
                        <div class="image">
                            <img src="assets/images/featured-03.png" alt="" style="max-width: 44px;">
                        </div>
                        <h4>Account Ready</h4>
                    </div>
                </a>
            </div>

            <div class="col-lg-3 col-md-6">
                <a href="#">
                    <div class="item">
                        <div class="image">
                            <img src="assets/images/featured-04.png" alt="" style="max-width: 44px;">
                        </div>
                        <h4>Pembayaran Mudah</h4>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<div class="section trending">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="section-heading">
                    <h6>Trending</h6>
                    <h2>Trending Media Stream</h2>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="main-button">
                    <a href="{{ route('home') }}">View All</a>
                </div>
            </div>
        @forelse ($product['top_trending'] as $trending)
        <div class="col-lg-3 col-md-6">
          <div class="item">
            <div class="thumb">
              <a href="{{ route('home.show', $trending->id )}}"><img src="{{ asset($trending->image) }}" alt=""></a>
              <span class="price">{{ number_format($trending->price) }}</span>
            </div>
            <div class="down-content">
              <span class="category">{{ $trending->category->name ?? '' }}</span>
              <h4>{{ $trending->name }}</h4>
              <a href="{{ route('home.show', $trending->id )}}"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
</div>

  <div class="section most-played">
    <div class="container">
      <div class="row">
        <div class="col-lg-6">
          <div class="section-heading">
            <h6>TOP Media</h6>
            <h2>Pembelian Terbanyak</h2>
          </div>
        </div>
        <div class="col-lg-6">
          <div class="main-button">
            <a href="shop.html">View All</a>
          </div>
        </div>
        @forelse ($product['top_seller'] as $item)            
        <div class="col-lg-2 col-md-6 col-sm-6">
          <div class="item">
            <div class="thumb">
              <a href="{{ route('home.show', $item->id )}}"><img src="{{ asset($item->image) }}" alt=""></a>
            </div>
            <div class="down-content">
                <span class="category">{{ $item->category->name ?? ''}}</span>
                <h4>{{ $item->name }}</h4>
                <a href="{{ route('home.show', $item->id )}}">Explore</a>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
  </div>

  <div class="section categories">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <div class="section-heading">
            <h6>Categories</h6>
            <h2>Top Categories</h2>
          </div>
        </div>
        @forelse ($product['category'] as $category)
            
        <div class="col-lg col-sm-6 col-xs-12">
          <div class="item">
            <h4>{{ $category->name }}</h4>
            <div class="thumb">
              <a href="product-details.html"><img src="assets/images/categories-01.jpg" alt=""></a>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
    </div>
  </div>
  
  <div class="section cta">
    <div class="container">
      <div class="row">
        <div class="col-lg-5">
          <div class="shop">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>Our Shop</h6>
                  <h2>Go Pre-Order Buy & Get Best <em>Prices</em> For You!</h2>
                </div>
                <p>Dapatkan akun termurah hanya untuk mu.</p>
                <div class="main-button">
                  <a href="shop.html">Shop Now</a>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-5 offset-lg-2 align-self-end">
          <div class="subscribe">
            <div class="row">
              <div class="col-lg-12">
                <div class="section-heading">
                  <h6>NEWSLETTER</h6>
                  <h2>Berlangganan dengan kami <em>Subscribe</em> Newsletter!</h2>
                </div>
                <div class="search-input">
                  <form id="subscribe" action="#">
                    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Your email...">
                    <button type="submit">Subscribe Now</button>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
    
@endsection
