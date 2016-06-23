<?php

namespace App\Http\Controllers\Product;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class MolDockController extends Controller
{
    public function index()
    {
        return view('product.moldock');
    }
}
