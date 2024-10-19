<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'phone' => 'sometimes|nullable|regex:/^[0-9+\-\(\)\s]*$/',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:255',
        ]);

        if ($request->has('preferred_contact_method') && !empty($request->my_extra_field)) {
            // It's a bot, reject the form submission with a fake success message, won't be stored n db
            return redirect()->back()->with('success', 'Your message has been sent successfully!');
        }

        Contact::create($formData);
        return redirect()->route('contactForm') // Ensure this matches the route name
        ->with('success', 'Your message has been sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Contact $contact)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Contact $contact)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Contact $contact)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Contact $contact)
    {
        //
    }
}
