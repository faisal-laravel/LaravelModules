@extends('layouts.app')


@section('content')
<meta name="csrf-token" content="{{ csrf_token() }}">
<div class="container">
    <div class="row">
        <div class="col-md-12 col-12 text-center">
            <h4>You are logged in {{Auth::user()->name}}</h4>
            <br>
            <a href="{{url('/test')}}" class="btn btn-success">Send Notification</a>
        </div>
        
    </div>
</div>



 <script src="https://js.pusher.com/4.1/pusher.min.js"></script>


          <script>

            Pusher.logToConsole = true
           var pusher = new Pusher('756c79287a8669fa7abe', {
              cluster: 'ap2',
              encrypted: true
            });
         
            var channel = pusher.subscribe('notification-send');
            channel.bind('App\\Events\\NotificationEvent', function(data) {
              console.log('i am here and its reall time')
              alert(data);
              
              
            });
          </script>
@endsection
@section('js')

@endsection




