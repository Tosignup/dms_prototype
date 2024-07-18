<?php

namespace App\Http\Controllers\receptionistPanel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReceptionistController extends Controller
{
    public function index(){
        return view('receptionist.dashboard');
    }
}
