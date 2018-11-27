<?php

namespace App\Http\Controllers;

use App\Events\NewMessage;
use App\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class MessageController extends Controller
{
    public function getMessageFor($id){
        $logid= Auth::user()->id;
        $messages = Message::where('from', $id)->where('to', $logid)->orWhere('to',$id)->where('from', $logid)->get();

        return response()->json($messages);
    }

    public function send(Request $request){
        $message =Message::create([
            'from'=> auth()->id(),
            'to' => $request->receiver_id,
            'text' => $request->text
        ]);

        broadcast(new NewMessage($message));
        return response()->json($message);
    }
}
