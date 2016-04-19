<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;

class DocController extends Controller
{
    public function index()
    {
        return view('doc');
    }
}
