<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{$user->name}}</title>

        <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    <link href={{asset('bootstrap/css/bootstrap.min.css')}} rel="stylesheet" />

    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-12 my-3 pt-3 shadow">
                <img src="{{$user->image->url}}" class="float-left rounded-circle mr-2">
                    <h1>{{$user->name}}</h1>
                    <h3>{{$user->email}}</h3>
                    <p>
                        <strong>Instagram: </strong> {{$user->profile->instagram}} <br>
                        <strong>Github: </strong> {{$user->profile->github}} <br>
                        <strong>Web: </strong> {{$user->profile->web}}

                    </p>
                    <p>
                        <strong>País: </strong> {{$user->location->country}}<br>
                        <strong>Nivel: </strong> 
                            @if ($user->leve) 
                                <a href="#">{{$user->level->name}}</a>
                            @else  
                                ---
                            @endif <br>
                    </p>
                    <hr>
                    <p>
                        <strong>Grupos: </strong>
                        @foreach ($user->groups as $group)
                            <span class="badge badge-primary"> {{$group->name}}</span>
                        @endforeach
                    </p>
                    <hr>
                    
                </div>
            </div>
        </div>
    </body>
</html>
