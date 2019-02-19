<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{

  public function privacyPolicy() {

    $title = 'Privacy Policy ';

    return view('pages.static.privacyPolicy', compact('title'));
  }


  public function lavoraConNoi() {

    $title = 'Lavora con noi';

    return view('pages.static.lavoraConNoi', compact('title'));
  }

}
