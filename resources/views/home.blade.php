@extends('layouts.app')

@section('content')

<div class="page-heading header-text">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <h3>Our Shop</h3>
          <span class="breadcrumb"><a href="#">Home</a> > Our Shop</span>
        </div>
      </div>
    </div>
  </div>

  <div class="section trending">
    <div class="container">
      <ul class="trending-filter">
        <li>
          <a class="is_active" href="#!" data-filter="*">Show All</a>
        </li>
        @forelse ($category as $category)    
        <li>
          <a href="#!" data-filter=".{{ $category->name }}">{{ $category->name }}</a>
        </li>
        @empty
        @endforelse
      </ul>
      <div class="row trending-box">
        @forelse ($products as $item)    
        <div class="col-lg-3 col-md-6 align-self-center mb-30 trending-items col-md-6 {{ $item->category->name }}">
          <div class="item">
            <div class="thumb">
              <a href="{{ route('home.show', $item->id )}}"><img src="{{ asset($item->image) }}" alt=""></a>
              <span class="price">{{ number_format($item->price) }}</span>
            </div>
            <div class="down-content">
              <span class="category">{{ $item->category->name ?? '' }}</span>
              <h4>{{ $item->name }}</h4>
              <a href="{{ route('home.show', $item->id )}}"><i class="fa fa-shopping-bag"></i></a>
            </div>
          </div>
        </div>
        @empty
        @endforelse
      </div>
      <div class="row">
        <div class="col-lg-12">
          <ul class="pagination">
          @if ($products->onFirstPage())
          <li><a class="disabled" href="#"> &lt; </a></li>
          @else
          <li><a href="{{ $products->previousPageUrl() }}"> &lt; </a></li>
          @endif
          @foreach (range(1, $products->lastPage()) as $page)
          <li>
              <a class="{{ $products->currentPage() == $page ? 'is_active' : '' }}" href="{{ $products->url($page) }}">{{ $page }}</a>
          </li>
          @endforeach
          @if ($products->hasMorePages())
              <li><a href="{{ $products->nextPageUrl() }}"> &gt; </a></li>
          @else
              <li><a class="disabled" href="#"> &gt; </a></li>
          @endif
          </ul>
        </div>
      </div>
    </div>
  </div>
@endsection
