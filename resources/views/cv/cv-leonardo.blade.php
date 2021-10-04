@extends('layout')

@section('title', 'Home')

@section('content')
  <div class="container col-12">
    <div class="row customBg">

    <div class="cvFirstColumn">
      <img height="300" width="250" src="/img/cv-pic.jpg" alt="">
      <h3>
      Maidana Leonardo G.M.
      <h5>Analista Programador Universitario</h5>
      <hr>
    </h3>

    <h4>Contacto</h4>
      <ul class="list-group contactList">
        <li class="list-group-item">
          <svg xmlns="http://www.w3.org/2000/svg"
          width="16" height="16" fill="currentColor"
          class="bi bi-at" viewBox="0 0 16 16">
            <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
          </svg>

          Dev.Maidana@Gmail.com</li>
        <li class="list-group-item">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16"
          fill="currentColor" class="bi bi-github" viewBox="0 0 16 16">
          <path d="M8 0C3.58 0 0 3.58 0 8c0 3.54 2.29 6.53 5.47 7.59.4.07.55-.17.55-.38 0-.19-.01-.82-.01-1.49-2.01.37-2.53-.49-2.69-.94-.09-.23-.48-.94-.82-1.13-.28-.15-.68-.52-.01-.53.63-.01 1.08.58 1.23.82.72 1.21 1.87.87 2.33.66.07-.52.28-.87.51-1.07-1.78-.2-3.64-.89-3.64-3.95 0-.87.31-1.59.82-2.15-.08-.2-.36-1.02.08-2.12 0 0 .67-.21 2.2.82.64-.18 1.32-.27 2-.27.68 0 1.36.09 2 .27 1.53-1.04 2.2-.82 2.2-.82.44 1.1.16 1.92.08 2.12.51.56.82 1.27.82 2.15 0 3.07-1.87 3.75-3.65 3.95.29.25.54.73.54 1.48 0 1.07-.01 1.93-.01 2.2 0 .21.15.46.55.38A8.012 8.012 0 0 0 16 8c0-4.42-3.58-8-8-8z"/>
          </svg>
          Github.com/DevMaidanaLGM</li>
        <li class="list-group-item">388-XXXX</li>

      </ul>

    </div>
    <div class="cvSecondColumn">
      <div class="cvPHabilities">
        <ul class="list-group">
          <li class="list-item">Tutor</li>
          <li class="list-item">Fast learner</li>
          <li class="list-item">Flexibility</li>
        </ul>
      </div>
    </div>

    </div>
  </div>

@endsection
