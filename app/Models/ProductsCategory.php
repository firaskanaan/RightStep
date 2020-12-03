<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsCategory extends Model
{
    use HasFactory;

    protected $fillable=[
        'product_id',
        'category_id'
        ];

    protected $with=[
        'category'
    ];
    public function category(){
        return $this->belongsTo(Category::class);
    }
}
