import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import StudentCardDescription from './StudentCardDescription';

export default class StudentListCard extends Component {

    render() {

        return (

          <div className="studente d-flex justify-content-around align-items-center p-3 mb-5">
            <img className="rounded-circle mr-4" src={this.props.img} alt="studente" />
              <StudentCardDescription {...this.props} />
              </div>
        );
    }

}
