<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;
    protected $table='customers';
    protected $primaryKey="ID_CU";
    public $timestamps = false;
    public function order(){
        return $this->hasMany(Order::class,'ID_CU','ID_CU');
    }
    public function contact(){
        return $this->hasMany(Contact::class,'ID_CU','ID_CU');
    }
}