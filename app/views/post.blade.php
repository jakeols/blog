<!DOCTYPE html>
<html>
<head>
    {{ HTML::style('css/bootstrap.css'); }}
    {{ HTML::style('css/custom.css'); }}
</head>
<body>
<div class="container">
@foreach($posts as $post)
<h1>{{ $post->title; }}</h1>
<p>{{ $post->body; }}</p>
@endforeach
</div>
</body>
</html>
