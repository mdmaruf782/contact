<?php

namespace Mdmaruf\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mdmaruf\Contact\Models\Contact;
use Mdmaruf\Contact\Mail\ContactMailable;
use Illuminate\Support\Facades\Mail;
class ContactController extends Controller
{
	public function index()
	{
		return view('contact::index');
	}

	public function SendMail(Request $request)
	{
		Mail::to(config('contact.send_mail_to'))->send(new ContactMailable($request->massege,$request->name,$request->email));

		Contact::create($request->all());
	}
}
