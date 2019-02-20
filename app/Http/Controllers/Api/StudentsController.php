<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentsController extends Controller
{

    public function byGender(Request $request) {


      $sesso = $request->all()['gender'];

      $studentiTrovati = [];

      foreach (config('studenti') as $studente) {

        if ($studente['gender'] === $sesso) {
          $studentiTrovati[] = $studente;
        }
      }

      $data =  (!empty($studentiTrovati)) ? ['studenti' => $studentiTrovati] : ['Error' =>'Gender non valido'];

      return response()->json($data);
    }
}
