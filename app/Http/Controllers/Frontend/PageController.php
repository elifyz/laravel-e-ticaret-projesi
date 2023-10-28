<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Middleware\SiteSettingMiddleware;
use App\Http\Controllers\Controller;
use App\Http\Controllers\Frontend\PageHomeController;
use App\Models\About;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function hakkimizda(){
        $about = About::where('id','1')->first();
        return view('front/pages/about',compact('about'));
    }
    public function iletisim(){
        return view('front/pages/contact');
    }


    public function indirimliurunler(){
        return view('front/pages/products');
    }

    public function urundetay($slug){
        $product = Product::where('slug', $slug)->where('status','1')->firstOrFail();

        $products = Product::where('id','!=', $product->id)
            ->where('category_id', $product->category_id)
            ->where('status','1')->limit(3)->get();

        return view('front/pages/productDetail',compact('product','products'));
    }


    public function urunler(Request $request, $slug=null){
        $category = request()->segment(1) ?? null;
        $size = $request->size ?? null;
        $color = $request->color ?? null;
        $start_price = $request->start_price ?? null;
        $end_price = $request->end_price ?? null;
        $order = $request->order ?? 'id';
        $sort = $request->sort ?? 'desc';

        $products = Product::where('status', '1')->select(['id','name','slug','size','color','price','category_id','image'])
            ->where(function ($q) use($size,$color,$end_price,$start_price) {
                if(!empty($size)){
                    $q->where('size',$size);
                }
                if(!empty($color)){
                     $q->where('color',$color);
                }
                if(!empty($start_price) && ($end_price)){
                     $q->whereBetween('price',[$start_price, $end_price]);
                  }
                return $q;
            })

            ->with('category:id,name,slug')

            ->whereHas('category', function ($q) use ($category,$slug){
                if(!empty($slug)){
                    $q->where('slug',$slug);
                }
                return $q;

            });

        $min_price = $products->min('price');
        $max_price = $products->max('price');

        $size_list = Product::where('status', '1')->groupBy('size')->pluck('size')->toArray() ;

        $colors = Product::where('status', '1')->groupBy('color')->pluck('color')->toArray() ;

        $products = Product::where('status', '1')->orderBy($order,$sort)->paginate(6);



        return view('front/pages/products',compact('products','max_price','min_price','size_list','colors'));
    }












}
