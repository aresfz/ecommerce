<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardUserController extends Controller
{
    public function index() {
        $data = array('title' => 'Dashboard');
        return view('dashboarduser.index', $data);
    }
}
