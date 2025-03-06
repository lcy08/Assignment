<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsList extends Model
{
    //
    use HasFactory;
    protected $table = 'products_list';
    protected $fillable = [
        'name',
        'buy_price',
        'sell_price',
        'stock',
        'category',
        'image',];
}



