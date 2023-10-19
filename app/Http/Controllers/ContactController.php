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
        $contacts = Contact::get();
        return view('admin.contacts', compact('contacts'));
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
        $contact = $request->validate(
            [
                "name" => 'required|min:5|max:15',
                "phone" => "required|numeric",
                "email" => 'required|email',
                "subject" => 'required',
                "message" => 'required'
            ],
        );
        Contact::create($contact);
        return redirect()->route('Contact_Page')->with('success', 'The Contact Is Created Successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Contact::find($id)->delete();

        return redirect()->route('View_Contacts')->with('danger', 'The Contact is Deleted Successfully');
    }
}
