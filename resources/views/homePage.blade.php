<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Trains</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <h1 class="heading">Treni in partenza oggi</h1>

    <main>
        <div class="d-flex boxed">
            @foreach ($trains as $train)
                <div class="train-card">
                    <div class="train-info">
                        <div class="agency">
                            <h3 class="head">Azienda:</h3>
                            <p class="body">{{$train->agency}}</p>
                        </div>
                        <div class="departure-station">
                            <h3 class="head">Stazione di partenza:</h3>
                            <p class="body">{{$train->departure_station}}</p>
                        </div>
                        <div class="arrival_station">
                            <h3 class="head">Stazione di Arrivo:</h3>
                            <p class="body">{{$train->arrival_station}}</p>
                        </div>
                        <div class="departure-time">
                            <h3 class="head">Orario di partenza:</h3>
                            <p class="body">{{$train->departure_time}}</p>
                        </div>
                        <div class="arrival-time">
                            <h3 class="head">Orario di arrivo:</h3>
                            <p class="body">{{$train->arrival_time}}</p>
                        </div>
                        <div class="carriages">
                            <h3 class="head">Numero di carrozze:</h3>
                            <p class="body">{{$train->n_of_carriages}}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </main>
</body>
</html>