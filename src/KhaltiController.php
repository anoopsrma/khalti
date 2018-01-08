<?php

namespace Anoop\Khalti;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests;
use Carbon\Carbon;
use DB;

class KhaltiController extends Controller
{
    public function showPurchaseForm()
    {
    	return view('khalti::index');
    }

    public function transactionVerification(Request $request)
    {
    	$data = [
    		'user_id' 	=> $request->input('user_id'),
    		'mobile' 	=> $request->input('mobile'),
    		'amount' 	=> $request->input('amount'),
    		'pre_token' => $request->input('pre_token'),
    		'created_at'=> Carbon::now()
    	];

    	//before verification for reference purposes 
    	$khalti = $this->khalti->create($data);
    }

    public function subtract($a, $b)
    {
    	return ($a - $b);
    }
}
