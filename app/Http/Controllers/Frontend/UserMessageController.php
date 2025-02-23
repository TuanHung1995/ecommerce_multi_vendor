<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserMessageController extends Controller
{
    function index(): View {
        return view('frontend.dashboard.messager.index');
    }
}
