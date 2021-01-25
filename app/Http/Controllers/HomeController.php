<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('welcome');
    }

    public function contact()
    {
        return view('contact');
    }
    public function sendmail(Request $request)
    {
        $data = $request->all();
        $to_name = 'Sushma';
        $to_email = 'susmachaudhary04@gmail.com';
        $data = array('name'=>$data['name'], "body" => $data['message']);
            
        Mail::send('emails.mail', $data, function($message) use ($to_name, $to_email) {
            $message->to($to_email, $to_name)
                    ->subject('Artisans Web Testing Mail');
            $message->from('susmachaudhary08@gmail.com','Artisans Web');
        });
    }
}
