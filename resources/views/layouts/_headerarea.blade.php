<!-- ***** Header Area Start ***** -->
<header class="header-area header-sticky">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <!-- ***** Logo Start ***** -->
                    <a href="index.html" class="logo">
                        <img src="assets/images/logo.png" alt="" style="width: 158px;">
                    </a>
                    <!-- ***** Logo End ***** -->
                    <!-- ***** Menu Start ***** -->
                    <ul class="nav">
                      <li><a href="{{ route('/') }}" class="active">Home</a></li>
                      <li><a href="{{ route('home') }}">Our Shop</a></li>
                    @guest
                        @if (Route::has('register'))
                            <li><a href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @endif
                        @if (Route::has('login'))
                            <li><a href="{{ route('login') }}">{{ __('Login') }}</a></li>
                        @endif
                    @else
                        <li><a href="{{ route('shoppingcart.index') }}" id="shopcart" data-url="{{ route('shoppingcart.show','id') }}"><span class="fa fa-cart-shopping"></span><i class="badge badge-danger" id="notifcart">0</i></a></li>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a></li>
                    @endguest
                    </ul>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                    <!-- ***** Menu End ***** -->
                </nav>
            </div>
        </div>
    </div>
</header>
<!-- ***** Header Area End ***** -->