import React from 'react';
import ReactDOM from 'react-dom';
import Footer from './components/layout/footer';
import Header from './components/layout/header';
import Main from './components/layout/main';
import Nav from './components/layout/nav';
import { BrowserRouter } from "react-router-dom";

import './vintage-popup.css';



function App() {
    return (
        <>
             <BrowserRouter>
            <Header />
            <Nav />
            <Main />
            <Footer />
            </BrowserRouter>
        </>
    )
}

ReactDOM.render(<App />, document.getElementById("root"));

require('./bootstrap');
