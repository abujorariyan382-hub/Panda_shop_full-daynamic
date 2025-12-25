<?php

namespace App\Http\Controllers;

use App\Models\AddCatagoryPage;
use App\Models\cart as ModelsCart;
use App\Models\HeroPage;
use App\Models\ProductPage;
use Gloudemans\Shoppingcart\Cart;
use App\Models\User;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    public function index()
    {
        $catagory = AddCatagoryPage::all();
        return view('pages.Product.add_product', compact('catagory'));
    }


    public function store(Request $request)
    {
        $request->validate([

            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'catagory' => 'required',
            'quantity' => 'required|string',
            'discount_price' => 'required|string',
            // 'product_image' => 'nullable|image'
        ]);


        $product = new ProductPage();

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->catagory = $request->catagory;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;

        $product->product_image  = $request->product_image->store('product', 'public');
        // dd($hero_file);
        $product->save();

        return redirect()->route('list.product.page')->with('success', " product page data stor hass been successfuly");
    }


    public function list()
    {
        $product = ProductPage::all();
        return view('pages.Product.list_product', compact('product'));
    }

    public function edit($id)
    {
        $product = ProductPage::find($id);
        $catagorys = AddCatagoryPage::all();
        return view('pages.Product.edit_product', compact('product', 'catagorys'));
    }


    public function update(Request $request, $id)
    {

        // dd($request->all());

        $validated =   $request->validate([

            'title' => 'required|string',
            'description' => 'required|string',
            'price' => 'required|string',
            'catagory' => 'required',
            'quantity' => 'required|string',
            'discount_price' => 'required|string',
            // 'product_image' => 'nullable|image'
        ]);

        // dd($validated);
        $product =  ProductPage::find($id);

        if ($request->product_image) {
            Storage::disk('public')->delete($product->product_image);

            $product->product_image  = $request->product_image->store('product', 'public');
        }

        $product->title = $request->title;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->catagory = $request->catagory;
        $product->quantity = $request->quantity;
        $product->discount_price = $request->discount_price;


        // dd($hero_file);
        $product->save();

        return redirect()->route('list.product.page')->with('success', " product page data stor hass been successfuly");
    }


    public function delete($id)
    {
        $product = ProductPage::find($id);
        $product->delete();


        return redirect()->route('list.product.page')->with('success', " product page data delete hass been successfuly");
    }

    public function product_details($id)
    {
        $product = ProductPage::find($id);
        $heros=HeroPage::find($id);
      
        
        return view('pages.Main.product_details', compact('product'));
    }


    public function addToCart(Request $request, $id){

        $product = ProductPage::findOrFail($id);        

        $cart = session()->get('cart', []);


        if(isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] += 1;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                "name" => $product->title,
                "quantity" => 1,
                "price" => $product->price,
                "photo" => $product->product_image
            ];
        }


        session()->put('cart', $cart);


        // dd($cart);

        // return 'add to cart produt successfully';
        return redirect()->back()->with('success', 'Product added to cart successfully!');

    }


    public function detailsAddToCart(Request $request){
        $validated = $request->validate([
            'product_id' => 'required|exists:product_pages,id',
            'quantity'   => 'required|numeric|min:1',
            'action'     => 'required|string'
        ]);


        $product = ProductPage::findOrFail($validated['product_id']);

        $cart = session()->get('cart', []);


        if (isset($cart[$product->id])) {
            $cart[$product->id]['quantity'] +=  $validated['quantity'] ?? 1;
        } else {
            $cart[$product->id] = [
                'id' => $product->id,
                "name" => $product->title,
                "quantity" => $validated['quantity'] ?? 1,
                "price" => $product->price,
                "photo" => $product->product_image
            ];
        }


        session()->put('cart', $cart);
        
        if($validated['action'] == 'buy_now'){

            return redirect()->route('cheackout.page')->with('success', 'Product added to cart successfully!');
        }
        return redirect()->back()->with('success', 'Product added to cart successfully!');
   
    }

    public function clearCart(){
        session()->forget('cart');
        return redirect()->route('index.page')->with('success', 'Cart cleared successfully!');
    }

    public function deleteCart($id){

        // dd($id);

        $cart= session()->get('cart', []);

        if (isset($cart[$id])) {
            unset($cart[$id]);
            session()->put('cart', $cart);
        }

        return redirect()->back()->with('success', ' cart iteam deleted successfully!');
    }


}
