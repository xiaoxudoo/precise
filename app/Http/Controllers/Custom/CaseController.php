<?php

namespace App\Http\Controllers\Custom;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class CaseController extends Controller
{
    public function index()
    {
        return view('custom.case');
    }
}
