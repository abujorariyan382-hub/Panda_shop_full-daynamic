<?php

namespace App\Http\Controllers;

use App\Models\AddCatagoryPage;
use Illuminate\Http\Request;

class CatagoryPageController extends Controller
{
    public function index(){
        $catagory=AddCatagoryPage::all();
        return view('pages.catagory.add_catagory',compact('catagory'));
    }

    public function store(Request $request){
         $request-> validate ([

        'add_catagory'=>'required|string',
           
       

       
]);

          $catagory=new AddCatagoryPage();
         $catagory->add_catagory=$request->add_catagory;

         $catagory->save();

         return redirect()->route('catatory.page')->with('success', "Add catagory store successfully");



    }

    public function delete($id){
        $catagory=AddCatagoryPage::find($id);
        $catagory->delete();

        
         return redirect()->route('catatory.page')->with('success', "Add catagory delete successfully");
    }
}
