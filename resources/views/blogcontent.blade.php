<html>

	<head>
		<title>محتوای بلاگ</title>
	</head>
	<body dir="rtl">
		@foreach ( $data as $key=>$value ) 
		<h1> {{$value->title}} </h1>
		<p>
			{{$value->body}}
		</p>
		@endforeach
	</body>

</html>
