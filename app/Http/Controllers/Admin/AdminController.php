<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function index()
    {
        $page = 'dashboard';
        $selected = 'Dashboard';

        return view('admin.index')->with([
            'page' => $page,
            'selected' => $selected
        ]);
    }
}
