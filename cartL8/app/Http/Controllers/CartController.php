<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Models\Product; 
use App\Models\Category;
use App\Models\myCart;
Use Session;
Use Auth;//get user login id

class CartController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
        
    }

    public function add(){ 

        $r=request(); 
        $addCategory=myCart::create([    
            
            'quantity'=>$r->quantity,             
            'orderID'=>'',
            'productID'=>$r->id,                 
            'userID'=>Auth::id(), 
                        
        ]);
        Session::flash('success',"Product add succesful!");        
        Return redirect()->route('clientProductView');
    }
}
