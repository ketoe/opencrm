<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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

    public function show (int $id) 
    {
        $data = Payment::findOrFail($id);
    }

    public function edit (int $id)
    {
        $data = Payment::findOrFail($id);
    }

    public function store (PaymentRequest $request)
    {
        return Payment::create($request->all());
    }

    public function update (PaymentRequest $request, $id)
    {
        $payment = Payment::find($id);
        $payment->touch();
        return $payment->update($request->all());
    }

    public function destroy ($id)
    {
        $payment = Payment::find($id);
        return $payment->delete();
    }
}
