<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        $password = $request->input('password');
        $request->password = Hash::make($password);
        User::create($request->all());
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
}
