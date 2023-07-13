<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;
    protected $table = 'detail_contacts';
    protected $primaryKey = "ID_CONTAC";
    public $timestamps = false;

    public function customer()
    {
        return $this->belongsTo(Customer::class, 'ID_CU', 'ID_CU');
    }
}