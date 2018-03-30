<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Stock extends Model
{
    protected $table = 'stock';
    public $timestamps = true;

    protected $primaryKey = 'stock_id';
    protected $fillable = [
        'stock_product_id',
        'stock_product_color_base',
        'stock_product_package',
        'stock_product_qty',
    ];
}
