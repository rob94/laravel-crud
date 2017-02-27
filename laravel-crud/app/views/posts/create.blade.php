{{ Form::open(array('url' => 'posts')) }}
	{{Form::label('titulo')}}<br/>
	{{Form::text('title')}}<br/><br/>
	{{Form::label('contenido')}}<br/>
	{{Form::textArea('content')}}<br/><br/>
	{{Form::submit('Guardar')}}
{{ Form::close() }}
