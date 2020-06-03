<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PhpJunior\LaravelVideoChat\Facades\Chat;
use PhpJunior\LaravelVideoChat\Models\Conversation\Conversation;

class ProfileController extends Controller
{
    public function index()
    {
        return view('myprofile');
    }

    public function allChats()
    {
        $threads = Chat::getAllConversations();

        return view('chats')->with([
            'threads' => $threads,
            'conversation' => null
        ]);
    }

    public function chat(Request $request, $id)
    {
        $threads = Chat::getAllConversations();
        $conversation = Chat::getConversationMessageById($id);

        return view('chats')->with([
            'threads' => $threads,
            'conversation' => $conversation,
        ]);
    }

    public function acceptChat(Request $request, $id)
    {
        Chat::acceptMessageRequest($id);
        return redirect()->back();
    }

    public function newChat(Request $request, $id)
    {
        $conversation = new Conversation();
        $conversation->first_user_id = auth()->user()->id;
        $conversation->second_user_id = $id;
        $conversation->save();

        $conversation->messages()->create([
            'user_id' => auth()->user()->id,
            'text' => 'Hello',
        ]);
    }

    public function sendChat(Request $request)
    {
        Chat::sendConversationMessage($request->input('conversationId'), $request->input('text'));
    }

    public function sendFilesInChat(Request $request)
    {
        Chat::sendFilesInConversation($request->input('conversationId'), $request->file('files'));
    }

    public function chatTrigger(Request $request, $id)
    {
        Chat::startVideoCall($id, $request->all());
    }

    public function messages()
    {
        return view('messages');
    }

    public function spam()
    {
        return view('spam');
    }

    public function universal()
    {
        return view('universal');
    }

    public function myphotos()
    {
        return view('myphotos');
    }

    public function myaccount()
    {
        return view('myaccount');
    }

    public function upgrade()
    {
        return view('upgrade');
    }
}
