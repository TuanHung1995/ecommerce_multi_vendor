<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;

class VendorMessageController extends Controller
{
    function index(): View {
        return view('vendor.messager.index');
    }
}
