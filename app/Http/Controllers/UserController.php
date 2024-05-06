<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class UserController extends Controller
{
    public function __construct()
    {
        
    }

    public function index()
    {
        $users = DB::select('SELECT * FROM user');

        return view('client.allUsers', compact('users'));
    }

    public function create()
    {
        return view('client.createUser');
    }

    public function handleCreate(Request $request)
    {
        $username = $request->request->get('name');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');
        DB::insert('INSERT INTO user (Name, Email, Phone) VALUES (?, ?, ?)', [$username, $email, $phone]);
        return redirect(route('user.index'));
    }

    public function delete($id)
    {
        DB::delete('DELETE FROM user WHERE ID = ?', [$id]);
        return redirect(route('user.index'));
    }

    public function edit($id)
    {
        $user = DB::selectOne('SELECT * FROM user WHERE ID = ?', [$id]);
        return view('client.editUser', compact('user'));
    }

    public function handleEdit(Request $request)
    {
        $id = $request->request->get('id');
        $username = $request->request->get('name');
        $email = $request->request->get('email');
        $phone = $request->request->get('phone');
        DB::update('UPDATE user SET Name = ?, Email = ?, Phone = ? WHERE ID = ?', [$username, $email, $phone, $id]);
        return redirect(route('user.index'));
    }
}