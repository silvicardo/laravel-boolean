<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index() {
      return view('pages.home.index');
    }
    public function corso() {
      return view('pages.home.corso');
    }
    public function metodo() {
      return view('pages.home.metodo');
    }
    public function dopoIlCorso() {
      return view('pages.home.dopoIlCorso');
    }
    public function faq() {
      return view('pages.home.faq');
    }

}
