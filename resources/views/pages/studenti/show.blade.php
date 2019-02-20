

@extends('layouts.baseLayout')

@section('title', $studente['slug']);

@section('content')

  <section class="studenti singolo container py-5">
    <div class="container d-flex flex-wrap justify-content-center">
        <div class="studente d-flex flex-column justify-content-around align-items-center p-5 mb-5">
          <h1>{{ $studente['name']}}</h1>
          <img class="rounded-circle my-5" src="{{ $studente['img']}}" alt="">
          <div class="description">
            <p class="text-center">Ora è web developer in {{ $studente['azienda']}}</p>
            <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
              Quas dignissimos ullam, ab nulla laboriosam itaque. Ut numquam
              libero repudiandae, culpa modi, vero nemo molestias suscipit!
              Vero aliquid, deleniti illum veritatis.</p>
          </div>
        </div>
    </div>
  </section>

@endsection
