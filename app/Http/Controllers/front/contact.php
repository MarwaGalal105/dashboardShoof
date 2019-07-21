<?php

namespace App\Http\Controllers\front;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Contactus;
use Mail;
class contact extends Controller
{
    public function index()
    {
        return view('front.contact');
    }


    public function sendmail(Request $request) {
        // $contactus = new Contactus();
    	$this->validate($request, [
			'email'        => 'required|email',
            'name'         => 'required',
            'message'         => 'required'
			]);

		$data = array(
			'email' => $request->email,
            'name' => $request->name,
            'message' => $request->message
			);

		Mail::send('sendmail', $data, function($message) use ($data){
			$message->from('far7a.wedding@gmail.com' , 'far7a wedding');
			$message->to($data['email']);
			$message->subject('رساله ترحيب');
        });
        // $contactus->name= $request->name ;
        // $contactus->email= $request->email;
        // $contactus->message=$request->email;

        // $contactus->save();

		return redirect('/contact');
	}
}
