<?php

namespace App\Http\Controllers;

use App\Models\HeroPage;
use App\Models\ProductPage;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
        $data['hero'] = HeroPage::all();
        // $product=ProductPage::paginate(10);
        $data['shoes'] = ProductPage::where('catagory', '=', 'Shoes')->take(3)->get();
        $data['watchs'] = ProductPage::where('catagory', '=', 'watch')->take(3)->get();
        $data['bags'] = ProductPage::where('catagory', '=', 'Beg')->take(3)->get();


        return view('pages.Main.index')->with($data);
    }

    public function products()
    {
        return view('pages.Main.product_details');
    }

    public function shoe()
    {
        $data['hero'] = HeroPage::all();
        // $product=ProductPage::paginate(10);
        $data['shoes'] = ProductPage::where('catagory', '=', 'Shoes')->get();
       

        return view('pages.Main.shoe',with($data));
    }

    public function watch()
    {
        $data['watchs'] = ProductPage::where('catagory', '=', 'watch')->get();
        return view('pages.Main.watch',with($data));
    }

    public function weitch()
    {
        return view('pages.Main.weitch');
    }

    public function beg()
    {
        $data['bags'] = ProductPage::where('catagory', '=', 'Beg')->get();


        return view('pages.Main.beg',with($data));
    }

    public function cart()
    {
        $cart = session()->get('cart', []);
        return view('pages.Main.cart', compact('cart'));
    }

    public function cheackout()
    {
        return view('pages.Main.cheackout');
    }

    public function contact()
    {
        return view('pages.Main.contact');
    }

    public function dashboard()
    {
        return view('pages.Dashboard.dashboard');
    }


    public function shop(){

        $data['hero'] = HeroPage::all();
        // $product=ProductPage::paginate(10);
        $data['shoes'] = ProductPage::where('catagory', '=', 'Shoes')->get();
        $data['watchs'] = ProductPage::where('catagory', '=', 'watch')->get();
        $data['bags'] = ProductPage::where('catagory', '=', 'Beg')->get();

        return view('pages.Main.shop',with($data));
    }
}
