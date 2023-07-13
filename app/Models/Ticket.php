<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;
    protected $table = 'tickets';
    protected $primaryKey = "ID_TICKET";
    public $timestamps = false;
    public function package()
    {
        return $this->belongsTo(Package::class, 'ID_PACK', 'ID_PACK');
    }
    public function event()
    {
        return $this->belongsTo(Package::class, 'ID_EVEN', 'ID_EVEN');
    }
    public function order()
    {
        return $this->hasMany(Order::class, 'ID_TICKET', 'ID_TICKET');
    }
}
