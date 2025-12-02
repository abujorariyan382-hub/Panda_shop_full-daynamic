<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Symfony\Component\Mime\Email;

class MessageController extends Controller
{
    public function message()
    {
        $conTactCart = session()->get('contact-cart', []);

        return view('pages.message.message', compact('conTactCart'));
    }




    public function store(Request $request)
    {
        // dd($product);

      

        $contactCart = session()->get("contact-cart", []);

        $contactCart[$request->email] = [
            'name' => $request->name,
            'surename' => $request->surename,

            'email' => $request->email,
            'need' => $request->surename,
            'message' => $request->message,

        ];

        session()->put('contact-cart', value: $contactCart);

        // return 'add to cart produt successfully';
        return redirect()->back()->with('success', ' Send Message successfuly!');
    }

    public function messageDelete($email)
    {
        $contactCart = session()->get('contact-cart', []);

        if (isset($contactCart[$email])) {
            unset($contactCart[$email]);
            session()->put('contact-cart', $contactCart);
        }

        return redirect()->back()->with('success', 'Message deleted successfully!');

    }
}
