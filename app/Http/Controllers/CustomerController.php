<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// models
use App\Customer;
use App\Orders;
use App\Users;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $customer = Customer::orderBy('id')->paginate(10);
        
        return view('customer.index', compact('customer'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function top()
    {
        $customer = Users::join('orders','users.id','=','orders.customer_id')->select('users.id','users.first_name','users.last_name','orders.customer_id',
        Orders::raw('count(orders.customer_id) as total'))->groupBy('users.id','orders.customer_id','users.first_name','users.last_name')
        ->orderBy('total','desc')->limit(10)->get();
       
        return view('customer.top', compact('customer'));
    }

}
