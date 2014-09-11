<!DOCTYPE html>
<html>
<head>
    {{ HTML::style('css/bootstrap.css'); }}
</head>
<body>
    
</body>
</html>
<div class="container">
@foreach($posts as $post)
{{ $post->title; }}
{{ $post->body; }}
@endforeach
</div>
