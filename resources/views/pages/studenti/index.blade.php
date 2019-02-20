

@extends('layouts.baseLayout')

@section('title', $data['title']);

@section('content')

<section class="studenti container py-5">
  <div class="container d-flex flex-wrap justify-content-between">
      @forelse ($data['studenti'] as $studente)
      <div class="studente d-flex justify-content-around align-items-center p-3 mb-5">
        <img class="rounded-circle mr-4" src="{{ $studente['img']}}" alt="">
        <div class="description">
          <a href="{{ route('studentePerSlug', $studente['slug'])}}">{{ $studente['name']}}</a>
          <p>Ora è web developer in {{ $studente['azienda']}}</p>
        </div>
      </div>
      @empty
        <p>Nessuno studente per ora</p>
      @endforelse
  </div>
</section>

@endsection
