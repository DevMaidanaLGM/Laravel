@extends('layout')

@section('title', 'Home')

@section('content')
<div class="container">

	<div class="row">

		<div class="col-12 col-lg-6">


	<h1 class="display-4 text-primary">@lang('Web Development')</h1>
	<p class="lead text-secondary my-0">
		Bienvenido a mi proyecto realizado con laravel utilizando una arquitectura
		REST. Este proyecto consiste en: el ingreso al sistema a través de usuarios
		gestión de un portafolio, mi información de contacto y un
		manejador de emails</p>
	<p class="lead text-secondary my-2 mb-0">
		¿Que usé durante la realización de este proyecto?
		A continuación te dejo un listado de todas las tecnologías/herramientas
		que utilicé durante la realización de este proyecto
	</p>
<div class="mb-3">


	<label class="rounded-gradient-label">Laragon</label>
	<label class="rounded-gradient-label">PHP 7.4.10</label>
	<label class="rounded-gradient-label">Symphony</label>
	<label class="rounded-gradient-label">CSS</label>
	<label class="rounded-gradient-label">Bootstrap 5.1</label>
	<label class="rounded-gradient-label">npm</label>
	<label class="rounded-gradient-label">Composer</label>
	<label class="rounded-gradient-label">Laravel</label>

</div>


<a class="my-2 btn btn-lg w-100 btn-block btn-primary"
href="{{route('contact')}}"
>
@lang('Contact Me')
</a>
<a  class="my-0 btn btn-lg btn-block w-100 btn-outline-primary"
href="{{route ('projects.index')}}">
	@lang('Portfolio')
</a>


		</div>
		<div class="col-12 col-lg-6 d-flex">
			<img class="img-fluid mb-4"src="/img/home.svg" alt="">
		</div>
	</div>
</div>
@endsection
