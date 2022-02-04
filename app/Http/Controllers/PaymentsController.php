<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Http\Requests\PaymentRequest;
use App\Models\Payment;

class PaymentsController extends Controller
{
    public function index ()
    {
        $data = array();
        $data['payments'] = Payment::paginate(50);
        return view('payments.index',$data);
    }

    public function create ()
    {
        return view('payments.create');
    }

    public function edit (int $id)
    {
        $data = Payment::findOrFail($id);
        return view('payments.edit',$data);
    }

    public function store (PaymentRequest $request)
    {
        Payment::create($request->all());
        $request->session()->flash('success', 'Metoda płatności utworzona.');
        return redirect('/admins/payments');
    }

    public function update (PaymentRequest $request, $id)
    {
        $payment = Payment::find($id);
        $payment->touch();
        $payment->update($request->all());
        $request->session()->flash('success', 'Metoda została zaktualizowana.');
        return redirect('/admins/payments');
    }
}
