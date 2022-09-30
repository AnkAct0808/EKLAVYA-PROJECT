<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    use HasFactory;
    protected $fillable =[

        'id','invoicenumber','orderdate','orderstatus','paidamount','totalamount','paymentstatus','updated_at','created_at',	

    ];
}
