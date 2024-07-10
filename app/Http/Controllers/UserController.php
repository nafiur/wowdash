<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //Index
    public function index()
    {
        $users = User::all();
        return view('backoffice.user.index', compact('users'));
    }
    //Create User
    public function create()
    {

        return view('backoffice.user.create');
    }





}