<?php

namespace Anoop\Khalti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;

class KhaltiController extends Controller
{
    public function showPurchaseForm(){
    	return view('khalti::index');
    }

    public function subtract($a, $b){
    	return ($a - $b);
    }
}
