<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use \Spatie\Permission\Models\Role;

class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        $roles = Role::all();
        return view('user.user_index', compact('users', 'roles')); //
    }

    public function create()
    {
        $roles = Role::all(); //mengambil semua role untuk form
        return view('user.user_create', compact('roles')); //tampilkan form create user
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8',
            'roles' => 'required|array',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password);
        $user->save();

        $user->assignRole($request->roles); //memberikan role yang dipilih kepada user
        return redirect()->route('users.index')->with('success', 'user berhasil di tambahkan');
    }
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('user.user_edit', compact('user', 'roles'));
    }

    public function update(Request $request, $id)
    {
        $users = User::findOrFail($id);
        $users->update($request->all());
        $users->syncRoles($request->roles);

        return redirect('/user')->with('success', 'Berhasil di ubah');
    }
    public function delete($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Berhasil di hapus');
    }

}
