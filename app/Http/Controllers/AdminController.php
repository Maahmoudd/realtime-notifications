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


    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response(['status' => 'success', 'message' => 'Deleted Successfully']);
    }
}
