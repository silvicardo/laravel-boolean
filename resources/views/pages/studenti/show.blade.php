

@extends('layouts.baseLayout')

@section('title', $studente['slug']);

@section('content')
  {{-- Il singolo utente sarà gestito con chiamata APi e React --}}
  <section id="studenteSingolo" class="studenti singolo container py-5" data-slug="{{ $studente['slug']}}">

  </div>

@endsection
