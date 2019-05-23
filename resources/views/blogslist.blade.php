<html>

	<head>
		<title>لیست بلاگ‌ها</title>
	</head>
	<body>
		<h1>بلاگ‌ها</h1>
		<ul>
			@foreach ( $data as $key=>$value ) 
				<li>
				<a href="blog/post/{{$value->id}}">{{$value->title}}</a>
				<a href="blog/edit/{{$value->id}}">Edit</a>
				</li>
			@endforeach
		</ul>
	</body>

</html>
