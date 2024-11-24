<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    use HasFactory;
    protected $table = 'order_details';
    protected $primaryKey = 'detail_id';
    protected $fillable = [
        'order_id', 
        'product_id', 
        'product_code', 
        'product_name', 
        'product_color', 
        'product_size', 
        'unit_price', 
        'mprize', 
        'quantity', 
        'total_price'
    ];

    public $timestamps = true;

    public function orderInfo()
    {
        return $this->belongsTo(OrderInfo::class, 'order_id', 'order_id');
    }

    public function product()
    {
        return $this->belongsTo(Product::class, 'product_id', 'id');
    }
}
