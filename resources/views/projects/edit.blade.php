@extends('layout')
@section('title', 'Editar Proyecto')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col-12 col-sm-10 col-lg-6 mx-auto">



	<h1 class="display-4">Editar proyecto</h1>
<hr>
@include('partials.validation-errors')

  <form method="POST" action="{{ route('projects.update', $project)}}">

  @method('PATCH')

  @include('projects._form', ['btnText' => 'Guardar'])

  </form>

		</div>
	</div>
</div>
@endsection
