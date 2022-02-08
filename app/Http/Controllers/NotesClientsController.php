<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\NoteClientRequest;
use App\Models\NoteClient;
use App\Models\Client;


class NotesClientsController extends Controller
{
    public function create ($client) 
    {
        $data = array();
        $data['client'] = Client::findOrFail($client);

        return view('notesClients.create',$data);
    }

    public function store (NoteClientRequest $request, $id)
    {
        NoteClient::create([
            'description' => $request->description,
            'important' => $request->important,
            'client_id' => $id,
            'user_id' => Auth::id()
        ]);
        $request->session()->flash('success', 'Notatka została utworzona.');
        return redirect("/clients/".$id);
    }

    public function edit ($id) 
    {
        $data = array();
        $data['note'] = NoteClient::findOrFail($id);
        return view('notesClients.edit',$data);
    }

    public function update (NoteClientRequest $request, $id)
    {
        $note = NoteClient::find($id);
        if (Auth::id() == $note->user_id) {
            $note->touch();
            $note->update([
                'description' => $request->description,
                'important' => $request->important
            ]);
            $request->session()->flash('success', 'Notatka została zaktualizowana.');
        }else {
            $request->session()->flash('error', 'Tylko autorzy mogą edytować swoje notatki.');
        }
        return redirect('/clients/'.$note->client_id);
    }

    public function delete (NoteClientRequest $request, $id)
    {
        $note = NoteClient::findOrFail($id);
        if (Auth::id() == $note->user_id) {
            $note->delete();
            $request->session()->flash('success', 'Notatka została usunięta.');
        }else {
            $request->session()->flash('error', 'Tylko autorzy mogą usuwać notatki.');
        }
        return redirect('/clients/'.$note->client_id);

    }
}
