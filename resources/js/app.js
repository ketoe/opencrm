import React from 'react';
import ReactDOM from 'react-dom';
import Footer from './components/layout/footer';
import Header from './components/layout/header';
import Main from './components/layout/main';
import Nav from './components/layout/nav';



function App() {
    return (
        <>
            <Header />
            <Nav />
            <Main />
            <Footer />
        </>
    )
}

ReactDOM.render(<App />, document.getElementById("root"));

require('./bootstrap');
require('./components/Example');
