<?php

namespace App\Http\Controllers\Download;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MaterialController extends Controller
{
    public function index()
    {
        return view('download.material');
    }
}
