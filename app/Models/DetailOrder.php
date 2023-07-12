<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailOrder extends Model
{
    use HasFactory;
    protected $table = 'detail_orders';
    protected $primaryKey = "ID_DETAIL";
    public $timestamps = false;
    public function order()
    {
        return $this->belongsTo(Order::class, 'ID_ORDER', 'ID_ORDER');
    }
}