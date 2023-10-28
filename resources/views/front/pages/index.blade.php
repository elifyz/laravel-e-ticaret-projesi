@extends('front.layout.layout')

@section('content')

    <div class="site-blocks-cover" style="background-image: url({{asset($slider->image)}});" data-aos="fade">
        <div class="container">
            <div class="row align-items-start align-items-md-center justify-content-end">
                <div class="col-md-5 text-center text-md-left pt-5 pt-md-0">
                    <h1 class="mb-2">{{$slider->name ?? '?'}}</h1>
                    <div class="intro-text text-center text-md-left">
                        <p class="mb-4">{{$slider->content ?? '?'}} </p>
                        <p><a href="{{url('/').'/'.$slider->link}}" class="btn btn-sm btn-primary">Ürünler</a></p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="site-section site-blocks-2">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                    <a class="block-2-item" href="{{route('giyim')}}">
                        <figure class="image">
                            <img src="images/elbisekapak.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>Elbiseler</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
                    <a class="block-2-item" href="{{route('ayakkabi')}}">
                        <figure class="image">
                            <img src="images/ayakkabikapak2.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>Ayakkabılar</h3>
                        </div>
                    </a>
                </div>
                <div class="col-sm-6 col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
                    <a class="block-2-item" href="{{route('canta')}}">
                        <figure class="image">
                            <img src="images/canta1.jpg" alt="" class="img-fluid">
                        </figure>
                        <div class="text">
                            <h3>Çantalar</h3>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="site-section site-section-sm site-blocks-1">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-truck"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Ücretsiz Kargo</h2>
                        <p>Sepetinize özel ürünlerde ücretsiz kargo fırsatı!</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="100">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-refresh2"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Ücretsiz İade</h2>
                        <p>Dilediğiniz kargo şubesinden ücretsiz iade seçenekleri!</p>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-lg-flex mb-4 mb-lg-0 pl-4" data-aos="fade-up" data-aos-delay="200">
                    <div class="icon mr-4 align-self-start">
                        <span class="icon-help"></span>
                    </div>
                    <div class="text">
                        <h2 class="text-uppercase">Destek</h2>
                        <p>Soru ve önerileriniz için dilediğiniz zaman bize ulaşabilirsiniz!</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

