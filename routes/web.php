<?php

use Illuminate\Support\Facades\Route;
use Pusher\Pusher;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('test', function () {
    // event(new App\Events\NotificationEvent(Auth::user()));
    // return "Event has been sent!";
		$options = array(
		    'cluster' => 'ap2',
		    'useTLS' => true
		 );

         $pusher = new Pusher(
		 env('PUSHER_APP_KEY'),
		 env('PUSHER_APP_SECRET'),
		 env('PUSHER_APP_ID'), 
		  $options
		 );
		 
		        $data = Auth::user()->name." Send You a Notification";
		        $pusher->trigger('notification-send', 'App\\Events\\NotificationEvent',$data);
				return "Event has been sent!";
		        // return redirect()->back();

});

require __DIR__.'/auth.php';
