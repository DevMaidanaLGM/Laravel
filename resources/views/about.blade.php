@extends('layout')

@section('title', 'About')

@section('content')



	<div class="container">

		<div class="row">

			<div class="col-12 col-lg-6">


		<h1 class="display-4 text-primary">@lang('About')</h1>
		<p class="lead text-secondary">
			Hola, soy Leonardo, mucho gusto de conocerte!
		</p>
		<p class="lead text-secondary">
			Tengo 24 años y soy un recién graduado de la carrera
			de Analista Programador Universitario de una Facultad de Ingeniería
			 en Argentina. Me encuentro constanstemente aprendiendo
			nuevos lenguajes y usando nuevas tecnologías para poder ser un mejor
			desarrollador y buscar nuevas oportunidades.
		</p>
		<p class="lead text-secondary">
			Mi entendimiento del
			inglés es bastante bueno, así que puedes comunicarte conmigo tanto en
			español como en inglés.
		</p>





		</p>
	<a class="my-1 btn btn-lg w-100 btn-block btn-primary"
	href="{{route('contact')}}"
	>
	@lang('Contact Me')
	</a>
	<a  class="my-1 btn btn-lg btn-block w-100 btn-outline-primary"
	href="{{route ('projects.index')}}">
		@lang('Portfolio')
	</a>

	{{-- @auth
	{{auth()->user()->name}}
	@endauth --}}
			</div>
			<div class="col-12 col-lg-6 d-flex">
				<img class="img-fluid mb-4"src="/img/about.svg" alt="">
			</div>
		</div>
	</div>

@endsection
