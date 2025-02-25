<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::get();

        return view('dashboard.user-managment.role-list',compact('roles'));
    } 
}
