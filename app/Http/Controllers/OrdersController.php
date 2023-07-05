<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// models
use App\Orders;
use App\Order_detail;
class OrdersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(request $query)
    {
        if(isset($_GET['q'])){
            $orders = Orders::where('name','LIKE' ,'%'.$query->q.'%')->orWhere('invoice_id','LIKE' ,'%'.$query->q.'%')->orWhere('customer_id','LIKE' ,'%'.$query->q.'%')->orderBy('name')->paginate(10);
            $orders->appends($query->all());
        }
        elseif(isset($_GET['before'])){
            $before = date($query->before);
            $after = date($query->after);
            $orders = Orders::whereBetween('delivery_date',[$after,$before])->orderBy('name')->paginate(10);
            $orders->appends($query->all());
        }else{
            $orders = Orders::orderBy('order_time')->paginate(10);
        }
        return view('orders.index', compact('orders'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function detail($id)
    {
        $orders = Order_detail::where('order_id','=',$id)->paginate(10);
        
        return view('orders.detail', compact('orders'));
    }

}
