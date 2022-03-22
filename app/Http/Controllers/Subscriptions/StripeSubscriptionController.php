<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Auth;
class StripeSubscriptionController extends Controller
{
    public function index() {
    	$user=Auth::user();
        $plans = Plan::all();
       // activity()->log('Look mum, I logged something');
        $user->syncRoles(3);
        // dd($user->getAllPermissions());

		
        return view('subscriptions.plans', compact('plans'));
    }




}
