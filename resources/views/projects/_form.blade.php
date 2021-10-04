

      @csrf
<div class="form-group my-1">


<label for="title">
  Titulo del proyecto
  <input class="form-control border-0 bg-light shadow-sm text-secondary"
  type="text"
  name="title"
  value="{{ old('title', $project->title)}}"/>
</label>

</div>
<div class="form-group">
  <label for="url">
    URL del proyecto
  </label>
  <input  class="form-control border-0 bg-light shadow-sm text-secondary"
  type="text"
  name="url"
  value="{{ old('url', $project->url)}}"/>
</div>


<div class="form-group">
  <label for="description">
    Descripción del proyecto
  </label>

  <textarea class="form-control border-0 bg-light shadow-sm text-secondary"
    name="description">
    {{ old('description', $project->description)}}
  </textarea>

</div>
<button class="btn btn-primary btn-lg btn-block w-100">{{$btnText ?? ''}}</button>
<a class="btn btn-link btn-block w-100" href="{{route('projects.index')}}">Regresar</a>
