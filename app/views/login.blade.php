<head>
  {{ HTML::style('css/bootstrap.css') }}
</head>

<body>
<div class="container">
  <h1> Login </h1>
{{ Form::open(array('route' => 'sessions.store')) }}
{{ Form::text('username', null, array('class' => 'form-control', 'placeholder' => 'Username')) }}<br>
{{ Form::password('password', array('class' => 'form-control', 'placeholder' => 'Password'))}}<br>
{{ Form::submit('Login', array('class' => 'btn btn-main'))}}
{{ Form::close() }}
</div>
</body>
