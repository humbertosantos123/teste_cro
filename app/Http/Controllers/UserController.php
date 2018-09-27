<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::get();
        return view('user.index', ['users' => $users]);
    }

    public function show(User $user)
    {
        return view('user/show', ['user' => $user]);
    }

    public function edit(User $user)
    {
        return view('user/edit', ['user' => $user]);
    }

    public function update(Request $request, User $user)
    {
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'document' => 'required|string',
            'birthday' => 'required'
        ]);

        $fields = $request->all();

        $date = str_replace('/', '-', $fields['birthday']);

        $user->name = $fields['name'];
        $user->birthday = date( 'Y-m-d', strtotime( $date ) );
        $user->document = $fields['document'];
        $user->updated_at = now();

        $user->save();

        return redirect()->route('user.show', ['user' => $user->id]);
    }
}