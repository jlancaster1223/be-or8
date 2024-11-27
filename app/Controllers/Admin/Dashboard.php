<?php

namespace App\Controllers\Admin;

use App\Controllers\BaseController;

class Dashboard extends BaseController
{
    public function index() {
        return view('admin/login');
    }

    public function dashboard() {
        return view('admin/dashboard');
    }
}