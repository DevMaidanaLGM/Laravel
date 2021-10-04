@extends('layout')
@section('title', 'Contact')


@section('content')

<div class="container">

<div class="row">
	<div class="col-12 col-sm-10 col-lg-6 mx-auto">


			{{-- Se crea un formulario de contacto --}}
			<form class="bg-white shadow rounded py-3 px-4"
				method="POST"
				action="{{route ('messages.store')}}">

					<h1 class="display-4">{{__('Contact')}}</h1>
					<hr>
						@csrf

						{{-- El old antes del name es para evitar que el usuario tenga que volver a
						ingresar el dato nuevamente --}}
						<div class="form-group my-3">

							<label for="name">@lang('Name')</label>
							<input class="form-control bg-light shadow-sm
								@error('name') is-invalid @else border-0 @enderror"
								name="name"
								placeholder="Nombre..."
								value = "{{old('name')}}">

							@error ('name')
									<span class="invalid-feedback" role="alert">
										<strong>{{$message}}</strong>
									</span>
							@enderror
				{{-- Estas lineas son para mostrar una etiqueta con el error --}}


							</div>

							<div class="form-group my-3">
								<label for="email">@lang('Email')</label>
								<input class="form-control bg-light shadow-sm
								@error ('email') is-invalid @else border-0 @enderror"

								type="text"
								name="email"
								placeholder="Email..."
								value ="{{old('email')}}">

								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong> {{$message}}</strong>
									</span>
								@enderror


							</div>

							<div class= "form-group my-3">
								<label for="subject">@lang('Subject')</label>
								<input class="form-control bg-light shadow-sm
								@error('subject') is-invalid @else border-0 @enderror"
								name="subject"
								placeholder="Asunto..."
								value="" {{old('subject')}}>

								@error('subject')
									<span class="invalid-feedback" role="alert">
										<strong> {{$message}}</strong>
									</span>
								@enderror


							</div>

							<div class="form-group my-3">
								<label for="content">@lang('Content')</label>
								<textarea class="form-control bg-light shadow-sm
								@error('subject') is-invalid @else border-0 @enderror"

								name="content"

								placeholder="Mensaje..."></textarea>

								@error('content')
									<span class="invalid-feedback" role="alert">
										<strong> {{$message}}</strong>
									</span>
								@enderror

							</div>
							<button class="w-100 btn btn-primary btn-lg">@lang('Send')</button>
				</form>

	</div>
	@endsection

	</div>
</div>
