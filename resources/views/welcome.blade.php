<!DOCTYPE html>
<html>
<head>
    <title>Home</title>
</head>
<link href="{{ asset('css/app.css') }}" rel="stylesheet">
<body>
	<div class="container">
		{!! Form::open(['method' => 'POST', 'url' => 'routeName']) !!}

		    <div class="form-group{{ $errors->has('bitcoin') ? ' has-error' : '' }}">
		        {!! Form::label('bitcoin', 'Bitcoin') !!}
		        {!! Form::number('bitcoin', null, ['class' => 'form-control', 'required' => 'required', 'id' => 'bitcoin']) !!}
		        <small class="text-danger">{{ $errors->first('bitcoin') }}</small>
		    </div>

		    <div class="form-group{{ $errors->has('price') ? ' has-error' : '' }}">
		        {!! Form::label('price', 'Price') !!}
		        {!! Form::number('price', null, ['class' => 'form-control', 'required' => 'required', 'id' => 'price']) !!}
		        <small class="text-danger">{{ $errors->first('price') }}</small>
		    </div>

		    <div class="form-group{{ $errors->has('output') ? ' has-error' : '' }}">
		        {!! Form::label('output', 'Output') !!}
		        {!! Form::text('output', null, ['class' => 'form-control', 'required' => 'required', 'id' => 'output', 'disabled']) !!}
		        <small class="text-danger">{{ $errors->first('output') }}</small>
		    </div>

		    <div class="btn-group pull-right">
		        {!! Form::submit("Submit", ['class' => 'btn btn-success']) !!}
		    </div>

		{!! Form::close() !!}
	</div>

<!-- Scripts -->
    <script src="{{ asset('js/app.js') }}"></script>
    <script type="text/javascript">

		$("#bitcoin,#price").keyup(function () {

		    $('#output').val($('#bitcoin').val() * $('#price').val());

		});

    </script>
</body>
</html>