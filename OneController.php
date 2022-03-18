<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use App\Models\Product;
use App\Models\Order;

class OneController extends Controller
{
    //
    public function hasone()
    {
        $suppliers = Supplier::find(1); 
        $supplier_one = $suppliers->orders;
        //dd($supplier_one);

        $suppliers = Supplier::find(2); 
        $supplier_two = $suppliers->orders;

        return view('index',compact('supplier_one','supplier_two'));

    }
}