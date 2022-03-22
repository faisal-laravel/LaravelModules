<?php

namespace App\Http\Controllers\Subscriptions;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Plan;
use Auth;
use Carbon\Carbon;

class PaymentController extends Controller
{
        public function index() {
	        $data = [
	            'intent' => auth()->user()->createSetupIntent()
	        ];

	        return view('subscriptions.payment')->with($data);
	    }

	   public function store(Request $request) {
        $this->validate($request, [
            'token' => 'required'
        ]);

        $plan = Plan::where('identifier', $request->plan)
            ->orWhere('identifier', 'basic')
            ->first();
        
        $subscription=$request->user()->newSubscription('default', $plan->stripe_id)->create($request->token);

        return back();
    }
    public function cancelSubscription(Request $request)
    {
        $user=Auth::user();
  
        // Set your secret key. Remember to switch to your live secret key in production.
        // See your keys here: https://dashboard.stripe.com/apikeys
        \Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));

        $subscription = \Stripe\Subscription::retrieve('sub_1KagGbCtFNoUhYp4yjleNMD0');
       

        if ( $subscription ) {
          $invoice = $user->invoices()[0];
          
          $userRefundAmount=$user->refund($invoice->charge);
          $sub=$subscription->cancel();
        }
        dd($userRefundAmount);
    }
}
