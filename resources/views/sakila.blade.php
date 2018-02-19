<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">


    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">

        <!-- Styles -->
        <style>
   
        </style>
    </head>
    <body>


                <div class="container" id="app">
                    <div class="row">
                        <div class="col-xs-12">
                            <label for="film">Films</label>
                            <br>
                        <select 
                        id="film" 
                        class="form-control" 
                        v-bind:disabled="disableWhenSelect"
                        v-model="film"
                        @change="GetFilm()"

                        >
                                <option value="">Film</option>
                                @foreach($film as $singleFilm)
                                <option value="{{$singleFilm->film_id}}">{{$singleFilm->title}}</option>
                                @endforeach
                            </select>


              
                            <div class="col-xs-4" v-show="actorShow" v-for="act in actros">
                                <div class="well">
                                    <h3>@{{act.first_name}}</h3>
                                    <small>@{{act.last_name}}</small>
                                    <span>@{{act.last_update}}</span>
                                </div>
                            </div>

                            <div class="alert alert-danger" v-show="!actorShow">
                                There Are no Actors here...
                            </div>
                        </div>
                    </div>
                    
                </div>
    
        <script src="{{asset('js/app.js')}}"></script>

    </body>
</html>
