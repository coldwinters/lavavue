<?php

namespace App\Http\Controllers\Admin;

use App\Models\Admin;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function index()
    {
        return Admin::paginate(10);
    }

    public function show($id)
    {
        $admin = Admin::findOrFail($id);
        return $admin;
    }
}
