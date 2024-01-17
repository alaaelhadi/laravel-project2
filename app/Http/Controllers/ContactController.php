<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Contact;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contacts = Contact::get();
        return view('contactList', compact('contacts'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function contact(Request $request)
    {
        $data = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string|max:400'
        ]);
        Contact::create($data);
        Mail::to('alaaelhadi@gmail.com')->send(new ContactMail($data));
        return redirect()->back()->with('success', 'Email sent successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $contact = Contact::findOrFail($id);
        return view('showContact', compact('contact'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id): RedirectResponse
    {
        Contact::where('id', $id)->delete();
        return redirect('admin/contactList');
    }

    /**
     * Display a listing of the trashed resource.
     */
    public function trashed()
    {
        $contacts = Contact::onlyTrashed()->get();
        return view('trashedContacts', compact('contacts'));
    }

    /**
     * Restore the resource.
     */
    public function restore(string $id): RedirectResponse
    {
        Contact::where('id', $id)->restore();
        return redirect('admin/contactList');
    }

    /**
     * Actual remove of the specified resource from storage.
     */
    public function finalDelete(string $id): RedirectResponse
    {
        Contact::where('id', $id)->forceDelete();
        return redirect('admin/trashedContacts');
    }
}
