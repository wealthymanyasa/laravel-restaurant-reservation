<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdminController extends Controller
{
    public function index(){
        $users = DB::table('users')->count();
        $categories = DB::table('categories')->count();
        $menus = DB::table('menus')->count();
        $tables = DB::table('tables')->count();
        $reservations = DB::table('reservations')->count();
        $user = User::all();

        return view('admin.index', compact('users', 'tables', 'reservations','menus','categories','user'));
    }
}
