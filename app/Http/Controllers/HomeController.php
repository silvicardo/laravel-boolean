<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {

      $title = 'Home';

      return view('pages.home.index', compact('title'));
    }
    public function corso() {

      $title = 'Corso';

      return view('pages.home.corso', compact('title'));
    }
    public function metodo() {

      $title = 'Metodo';

      return view('pages.home.metodo', compact('title'));
    }
    public function dopoIlCorso() {

      $title = 'Dopo il corso';

      return view('pages.home.dopoIlCorso', compact('title'));
    }
    public function faq() {

      $title = 'Faq';

      return view('pages.home.faq', compact('title'));
    }

}
