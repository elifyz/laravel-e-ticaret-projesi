<?php

namespace App\Models;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use Sluggable ;
    protected $fillable = [
        'name',
        'slug',
        'category_id',
        'content',
        'image',
        'price',
        'size',
        'color',
        'qty',
        'status',
    ];

    public function category(){
       return $this->hasOne(Category::class,'id','category_id');
    }

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }

}
