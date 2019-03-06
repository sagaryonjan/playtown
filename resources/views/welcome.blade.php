<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Wannabees Family Play Town</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-6 offset-md-3">
                    <h2 class="text-center mt-5">Wannabees Family Play Town</h2>

                    <!-- Tab panes -->
                    <div class="tab-content" style="height: 460px">
                        <div id="home" class="container tab-pane active">
                            <ul class="list-group">
                                <li class="list-group-item">Phone number : {{ $business->phone_number }}</li>
                                <li class="list-group-item">Website url : {{ $business->website }}</li>
                                <li class="list-group-item">Address : {{ $business->address }}</li>
                            </ul>
                        </div>
                        <div id="menu1" class="container tab-pane fade">
                            <h5 style="color: red;">Opening hours</h5>
                            @if($place_details->status == 'OK')
                                <ul class="list-group">
                                    @foreach($place_details->result->opening_hours->weekday_text as $opening_hour)
                                        <li class="list-group-item">{{ $opening_hour }}</li>
                                    @endforeach
                                </ul>
                            @else
                                <p>Could not load the data. please click <a href="{{ url('/') }}">here</a> or refresh.</p>
                            @endif
                        </div>
                    </div>

                    <!-- Nav pills -->
                    <ul class="nav nav-pills" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" data-toggle="pill" href="#home">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" data-toggle="pill" href="#menu1">Opening Hours</a>
                        </li>
                    </ul>
                </div>
            </div>

        </div>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    </body>
</html>

