<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MainController extends Controller
{
    public function view_jabatan()
    {
        return view('jabatan');
    }

    public function view_gaji()
    {
        return view('gaji');
    }

    public function view_presensi()
    {
        return view('presensi');
    }

}
