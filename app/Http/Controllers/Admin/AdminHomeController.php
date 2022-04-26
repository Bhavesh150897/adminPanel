<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Admin\AdminController;
use Illuminate\Http\Request;
use App\Models\User;

class AdminHomeController extends AdminController
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index(Request $request)
    {
        $userCount  = User::count();

        return view('admin.dashboard.index',compact('userCount'));
    }
}
