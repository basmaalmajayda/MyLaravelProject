<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contact;

class ContactController extends Controller
{
    public function showContacts(){
        $contacts = Contact::select('*')->withTrashed()->paginate(5);
        return view('admin.contactTable')->with('contacts', $contacts);
    }
    public function storeContact(Request $request){
    	$contact = new Contact;
    	$contact->name = $request->name;
    	$contact->email = $request->email;
    	$contact->subject = $request->subject;
        $contact->message = $request->message;
	    $status = $contact->save();
    	return redirect()->back()->with('status', $status);
    }
    public function deleteContact($id){
    	Contact::where('id', $id)->delete();
    	return redirect()->back();
    }

    public function restoreContact($id){
    	Contact::onlyTrashed()->where('id', $id)->restore();
    	return redirect()->back();
    }
}
