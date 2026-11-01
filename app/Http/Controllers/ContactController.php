<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        $messages = Contact::latest()->get();
        return view('admin.contacts.index', compact('messages'));
    }

    // 2. Mark a message as read
    public function markAsRead(Contact $contact)
    {
        $contact->update(['is_read' => true]);
        return back()->with('success', 'Message marked as read.');
    }

    // 3. Delete a message
    public function destroy(Contact $contact)
    {
        $contact->delete();
        return back()->with('success', 'Message deleted successfully.');
    }

    public function store(Request $request)
    {
        // 1. Strict Validation
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'whatsapp_number' => 'required|string|max:20', // Changed to string validation for phone numbers
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:2000',
        ]);

        // 2. Securely save to database
        Contact::create($validated);

        // 3. Redirect back with a success message
        return back()->with('success', 'Thank you! Your message has been sent securely.');
    }
}
