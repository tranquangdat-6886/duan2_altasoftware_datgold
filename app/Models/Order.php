<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $table = 'orders';
    protected $primaryKey = "ID_ORDER";
    public $timestamps = false;
    public function ticket()
    {
        return $this->belongsTo(Ticket::class, 'ID_TICKET', 'ID_TICKET');
    }
    public function customer()
    {
        return $this->belongsTo(Customer::class, 'ID_CU', 'ID_CU');
    }
    public function detail()
    {
        return $this->hasMany(DetailOrder::class, 'ID_ORDER', 'ID_ORDER');
    }
}