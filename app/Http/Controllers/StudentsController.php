<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentsController extends Controller
{

  public function index() {

    $data = [
      'title' => 'Studenti',
      'studenti' => config('studenti')
    ];

    return view('pages.studenti.index',compact('data'));

  }

  public function getBySlug($slug) {

    foreach (config('studenti') as $studente) {

      if ($studente['slug'] === $slug) {
        return view('pages.studenti.show', compact('studente'));
      }

    }

    return abort(404);

  }

}
