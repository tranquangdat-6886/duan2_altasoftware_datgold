<?php

namespace App\Models;

use Illuminate\Database\DBAL\TimestampType;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    use HasFactory;
    protected $table = 'events';
    protected $primaryKey = "ID_EVEN";
    public $timestamps = false;
    public function ticket()
    {
        return $this->hasMany(Ticket::class, 'ID_EVEN', 'ID_EVEN');
    }
}
