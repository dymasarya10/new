<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Room;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard',[
            'heading' => 'Dashboard',
            'user' => 'Admin'
        ]);
    }

    public function bill()
    {
        return view('admin.status_tagihan',[
            'heading' => 'Status Tagihan',
            'user' => 'Admin'
        ]);
    }

    public function room()
    {
        return view('admin.kamar',[
            'heading' => 'Kamar',
            'user' => 'Admin',
            'users' => User::all(),
            'rooms' => Room::all(),
        ]);
    }

    public function login()
    {
        return view('admin.loginpage');
    }
}
