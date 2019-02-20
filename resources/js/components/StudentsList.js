import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import StudentCardDescription from './StudentDescription';
import StudentListCard from './StudentListCard';

export default class StudentsList extends Component {

    render() {

      const studenti = this.props.studenti;

      console.log(studenti);

      const studentsList = studenti.map((stud, index) =>(<StudentListCard key={stud.slug} {...stud} />));

        return (

              <div className="listaStudenti container d-flex flex-wrap justify-content-between">
                {studentsList}
              </div>
        );
    }

}
