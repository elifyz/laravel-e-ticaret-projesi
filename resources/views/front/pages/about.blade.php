@extends('front.layout.layout')
@section('content')

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{route('index')}}">Anasayfa</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Hakkımızda</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section border-bottom" data-aos="fade">
        <div class="container">
            <div class="row mb-5">
                <div class="col-md-6">
                    <div class="block-16">
                        <figure>
                            <img src="{{$about->image}}" alt="Image placeholder" class="img-fluid rounded">
                        </figure>
                    </div>
                </div>
                <div class="col-md-1"></div>
                <div class="col-md-5">


                    <div class="site-section-heading pt-3 mb-4">
                        <h2 class="text-black">{{$about->name}}</h2>
                    </div>
                    <p>{{$about->content}}</p>

                </div>
            </div>
        </div>
    </div>




    <div class="site-section site-section-sm site-blocks-1 border-0" data-aos="fade">
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
