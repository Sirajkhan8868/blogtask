<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        return view('site.index');
    }

    public function lithotherapie()
    {
        return view('site.lithotherapie');
    }

    public function leveil()
    {
        return view('site.leveil');
    }

    public function outils()
    {
        return view('site.outils');
    }

    public function propos()
    {
        return view('site.propos');
    }

    public function signes()
    {
        return view('site.signes');
    }


}
