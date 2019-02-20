import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class StudentDescription extends Component {

    render() {

        return (
                <div className="description">
                  <p className="text-center">Ora è web developer in {this.props.azienda}</p>
                  <p className="text-justify">Dived into programming in Swift
                  pushed from my love for iOS and Apple
                   products. Actually a full-time student
                    at BooleanCareers.</p>
                </div>
        );
    }


}
