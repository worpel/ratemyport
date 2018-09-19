<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfilesController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::all(); // get users from db
        return view('profiles.index', compact('users'));
    }

    public function show(User $user) {
        return view('profiles.show', [ 'myuser' => $user]);
    }

    public function edit(User $user) {
        return view('profiles.edit', $user);
    }
}
