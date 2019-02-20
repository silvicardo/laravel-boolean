import React, { Component } from 'react';
import ReactDOM from 'react-dom';

export default class StudentCard extends Component {

    render() {

        const {name, azienda, slug} = this.props;
        const url = `http://localhost:8000/studenti/${slug}`;
        return (
                <div className="description">
                <a href={url}>{name}</a>
                  <p>Ora è web developer in {this.props.azienda}</p>
                </div>
        );
    }


}
