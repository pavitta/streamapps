<?php

namespace App\Models\Product;

use App\Models\Category\Category;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    protected $fillable = [
        'categories_id','name','price','image'
    ];

    public function category()
    {
        return $this->belongsTo(Category::class, 'categories_id','id');
    }
}
