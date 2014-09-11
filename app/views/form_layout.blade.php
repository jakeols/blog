<!DOCTYPE html>
<html>
<head>
	{{ HTML::style('css/bootstrap.min.css'); }}
    {{ HTML::style('css/custom.css'); }}
</head>
<body>
<div class="container">
    <h1 class="text">New Blog Post</h1>
   @yield('form')
    </div>
    
</body>
</html>