<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    use HasFactory;


    public function orders(){

        return $this ->hasOneThrough(

            Order::class,
            Product::class,
            'supplier_id', //foreign key on products table
            'product_id', //foreign key on orders table
            'id', //local key on suppliers table
            'id' //local key on products table
        );
    }
}
