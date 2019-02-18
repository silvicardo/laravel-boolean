<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{

  public function privacyPolicy() {
    return view('pages.static.privacyPolicy');
  }


  public function lavoraConNoi() {
    return view('pages.static.lavoraConNoi');
  }

}
