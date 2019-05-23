<!doctype html>
<html>
	<head>
		<title>Edit blog</title>
	</head>
	<body>
		<h2>Edit blog</h2>
			<form method="POST" action="{{ url('blog/edit', $data['id']) }}">
				@csrf
				Title: <input type="text" name="title" value="{{$data['title']}}" /><br><br>
				Body: <textarea name="body">{{$data['body']}}</textarea> <br><br>
				<input type="Submit" name="submit" value="Edit"/>
			</form>
	</body>
</html>
