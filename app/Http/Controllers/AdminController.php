<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function master(){
        return view('admin.master');
    }

    public function index(){
        return view('admin.pages.index');
    }
}
