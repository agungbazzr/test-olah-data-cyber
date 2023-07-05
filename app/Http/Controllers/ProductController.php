<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// models
use App\Product;
use App\Order_detail;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $product = Product::orderBy('product_name')->paginate(10);
        
        return view('product.index', compact('product'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function top()
    {
        $product = Product::leftjoin('order_detail','product.id','=','order_detail.product_id')->select('product.id','product.product_name','order_detail.product_id',
        Order_detail::raw('SUM(order_detail.qty) as total'))->groupBy('product.id','order_detail.product_id','product.product_name')
   ->orderBy('total','desc')
   ->limit(10)
   ->get();
        
        return view('product.top', compact('product'));
    }
    
}
