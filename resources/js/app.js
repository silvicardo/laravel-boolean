
import React from 'react';
import ReactDOM from 'react-dom';
import Studente from './components/Student';
require('./bootstrap');

$(document).ready(function(){

  //Se siamo nella pagina show dello studente,
  //richiamiamo la pagina
  if (document.getElementById('studenteSingolo')) {

    const slug = $('#studenteSingolo').attr('data-slug');

    $.getJSON(`http://localhost:8000/api/studenti/by-slug?slug=${slug}`, renderStudent)

    function renderStudent(jsonStudents) {

      const student = jsonStudents.studenti[0];

      console.log(student);

      {/* SPREAD ATTRIBUTES:
        Passiamo tutti le chiavi e valori come attributi al tag grazie allo spread operator */}
      ReactDOM.render(<Studente {...student} />, document.getElementById('studenteSingolo'));
    }


  }
});
