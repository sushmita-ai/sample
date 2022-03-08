<header>
    <div class="nav-sec">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="fas fa-bars"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="main-navigation">
                                <li class="menu-item active">
                                    <a href="{{url('about')}}">About</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{route('menu')}}">Menu</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{url('delivery-pickup')}}">Delivery/Pickup</a>
                                </li>
                                <li class="menu-item">
                                    <a href="http://alforno.ca/wp-content/uploads/2016/10/catering.pdf">Catering</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{url('gift-card')}}">Gift Cards</a>
                                </li>
                                <li class="menu-item">
                                    <a href="{{url('contact')}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <ul class="head-socio">
                            <li class="prod-cart"><a href="{{url('cart')}}">
                                    <i class="fas fa-shopping-cart">
                                        <span>
                                            @php $total = 0 @endphp
                                                @foreach((array) session('cart') as $id => $details)
                                                @php $total += $details['quantity'] @endphp
                                            @endforeach
                                            {{ $total }}
                                        </span>
                                    </i>
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </div>
    <div class="head-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-4 col-md-4">
                    <div class="comp-info">
                        <strong>
                            We’ve got what you knead to escape the grind
                        </strong>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <div class="logo-wrap">
                        <a href="{{route('home')}}"><img src="{{asset('resources/front/images/latable-logo.jpg')}}"></a>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4">
                    <ul class="comp-contct">
                        <li class="contct-list"><i class="fas fa-phone-alt"></i>(403) 808 - 3126</li>
                        <li class="contct-list"><i class="fas fa-map-marker-alt"></i>301-2903 Kingsview</li>
                        <li class="contct-list"><i></i>Blvd SE Alberta</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>
