<?php

namespace App\Http\Controllers\About;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PartnerController extends Controller
{
    public function index()
    {
        return view('about.partner');
    }
}
