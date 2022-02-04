<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests\CurrencyRequest;
use App\Models\Currency;

class CurrenciesController extends Controller
{
    public function index ()
    {
        $data = array();
        $data['currencies'] = Currency::paginate(50);
        return view('currencies.index',$data);
    }

    public function create ()
    {
        return view('currencies.create');
    }

    public function edit (int $id)
    {
        $data = Currency::findOrFail($id);
        return view('currencies.edit',$data);
    }

    public function store (CurrencyRequest $request)
    {
        Currency::create($request->all());
        $request->session()->flash('success', 'Waluta została utworzona.');
        return redirect('/admins/currencies');
    }

    public function update (CurrencyRequest $request, $id)
    {
        $currencies = Currency::find($id);
        $currencies->touch();
        $currencies->update($request->all());
        $request->session()->flash('success', 'Waluta została zaktualizowana.');
        return redirect('/admins/currencies');
    }
}
