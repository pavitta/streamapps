<?php

namespace App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    protected $table = 'transactions';

    protected $fillable = [
        'shoppingcart_id','expire_time','start_time','status'
    ];

    public function cart()
    {
        return $this->belongsTo(ShoppingCart::class, 'shoppingcart_id','id');
    }
}
