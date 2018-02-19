<!DOCTYPE html>
<html>
<head>
	<title>Crop Image </title>
	<meta name="csrf-token" content="{{ csrf_token() }}">
	<link rel="stylesheet" type="text/css" href="{{asset('css/app.css')}}">
</head>
<body>
<div id="app">
	<br>
	<div class="container col-lg-offset-4 col-lg-4">
		<div class="row">

			@if(count($errors))
			@foreach($errors->all() as $error)
			<span class="text-danger">{{$error}}</span>
			@endforeach
			@endif

			<form action="{{url('upload')}}" enctype="multipart/form-data" method="post">
				{{csrf_field()}}

				<input type="file" name="image">
				<img src="/storage/ibrahim.jpg" alt="Ibrahim">
				<input type="submit" value="Upload..." class="btn btn-success" name="">
			</form>
		</div>
	</div>
</div>
</body>
<script src="{{asset('js/app.js')}}"></script>
</html>