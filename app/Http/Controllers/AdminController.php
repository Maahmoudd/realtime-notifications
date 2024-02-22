<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $users = User::role('user')->paginate(10);
        return view('dashboard', compact('users'));
    }
}
