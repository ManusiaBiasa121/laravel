<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View; // Correct namespace for View class

class ControllerContact extends Controller
{
    public function index() {
        $contact = Contact::latest()->get();
        return view('contactwebkola', [
            'title' => 'Contact',
            'items' => $contact,
        ]);
    }

    public function create()
    {
        return view('contactwebkola');
    }

    public function store(Request $request){
        DB::table('pesan')->insert([
            'pesan' => $request->pesan
            , 'nama' => $request->nama
        ]);
        return redirect()
            ->route('contactwebkola')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function edit(string $id): View
    {
        // Get contact by ID
        $contact = Contact::findOrFail($id);

        // Render view with contact
        return view('editkomen', compact('contactwebkola'));
    }

    public function update(Request $request, string $id): RedirectResponse
    {
      $contact = Contact::findOrFail($id);

      // Update contact
      $contact->update([
          'pesan' => $request->input('pesan'),
      ]);
      return redirect()
            ->route('contactwebkola')
            ->with(['success' => 'Data Berhasil Disimpan!']);
    }

    public function destroy($id): RedirectResponse
    {
        // Get post by ID
        $contact = Contact::findOrFail($id);

        // Delete post
        $contact->delete();

        // Redirect to index
        return redirect()->route('contactwebkola')->with(['success' => 'Data Berhasil Dihapus!']);
    }

}

