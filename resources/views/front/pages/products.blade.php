@extends('front.layout.layout')
@section('content')

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{route('index')}}">Anasayfa</a> <span class="mx-2 mb-0">/</span>
                    <strong class="text-black">Ürünler</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-9 order-2">

                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="d-flex">
                                <div class="dropdown mr-1 ml-md-auto">

                                </div>
                                <div class="btn-group">
                                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle"
                                            id="dropdownMenuReference" data-toggle="dropdown">Sırala
                                    </button>
                                    <div class="dropdown-menu" aria-labelledby="dropdownMenuReference">
                                        <a class="dropdown-item" href="#" data-order="price_min_order">Fiyata göre artan</a>
                                        <a class="dropdown-item" href="#" data-order="price_max_order">Fiyata göre azalan</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-5">

                        @if(!empty($products) && $products->count() > 0)
                            @foreach($products as $product)
                                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up">
                                    <div class="block-4 text-center border">
                                        <figure class="block-4-image">
                                            <a href="{{route('urundetay',$product->slug)}}"><img
                                                    src="{{asset($product->image)}}" alt="Image placeholder"
                                                    class="img-fluid"></a>
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="{{route('urundetay',$product->slug)}}">{{$product->name}}</a>
                                            </h3>

                                            <p class="text-primary font-weight-bold">{{number_format($product->price)}}</p>
                                            <form action="{{route('sepetim.add')}}" method="post" >
                                                @csrf
                                                <input type="hidden" name="size" value="{{$product->size}}">
                                                <input type="hidden" name="product_id" value="{{$product->id}}">
                                                <button type="submit" class="buy-now btn btn-sm btn-primary">Sepete Ekle</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif


                    </div>
                    <div class="row" data-aos="fade-up">
                        {{$products->withQueryString()->links('pagination::custom')}}

                    </div>
                </div>

                <div class="col-md-3 order-1 mb-5 mb-md-0">
                    <div class="border p-4 rounded mb-4">
                        <h3 class="mb-3 h6 text-uppercase text-black d-block">Kategoriler</h3>
                        <ul class="list-unstyled mb-0">
                            @if(!empty($categories) && $categories->count() > 0)
                                @foreach($categories->where('cat_ust', null) as $category)
                                    <li class="mb-1"><a href="{{route('urunler',$category->slug)}}" class="d-flex"><span>{{$category->name}}</span> <span class="text-black ml-auto">{{$category->items_count}}</span></a></li>
                                @endforeach
                            @endif

                        </ul>
                    </div>

                    <div class="border p-4 rounded mb-4">
                        <div class="mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Fiyat</h3>
                            <div id="slider-range" class="border-primary"></div>
                            <input type="text" name="text" id="amount" class="form-control border-0 pl-0 bg-white"
                                   disabled=""/>
                        </div>

                        <div class="mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Beden</h3>
                            @if(!empty($size_list))
                                 @foreach($size_list as $size_lists)
                                    <label for="s_sm" class="d-flex">
                                        <input type="checkbox" id="s_sm" class="mr-2 mt-1"> <span
                                            class="text-black">{{$size_lists}}</span>
                                    </label>
                                 @endforeach
                            @endif
                        </div>

                        <div class="mb-4">
                            <h3 class="mb-3 h6 text-uppercase text-black d-block">Renk</h3>
                            @if(!empty($colors))
                                @foreach($colors as $color)
                                    <a href="#" class="d-flex color-item align-items-center">
                                        <span class="bg-success color d-inline-block rounded-circle mr-2"></span> <span
                                            class="text-black">{{$color}}</span>
                                    </a>
                                @endforeach
                            @endif
                        </div>

                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="site-section site-blocks-2">
                        <div class="row justify-content-center text-center mb-5">
                            <div class="col-md-7 site-section-heading pt-4">
                            </div>
                        </div>
                        <div class="row">
                            @if(!empty($categories))
                                @foreach($categories->where('cat_ust', null) as $category)
                                    <div class="col-sm-6 col-md-6 col-lg-4 mb-4 mb-lg-0" data-aos="fade" data-aos-delay="">
                                       <a class="block-2-item" href="{{route($category->slug)}}">
                                            <figure class="image">
                                                <img src="{{$category->image}}" alt="" class="img-fluid">
                                            </figure>
                                            <div class="text">
                                                <h3>{{$category->name}}</h3>
                                            </div>
                                        </a>
                                    </div>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
            </div>

            @if(!empty($products) && $products->count() > 0)
                <div class="site-section block-3 site-blocks-2 bg-light">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-md-7 site-section-heading text-center pt-4">
                                <h2>Yeni ürünleri keşfedin!</h2>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="nonloop-block-3 owl-carousel">
                                    @foreach($products as $item)
                                        <div class="item">
                                            <div class="block-4 text-center">
                                                <figure class="block-4-image">
                                                    <img src="{{asset($item->image)}}" alt="{{$item->name}}" class="img-fluid">
                                                </figure>
                                                <div class="block-4-text p-4">
                                                    <h3><a href="{{route('urundetay', $item->slug)}}">{{$item->name}}</a></h3>
                                                    <p class="text-primary font-weight-bold">{{$item->price}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                    @endif

    </div>


@endsection
@section('custom.js')
    <script>
        var min_price = "{{$min_price}}"
        var max_price = "{{$max_price}}"
    </script>
@endsection
