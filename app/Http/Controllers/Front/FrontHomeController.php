<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Front\FrontController;
use Illuminate\Http\Request;

class FrontHomeController extends FrontController
{
    /**
     * Write code on Method
     *
     * @return response()
     */
    public function index()
    {
        return view('front.index');
    }
}
