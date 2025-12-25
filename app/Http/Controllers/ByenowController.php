<?php

namespace App\Http\Controllers;

use App\Models\ProductPage;
use Illuminate\Http\Request;

class ByenowController extends Controller
{

    public function byeNow($id)
    {
        $product = ProductPage::findOrFail($id);

        $byenow = session()->get('byenow', []);


        if (isset($byenow[$product->id])) {
            $byenow[$product->id]['quantity'] += 1;
        } else {
            $byenow[$product->id] = [
                'id' => $product->id,
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->product_image
            ];
        }


        session()->put('byenow', $byenow);


        // dd($cart);

        // return 'add to cart produt successfully';
        return redirect()->route('cheackout.page')->with('success', 'Product added to cart successfully!');
    }


   



    public function delete($id)
    {


        $byenow = session()->get('byenow', []);

        if (isset($byenow[$id])) {
            unset($byenow[$id]);
            session()->put('byenow', $byenow);
        }

        return redirect()->back()->with('success', ' bye iteam deleted successfully!');
    }



    public function store(Request $request)
    {
        // dd($product);



        $address = session()->get("address", []);

        $address[$request->email] = [
          
            'full_name' => $request-> full_name,
            'email' => $request->email,
            'number'=>$request->number,
            'radioDefault' => $request->radioDefault,
            'message' => $request->message,
            'address'=>$request->address

        ];

        session()->put('address', value: $address);

        // return 'add to cart produt successfully';
        return redirect()->back()->with('success', ' order  successfuly!');
    }

    public function  contactMessage(){
        $address = session()->get("address", []);
        return view('pages.contactmessage.contactmessage',compact('address'));
    }


    public function deleteMessage($email)    {


        $address = session()->get('address', []);

        if (isset($address[$email])) {
            unset($address[$email]);
            session()->put('address', $address);
        }

        return redirect()->back()->with('success', ' bye iteam deleted successfully!');
    }

    public function payment(Request $request, $id){
       
       
        $product = ProductPage::find($id);
       
      

        $cheackout = session()->get('cheackout', []);


        if (isset($cheackout[$product->id])) {
            $cheackout[$product->id]['quantity'] += 1;
        } else {
            $cheackout[$product->id] = [
                'id' => $product->id,
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->product_image
            ];
        }


        session()->put('cheackout', $cheackout);


        // dd($cart);

        // return 'add to cart produt successfully';
        return redirect()->route('cheackout.page')->with('success', 'Product added to cart successfully!');

        // dd($product);
    }

    public function paymentdelete ($id){
            $cart = session()->get('cart', []);
            if(isset($cart[$id])){
                unset($cart[$id]);
            session()->put('cart', $cart);
            }

        return redirect()->back()->with('success', ' payment iteam deleted successfully!');

    }
}
