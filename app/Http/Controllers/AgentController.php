<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

// models
use App\AgentModel;
use App\Customer;

class AgentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agent = AgentModel::orderBy('store_name')->paginate(10);
        
        return view('agent.index', compact('agent'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function top()
    {
        $agent = AgentModel::join('customer','agent.id','=','customer.referral_id')->select('agent.id','agent.store_name','customer.referral_id',
        Customer::raw('count(customer.referral_id) as total'))->groupBy('agent.id','customer.referral_id','agent.store_name')
        ->orderBy('total','desc')->limit(10)->get();
       
        return view('agent.top', compact('agent'));
    }

}
