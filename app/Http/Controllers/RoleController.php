<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RoleController extends Controller
{
    public function index() {
        $roles = DB::table('users')
            ->join('roles', 'users.role_id', '=', 'roles.id')
            ->select('roles.name as Role', 'users.role_id as Role_id', 'users.name as Name')
            ->get();

        $roles = json_decode($roles, true);
//        return view('dash.roles.index', ['roles' => $roles]);
        return view('dash.roles.index', compact('roles'));
//        return view('dash.roles.index', [
//            'roles' => $roles
//        ]);
    }
}
