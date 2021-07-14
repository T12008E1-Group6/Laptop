<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Route;
use Validator, Redirect;
use Illuminate\Support\Facades\Auth;
use Session;
use Illuminate\Support\Facades\Input;
use Illuminate\Http\Request;
use App\product;

class SearchController extends Controller
{
    //
    public function search(Request $request){
        $search = $request->query('search');
        if($search){
            $products = product::where('product_name', "LIKE","%{$search}%")->get();
            return view('test',[
                'products' => $products
            ]);
        }else{
            $products = product::simplePaginate(4);
        }
        

    }
}
