@extends('layouts.app')

@section('content')
<div class="page-heading header-text">
  <div class="container">
    <div class="row">
      <div class="col-lg-12">
        <h3>Shopping Cart</h3>
        <span class="breadcrumb"><a href="#">Home</a>  >  <a href="#">Shop</a>  >  Shopping Cart</span>
      </div>
    </div>
  </div>
</div>

<div class="single-product section">
  <div class="container">
    <div class="row">
      <div class="col-lg-12 align-self-center">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <th>Item</th>
              <th>qty</th>
              <th>Price</th>
            </thead>
            <tbody>
              @php
                $total = 0;
              @endphp
              @forelse ($shoppingCart as $item)
                  <tr>
                    <td>{{ $item->product->name }}</td>
                    <td>
                      <div class="d-flex align-items-center">
                        <input type="text" disabled class="form-control form-control-sm quantity" style="width: 60px; margin-right: 5px;" value="{{ $item->qty }}">
                        <button class="btn btn-danger btn-sm delete" data-delete="{{ route('shoppingcart.destroy', $item->id) }}"><span class="fas fa-trash-alt"></span></button>
                      </div>
                    </td>
                    @php
                        $total += $item->qty*$item->product->price;
                    @endphp
                    <td style="text-align: right">{{ number_format($item->qty*$item->product->price) }}</td>
                  </tr>
              @empty
                  <tr>
                    <td colspan="3" style="text-align: center"> Tidak ada Item</td>
                  </tr>
              @endforelse
            </tbody>
            @if (count($shoppingCart) > 0)   
            <tfoot>
              <tr>
                <td colspan="2" style="text-align: center">Total</td>
                <td style="text-align: right">{{ number_format($total) }}</td>
              </tr>
              <tr>
                <td colspan="3" style="text-align: right"><button class="btn btn-block btn-danger" data-url="{{ route('shoppingcart.create') }}" data-nextpage="{{ route('checkout.index') }}" id="checkout">Checkout</button></td>
              </tr>
            </tfoot>
            @endif
          </table>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection
