<?php

namespace App\Http\Controllers;

use App\Models\HeroPage;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class HeroPageController extends Controller
{
    public function hero(){
        return view('pages.hero.create');
    }


   

    public function store(Request $request){
     $request-> validate ([

        'title'=>'required|string',
        'description'=>'required|string',
        'price'=>'required|string'
]);


       $hero= new HeroPage();

        $hero->title=$request->title;
        $hero->description=$request->description;
        $hero->price=$request->price;
        $hero->hero_image  = $request->hero_image->store('products', 'public');
        // dd($hero_file);
        $hero->save();

        return redirect()->route('hero.page')->with('success',"hero page data stor hass been successfuly");



    }

    public function list(){
        $hero=HeroPage::all();
        return view('pages.hero.list_hero',compact('hero'));
    }


    public function edit($id){

        $hero=HeroPage::find($id);
        return view('pages.hero.edit',compact('hero'));

    }


  public function update(Request $request,$id){
  
     $request-> validate ([

        'title'=>'required|string',
        'description'=>'required|string',
        'price'=>'required|string'
]);

   $hero=  HeroPage::find($id);

if ($request->hero_image) {
            Storage::disk('public')->delete($hero->hero_image);

            $hero->product_image  = $request->hero_image->store('products', 'public');
        }

        $hero->title=$request->title;
        $hero->description=$request->description;
        $hero->price=$request->price;
        

         $hero->hero_image  = $request->hero_image->store('products', 'public');

         // dd($hero_file);

         $hero->save();

        return redirect()->route('list.hero.page')->with('success',"hero page data update hass been successfuly");

    }


    public function delete($id){
        $hero=HeroPage::find($id);

        $hero->delete();
        return redirect()->route('list.hero.page')->with('success',"hero page data update hass been successfuly");
    }




}
