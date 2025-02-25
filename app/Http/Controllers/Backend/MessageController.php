<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;

class MessageController extends Controller
{
    function index() {
        $userId = auth()->user()->id;

        $chatUsers = Chat::with('senderProfile')->select(['sender_id'])
            ->where('receiver_id', $userId)
            ->where('sender_id', '!=', $userId)
            ->groupBy('sender_id')
            ->get();
        return view('admin.messenger.index', compact('chatUsers'));
    }
}
