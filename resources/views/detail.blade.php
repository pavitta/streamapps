@extends('layouts.app')

@section('content')
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>{{ $products->name }}</h3>
        <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Shop</a>  >  {{ $products->name }}</span>
      </div>
    </div>
  </div>
</div>

<div class="single-product section">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="left-image">
          <img src="{{ asset($products->image) }}" alt="">
        </div>
      </div>
      <div class="col-lg-6 align-self-center">
        <h4>{{ $products->name }}</h4>
        <span class="price">{{ number_format($products->price) }}</span>
        <form id="formqty" action="{{ route('shoppingcart.store')}}">
          <input type="hidden" name="products_id" value="{{ $products->id }}">
          <input type="text" name="qty" id="qty" class="form-control" aria-describedby="quantity" placeholder="1" value="1">
          @auth  
          <button type="submit"><i class="fa fa-shopping-bag"></i> ADD TO CART</button>
          @endauth
        </form>
        <ul>
          <li><span>Stream ID:</span>{{ $products->id }}</li>
          <li><span>Category:</span> <a href="#">{{ $products->category->name ?? '' }}</a></li>
        </ul>
      </div>
      <div class="col-lg-12">
        <div class="sep"></div>
      </div>
    </div>
  </div>
</div>
@endsection
