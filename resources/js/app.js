
import React from 'react';
import ReactDOM from 'react-dom';
import Studente from './components/Student';
import StudentsList from './components/StudentsList';
require('./bootstrap');

$(document).ready(function(){

  //PAGINA STUDENTE SINGOLO
  if (document.getElementById('studenteSingolo')) {

    const slug = $('#studenteSingolo').attr('data-slug');

    $.getJSON(`http://localhost:8000/api/studenti/by-slug?slug=${slug}`, renderStudent)

  }

  //PAGINA STUDENTI
  if (document.getElementById('studenti')) {

    $.getJSON(`http://localhost:8000/api/studenti`, renderStudents);

  }

  //FUNZIONI

  function renderStudent(jsonStudents) {

    const student = jsonStudents.studenti[0];

    console.log(student);

    {/* SPREAD ATTRIBUTES:
      Passiamo tutti le chiavi e valori come attributi al tag grazie allo spread operator */}
    ReactDOM.render(<Studente {...student} />, document.getElementById('studenteSingolo'));
  }

  function renderStudents(jsonStudents) {

    ReactDOM.render(<StudentsList studenti={jsonStudents.studenti} />, document.getElementById('studenti'));
  }
});
