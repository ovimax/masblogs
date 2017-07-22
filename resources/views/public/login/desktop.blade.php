@extends ('layouts.public')

@section('title') Login @endsection

@section ('CSScontent')@endsection

@section ('content')

	<div class="container">
		{!! Form::open(['route'=>'login-post']) !!}
		<div class="row">
			<div class="col-sm-5">
				{!! Form::text('username','',['class'=>'form-control']) !!}
			</div>
			<div class="col-sm-5">
				{!! Form::text('password','',['class'=>'form-control']) !!}
			</div>
			<div class="col-sm-2">
				{!! Form::submit('Enviar',['class'=>'btn btn-primary']) !!}
			</div>
		</div>
		{!! Form::close() !!}
	</div>
    
@endsection

@section ('JScontent')@endsection