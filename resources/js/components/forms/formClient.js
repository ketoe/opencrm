import React from 'react';
import { Routes, Route, Link } from "react-router-dom";


export default function FormClient() {
    return (
        <>  
            <h3>Nowy kontrahent</h3>
            <section>
                <form>
                    <input type="submit" name="add" className="icon save" value="" click="true" />
                    <Link to="/clients" className="icon undo" click="true" />
                    <div className="icon delete" click="true"></div>
                    <div class="form-group row">
                        <label for="name" class="col-md-2 col-form-label">Nazwa:</label>
                        <div className="col-md-3"><input type="text" name="name" id="name" /></div>
                    </div>
                    <div class="form-group row">
                        <label for="nip" class="col-md-2 col-form-label">NIP:</label>
                        <div className="col-md-3"><input type="text" name="nip" id="nip" /></div>
                    </div>
                    <div class="form-group row">
                        <label for="regon" class="col-md-2 col-form-label">Regon:</label>
                        <div className="col-md-3"><input type="text" name="regon" id="regon" /></div>
                    </div>
                    <div class="form-group row">
                        <label for="krs" class="col-md-2 col-form-label">KRS:</label>
                        <div className="col-md-3"><input type="text" name="krs" id="krs" /></div>
                    </div>
                    <div class="form-group row">
                        <label for="address" class="col-md-2 col-form-label">Adres:</label>
                        <div className="col-md-3"><input type="text" name="address" id="address" /></div>
                    </div>
                    <div class="form-group row">
                        <label for="telephone" class="col-md-2 col-form-label">Nr. telefonu:</label>
                        <div className="col-md-3"><input type="text" name="telephone" id="telephone" /></div>
                    </div>
                    <div class="form-group row">
                        <label for="email" class="col-md-2 col-form-label">E-mail:</label>
                        <div className="col-md-3"><input type="text" name="email" id="email" /></div>
                    </div>
                    <div class="form-group row">
                        <label for="countrie_id" class="col-md-2 col-form-label">Kraj:</label> 
                        <div className="col-md-3">
                            <select name="countrie_id" id="countrie_id" >
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="currency_id" class="col-md-2 col-form-label">Kraj:</label> 
                        <div className="col-md-3">
                            <select name="currency_id" id="currency_id" >
                                <option></option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="payment_id" class="col-md-2 col-form-label">Kraj:</label> 
                        <div className="col-md-3">
                            <select name="payment_id" id="payment_id" >
                                <option></option>
                            </select>
                        </div>
                    </div>
                </form>

            </section>
        </>
    )


}
