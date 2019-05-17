<!doctype html>
<html>
	<head>
		<title>Add a new blog</title>
	</head>
	<body>
		<h2>Add a new blog</h2>
		<form method="POST" action="{{url('blog/add')}}">
			@csrf
			Title: <input type="text" name="title"/><br><br>
			Body: <textarea name="body"></textarea> <br><br>
			<input type="Submit" name="submit" value="Go"/>
		</form>
	</body>
</html>
