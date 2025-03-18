<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminProfileController extends Controller
{
    public function index()
    {
        return view('admin.profile'); // ✅ Ensure this matches the folder structure
    }
}


