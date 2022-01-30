import React from 'react';
import { Routes, Route, Link } from "react-router-dom";


export default function Nav() {
    return (
        <>
        <nav>
            <ul>
                <li><Link to="" className="icon home" click="true"></Link></li>
                <li><Link to="clients" className="icon clients" click="true"></Link></li>
                <li><Link to="orders" className="icon orders" click="true"></Link></li>
                <li><Link to="calender" className="icon calender" click="true"></Link></li>
                <li><Link to="messages" className="icon messages" click="true"></Link></li>
                <li><Link to="settings" className="icon settings" click="true"></Link></li>
                <li><Link to="notes" className="icon notes" click="true"></Link></li>
                <li><Link to="admin" className="icon admin" click="true"></Link></li>
                <li><Link to="logout" className="icon logout" click="true"></Link></li>
            </ul>
        </nav>
        </>
    )


}
