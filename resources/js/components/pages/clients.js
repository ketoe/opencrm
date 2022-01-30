import React from 'react';
import $ from 'jquery';
import { Routes, Route, Link } from "react-router-dom";

import FormClient from '../forms/formClient';

export default function Clients() {
    return (
        <>
            <h3>Kontrahenci</h3>
            <section>
                <Link to="/clients/create" className="icon add" click="true"></Link>   
            </section>
        </>
    )


}
