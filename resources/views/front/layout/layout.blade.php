<!DOCTYPE html>
<html lang="tr">
<head>
    <title>Shoppers</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Mukta:300,400,700">
    <link rel="stylesheet" href="{{asset('/')}}fonts/icomoon/style.css">

    <link rel="stylesheet" href="{{asset('/')}}css/bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/magnific-popup.css">
    <link rel="stylesheet" href="{{asset('/')}}css/jquery-ui.css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('/')}}css/owl.theme.default.min.css">


    <link rel="stylesheet" href="{{asset('/')}}css/aos.css">

    <link rel="stylesheet" href="{{asset('/')}}css/style.css">

</head>
<body>

<div class="site-wrap">
    <header class="site-navbar" role="banner">
        <div class="site-navbar-top">
            <div class="container">
                <div class="row align-items-center">

                    <div class="col-6 col-md-4 order-2 order-md-1 site-search-icon text-left">
                        <form action="" class="site-block-top-search">
                            <span class="icon icon-search2"></span>
                            <input type="text" class="form-control border-0" placeholder="Ara">
                        </form>
                    </div>

                    <div class="col-12 mb-3 mb-md-0 col-md-4 order-1 order-md-2 text-center">
                        <div class="site-logo">
                            <a href="{{route('index')}}" class="js-logo-clone">{{config('app.name')}}</a>
                        </div>
                    </div>

                    <div class="col-6 col-md-4 order-3 order-md-3 text-right">
                        <div class="site-top-icons">
                            <ul>
                                <li><a href="{{route('hakkimizda')}}"><span class="icon icon-person"></span></a></li>
                                <li><a href="{{route('iletisim')}}"><span class="icon icon-heart-o"></span></a></li>
                                <li>
                                    <a href="{{route('sepetim')}}" class="site-cart">
                                        <span class="icon icon-shopping_cart"></span>
                                        <span class="count">{{$countQty}}</span>
                                    </a>
                                </li>
                                <li class="d-inline-block d-md-none ml-md-0"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu"></span></a></li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <nav class="site-navigation text-right text-md-center" role="navigation">
            <div class="container">
                <ul class="site-menu js-clone-nav d-none d-md-block">
                    <li class="active"><a href="{{route('index')}}">Anasayfa</a></li>
                    <li class="has-children">
                        <a href="#">Kategoriler</a>
                        <ul class="dropdown">
                            @if(!empty($categories) && $categories->count()>0)
                                @foreach($categories->where('cat_ust', null) as $category)
                                        <li class="has-children">
                                            <a href="{{route($category->slug)}}">{{$category->name}}</a>
                                            <ul class="dropdown">
                                                @foreach($category->subcategory as $sub_category)
                                                        <li><a href="{{route($category->slug, $sub_category->slug)}}">{{$sub_category->name}}</a></li>
                                                @endforeach
                                            </ul>
                                        </li>
                                @endforeach
                            @endif
                        </ul>
                    </li>
                    <li><a href="{{route('hakkimizda')}}">Hakkımızda</a></li>
                    <li><a href="{{route('urunler')}}">Ürünler</a></li>
                    <li><a href="{{route('iletisim')}}">İletişim</a></li>
                </ul>
            </div>
        </nav>
    </header>

    @yield('content')

    <footer class="site-footer border-top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 mb-5 mb-lg-0">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="footer-heading mb-4">Kategoriler</h3>
                        </div>
                        <div class="col-md-6 col-lg-4">
                            <ul class="list-unstyled">
                                <li><a href="{{route('urunler')}}">Elbise</a></li>
                                <li><a href="{{route('urunler')}}">Pantolon</a></li>
                                <li><a href="{{route('urunler')}}">Tişört</a></li>
                                <li><a href="{{route('urunler')}}">Ayakkabı</a></li>
                                <li><a href="{{route('urunler')}}">Çanta</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="block-5 mb-5">
                        <h3 class="footer-heading mb-4">İletişim Bilgileri</h3>
                        <ul class="list-unstyled">
                            <li class="address">{{$settings[('address')]}}</li>
                            <li class="phone">{{$settings[('phone')]}}</li>
                            <li class="email">{{$settings[('email')]}}</li>
                        </ul>
                    </div>

                </div>
            </div>
            <div class="row pt-5 mt-5 text-center">
                <div class="col-md-12">
                    <p>Copyright &copy; {{date('Y')}} Tüm hakları saklıdır.</p>
                </div>

            </div>
        </div>
    </footer>
</div>

<script src="{{asset('/')}}js/jquery-3.3.1.min.js"></script>
<script src="{{asset('/')}}js/jquery-ui.js"></script>
<script src="{{asset('/')}}js/popper.min.js"></script>
<script src="{{asset('/')}}js/bootstrap.min.js"></script>
<script src="{{asset('/')}}js/owl.carousel.min.js"></script>
<script src="{{asset('/')}}js/jquery.magnific-popup.min.js"></script>
<script src="{{asset('/')}}js/aos.js"></script>
@yield('custom.js')
<script src="{{asset('/')}}js/main.js"></script>


</body>
</html>
