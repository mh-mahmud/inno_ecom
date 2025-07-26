<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;

    protected $table = 'orders';

    protected $fillable = [
            'user_id',
            'session_id',
            'billing_address_id',
            'custom_order_id',
            'order_phone_number',
            'total_price',
            'discount',
            'final_price',
            'coupon',
            'payment_status',
            'payment_type',
            'pay_amount',
            'delivery_charge',
            'delivery_status',
            'order_note',
            'delivery_note',
            'order_status',
            'cancel_reason',
            'possible_delivery_date',
            'delivery_date',
            'cancel_date',
            'sms_response',
    ];

   
    /*public function setTotalPriceAttribute()
    {
        $this->attributes['total_price'] = $this->attributes['unit_price'] * $this->attributes['quantity'];
    }*/
}
