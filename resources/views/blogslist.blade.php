<html>

	<head>
		<title>لیست بلاگ‌ها</title>
	</head>
	<body dir="rtl">
		<h1>بلاگ‌ها</h1>
		<ul>
			@foreach ( $x as $key=>$value )
				<li>{{$value}}</li>
			@endforeach
		</ul>
	</body>

</html>
