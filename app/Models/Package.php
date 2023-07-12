<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Package extends Model
{
    use HasFactory;
    protected $table='packages';
    protected $primaryKey="ID_PACK";
    public $timestamps = false;
    public function ticket(){
        return $this->hasMany(Ticket::class,'ID_PACK','ID_PACK');
    }
}