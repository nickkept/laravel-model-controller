<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewpophp artisan preset:ui bootstraprt" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Model Controller</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container">
        <h1 class="text-center text-danger py-4">Movies</h1>
        {{-- @dump($movies) --}}
        <div class="row gap-3 align-items-center justify-content-center py-2">
            @foreach ($movies as $movie )
            <div class="card col-4">
                <div class="card-body">
                    <h5 class="card-title">{{$movie['title']}}</h5>
                    <h6 class="card-subtitle">Original Title: {{$movie['original_title']}}</h6>
                    <p class="card-text">Nationality: {{$movie['nationality']}}</p>
                    <p class="card-text">Date: {{$movie['date']}}</p>
                    <p class="card-text">Vote: {{$movie['vote']}}</p>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</body>
</html>