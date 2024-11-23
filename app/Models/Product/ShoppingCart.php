<?php

namespace App\Models\Product;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{
    use HasFactory;

    protected $table = 'shopping_carts';

    protected $fillable = [
        'products_id','user_id','qty','ischeckout'
    ];

    public function product()
    {
        return $this->belongsTo(Product::class, 'products_id','id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id','user_id');
    }
}
