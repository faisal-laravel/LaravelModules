<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Plans;

class StripeSubscriptionController extends Controller
{
    public function index() {
        $plans = Plans::get();

        return view('subscriptions.plans', compact('plans'));
    }
}
