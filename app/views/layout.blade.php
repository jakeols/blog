<!DOCTYPE html>
<html>
<head>
    {{ HTML::style('css/bootstrap.css'); }}
    {{ HTML::style('css/custom.css'); }}
</head>
<body>
        <nav class="nav navbar-inverse" role="navigation">
            <ul class="nav navbar-nav pull-right">
                <li> {{ link_to('/', 'Home'); }} </li>
            </ul>
        </nav>
<div class="container">
<h1 class="text" id="header"> Blog </h1>
    @yield('posts')
    {{ $posts->links(); }}

    </div>
</body>
</html>