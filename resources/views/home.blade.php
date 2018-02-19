@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-xs-12 col-md-offset-2" id="app">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    You are logged in!

                    <br>


            <upload-form :user="{{ auth()->user()}}"></upload-form>

        


                </div>
            </div>
        </div>
    </div>
</div>
@endsection
