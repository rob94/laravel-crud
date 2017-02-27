<style>
		@import url(//fonts.googleapis.com/css?family=Lato:700);

		body {
			margin:0;
			font-family:'Lato', sans-serif;
			text-align:center;
			color: #999;
		}

		.welcome {
			width: 300px;
			height: 200px;
			position: absolute;
			left: 50%;
			top: 50%;
			margin-left: -150px;
			margin-top: -100px;
		}

		a, a:visited {
			text-decoration:none;
		}

		h1 {
			font-size: 32px;
			margin: 16px 0 0 0;
		}
	</style>
{{ Form::open(array('url' => 'posts/'.$post->id,'method'=>'put')) }}
		{{Form::label('titulo')}}<br/>
	    {{Form::text('title',$post->title)}}<br/><br/>
	    {{Form::label('contenido')}}<br/>
	    {{Form::textArea('content',$post->content)}}<br/><br/>
	    {{Form::submit('Guardar')}}
{{ Form::close() }}
