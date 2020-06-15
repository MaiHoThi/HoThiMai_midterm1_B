<?php
namespace App\Http\Controllers;
use App\Tour;
use Illuminate\Http\Request;
class TourController extends Controller
{
    function dashboard()
    {
        $tours = Tour::all();
        return view('admin.create',['tours'=>$tours]);

    }
    function home()
    {
        $tours = Tour::all();
        return view('user.home',['products'=>$tours]);

    }
    
    function store(Request $request)
    {
        $name=$request->name;
        $filePath =$request->file("image")->store("public");
        $typetour=$request->typetour;
        $schedule=$request->schedule;
        $depart=$request->depart;
        $number=$request->number;
        $price=$request->price;
        
        $request->validate(
                    [
                        'name'=>'required|unique:tours',
                        'price'=>'required',
  
                    ]
                    );
                    $tours= new Tour();
                    $tours->name=$name;
                    $tours->image=$filePath;
                    $tours->typetour=$typetour;
                    $tours->schedule=$schedule;
                    $tours->depart=$depart;
                    $tours->number=$number;
                    $tours->price=$price;
                    $tours->save();
                    return redirect('/dashboard'); 
    }
}
