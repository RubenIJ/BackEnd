<?php

namespace App\Http\Controllers;

use App\Models\Message;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    // Contactpagina voor bezoekers
    public function index()
    {
        return view('contact.index');
    }

    // Bericht opslaan
    public function store(Request $request)
    {
        $request->validate([
            'name'    => 'required|string|max:255',
            'email'   => 'required|email|max:255',
            'message' => 'required|string',
        ]);

        Message::create($request->only('name', 'email', 'message'));

        return redirect()->route('contact.index')->with('success', 'Je bericht is verzonden!');
    }

    public function adminIndex()
    {
        $messages = Message::orderBy('created_at', 'desc')->get();
        return view('admin.messages', compact('messages'));
    }
}
