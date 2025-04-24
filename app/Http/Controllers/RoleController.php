<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Role;

class RoleController extends Controller
{
    public function show(Request $request)
    {
        $id = $request->id;

        $role = Role::with('users')->findOrFail($id);

        return view('roles.show', compact('role'));
    }
}
