import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import StudentDescription from './StudentDescription';

export default class Studente extends Component {

    render() {

      const {name, img, azienda} = this.props;

        return (

              <div className="studente d-flex flex-column justify-content-around align-items-center p-5 mb-5 m-auto">
                <h1>{name}</h1>
                <img className="rounded-circle my-5" src={img} alt="studente" />
                <StudentDescription azienda={azienda} />
              </div>
        );
    }

}

{/* Proprietà di default in caso non ne immetta l'utente*/}
Studente.defaultProps = {
  name: 'Alessandro Biagini',
  slug: 'alessandro-biagini',
  age: 24,
  azienda: 'Softec spa',
  img: 'https://www.boolean.careers/images/students/biagini.png',
  gender: 'm'
};
