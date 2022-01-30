import React from 'react';
import { Routes, Route, useParams } from "react-router-dom";

import Orders from '../pages/orders';
import Home from '../pages/home';
import Clients from '../pages/clients';

import FormClient from '../forms/formClient';

export default function Main() {
    return (
        <>
        <main>
            <Routes>
                <Route path="/" element={<Home />} />
                <Route path="clients" element={<Clients />} />
                <Route path="orders" element={<Orders />} />

                <Route path="/clients/create" element={<FormClient />} />    
            </Routes>    
        </main>
        </>
    )


}
