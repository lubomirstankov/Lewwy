<!DOCTYPE html>
<html>
<head>
	<title>Hello</title>
</head>
<body>
@foreach ($posts as $post)
<h1>{{$post->PostTitle}}</h1>
@endforeach
</body>
</html>