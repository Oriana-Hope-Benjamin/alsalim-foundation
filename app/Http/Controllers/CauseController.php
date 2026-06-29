<?php

namespace App\Http\Controllers;

use App\Models\Cause;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CauseController extends Controller
{
    // READ: Show list of causes in the admin panel (UI to be built later)
    public function index()
    {
        $causes = Cause::latest()->get();
        return view('admin.causes.index', compact('causes'));
    }

    // CREATE: Show the form (UI to be built later)
    public function create()
    {
        return view('admin.causes.create');
    }

    // STORE: Process the form submission
    public function store(Request $request)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'goal_amount' => 'required|numeric|min:0',
            'amount_raised' => 'nullable|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Handle Image Upload
        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('causes', 'public');
        }

        // Set amount_raised to 0 if not provided
        $validated['amount_raised'] = $validated['amount_raised'] ?? 0;

        Cause::create($validated);

        return redirect()->route('admin.causes.index')->with('success', 'Cause created successfully.');
    }

    // EDIT: Show the edit form (UI to be built later)
    public function edit(Cause $cause)
    {
        return view('admin.causes.edit', compact('cause'));
    }

    // UPDATE: Process the edited data
    public function update(Request $request, Cause $cause)
    {
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'goal_amount' => 'required|numeric|min:0',
            'amount_raised' => 'required|numeric|min:0',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,webp|max:2048',
        ]);

        // Handle Image Replacement
        if ($request->hasFile('image')) {
            // Delete old image if it exists
            if ($cause->image) {
                Storage::disk('public')->delete($cause->image);
            }
            $validated['image'] = $request->file('image')->store('causes', 'public');
        }

        $cause->update($validated);

        return redirect()->route('admin.causes.index')->with('success', 'Cause updated successfully.');
    }

    // DESTROY: Delete the cause and its image
    public function destroy(Cause $cause)
    {
        if ($cause->image) {
            Storage::disk('public')->delete($cause->image);
        }
        
        $cause->delete();

        return redirect()->route('admin.causes.index')->with('success', 'Cause deleted successfully.');
    }
}