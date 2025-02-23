<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Chat;
use Illuminate\Http\Request;
use Illuminate\View\View;

class UserMessageController extends Controller
{
    function index(): View {
        return view('frontend.dashboard.messager.index');
    }

    function sendMessage(Request $request) {
        $request->validate([
            'message' => ['required'],
            'receiver_id' => ['required']
        ]);

        $message = new Chat();
        $message->sender_id = auth()->user()->id;
        $message->receiver_id = $request->receiver_id;
        $message->message = $request->message;
        $message->save();

        return response(['status' => 'success', 'message' => 'message sent successfully']);
    }
}
