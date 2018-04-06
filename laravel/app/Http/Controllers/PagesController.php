<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index()
    {
       // return "I am coming from index function";

      // return view('pages.mypage');

      // create new file in views/pages/index.blade.php and call here
      
      $title="Welcome to Laravel";
      
     // return view('pages.index',compact('about'));
      return view('pages.index')->with('title',$title);
   
    }
    public function about()
    {
        $about="Hi I am about page";

        return view('pages.about')->with('about',$about);
    }
    public function services()
    {
       // $services="I am a service page";
       // return view('pages.services')->with('services',$services);

       $data=array('name'=>'Guhan','course'=>['JAVA','PHP','ANGULAR','.NET']);

       return view('pages.services')->with('data',$data);
   
    }

}
