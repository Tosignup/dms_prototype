<?php

namespace App\Http\Controllers\clientPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Auth;

class ClientController extends Controller
{
    public function dashboard() {
        if(Auth::user()->role === 'admin') {
            return redirect()->route('admin.dashboard');
        } elseif(Auth::user()->role === 'receptionist') {
            return redirect()->route('receptionist.dashboard');
        }

        return view('client.dashboard');
    }
}
