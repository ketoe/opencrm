<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class UsersController extends Controller
{
    public function index ()
    {
        $data = array();
        $data['users'] = User::paginate(50);
        return view('users.index',$data);
    }

    public function create ()
    {
        return view('users.create');
    }

    public function edit (int $id)
    {
        $data = User::findOrFail($id);
        return view('users.edit',$data);
    }

    public function store (UserRequest $request)
    {
    
        User::create([
            'name' => $request->name,
            'surname' => $request->surname,
            'email' => $request->email,
            'password' => Hash::make($request->input('password'))
        ]);;
        $request->session()->flash('success', 'Użytkownik został utworzony.');
        return redirect('/admins/users');
    }

    public function update (UserRequest $request, $id)
    {
        $user = User::find($id);
        $user->touch();
        $user->update($request->all());
        $user->session()->flash('success', 'Użytkownik został zaktualizowany.');
        return redirect('/admins/users');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/');
    }
}
