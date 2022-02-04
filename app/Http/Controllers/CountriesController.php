<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CountrieRequest;
use App\Models\Countrie;

class CountriesController extends Controller
{
    public function index ()
    {
        $data = array();
        $data['countries'] = Countrie::paginate(50);
        return view('countries.index',$data);
    }

    public function create ()
    {
        return view('countries.create');
    }

    public function edit (int $id)
    {
        $data = Countrie::findOrFail($id);
        return view('countries.edit',$data);
    }

    public function store (CountrieRequest $request)
    {
        Countrie::create($request->all());
        $request->session()->flash('success', 'Kraj został utworzony.');
        return redirect('/admins/countries');
    }

    public function update (CountrieRequest $request, $id)
    {
        $countries = Countrie::find($id);
        $countries->touch();
        $countries->update($request->all());
        $request->session()->flash('success', 'Kraj został zaktualizowany.');
        return redirect('/admins/countries');
    }
}
