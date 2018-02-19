
<!DOCTYPE html>
<html>
<head>
		<meta name="csrf-token" content="{{ csrf_token() }}">

	<title>Search Result</title>
</head>
<body>

    <form action="{{url('search')}}" method="GET">
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        <input type="text" name="text">
        <input type="submit" name="" value="Search">

    </form>
	                                <div>
                                    <h1>Result</h1>
                    @foreach($page as $result)
                    <p>{{$result->video_title}}</p>
                    @endforeach
                </div>
                {{$page->setpath('/search?text='.$text)->render()}}
            </div>

</body>
</html>