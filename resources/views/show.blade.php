<html>

	<head>
		<title>کاربران</title>
	</head>
	<body dir="rtl">
		<h1>کاربران</h1>
		<table border="1px">
			<tr>
				<td>ردیف</td>
				<td>نام</td>
				<td>نام خانوادگی</td>
				<td>سن</td>
			</tr>
			@foreach ( $x as $key=>$val )
				<tr>
					<td> {{$key+1}}</td>
					@foreach ( $val as $field )
						<td>{{$field}}</td>
					@endforeach
				</tr>
			@endforeach
{{--			@foreach( $x as $user )--}}
{{--				@foreach ( $user as $field )--}}
{{--					{{ $field }}--}}
{{--				@endforeach--}}
{{--			@endforeach--}}
		</table>
	</body>

</html>
