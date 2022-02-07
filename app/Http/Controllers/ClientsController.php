<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\ClientRequest;

use App\Models\User;
use App\Models\Currency;
use App\Models\Payment;
use App\Models\Countrie;
use App\Models\Client;

class ClientsController extends Controller
{
    public function index () 
    {
        $data = array();
        $data['clients'] = Client::paginate(50);

        return view('clients.index',$data);
    }

    public function create ()
    {
        $data = array();
        $data['payments'] = Payment::all();
        $data['countries'] = Countrie::all();
        $data['currencies'] = Currency::all();
        return view('clients.create',$data);
    }

    public function store (ClientRequest $request)
    {
        Client::create([
            'name' => $request->name,
            'nip' => $request->nip,
            'regon' => $request->regon,
            'krs' => $request->krs,
            'address' => $request->address,
            'telephone' => $request->telephone,
            'email' => $request->email,
            'payment_id' => $request->payment_id,
            'countrie_id' => $request->countrie_id,
            'currency_id' => $request->currency_id,
            'user_id' => Auth::id()
        ]);
        $request->session()->flash('success', 'Klient został utworzony.');
        return redirect('/clients');
    }

    public function show(int $id)
    {
        $data = array();
        $data['client'] = Client::findOrFail($id);
        return view('clients.show',$data);
    }

    public function edit (int $id)
    {
        $data = array();
        $data['payments'] = Payment::all();
        $data['countries'] = Countrie::all();
        $data['currencies'] = Currency::all();
        $data['client'] = Client::findOrFail($id);
        return view('clients.edit',$data);
    }

    public function update (ClientRequest $request, $id)
    {
        $client = Client::find($id);
        $client->touch();
        $client->update($request->all());
        $request->session()->flash('success', 'Klient został zaktualizowany.');
        return redirect('/clients');
    }
}
