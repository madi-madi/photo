@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Vue Avatar Editor</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br>

                    <div id="app">
    <br>
    <div class="container col-lg-offset-4 col-lg-4">
        <div class="row">

            @if(count($errors))
            @foreach($errors->all() as $error)
            <span class="text-danger">{{$error}}</span>
            @endforeach
            @endif
<custom-avatar></custom-avatar>
        </div>
    </div>
</div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
