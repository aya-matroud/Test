<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\News;
use App\Models\Slide;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $slides=Slide::all();
        $news=News::all();
        $contact=Contact::all();
        return view('admin.index',compact('slides','news','contact'));
    }
    public function index2()
    {

        return view('admin.dashboard');
    }

//    public function addslide()
//    {
//        //
//        $slide=Slide::all();
//        return view('admin.addSlide',compact('slide'));
//
//    }
//    public function saveslide(Request $request)
//    {
//
//        $extention=$request->file('image')->GetClientOriginalName();
//        $request->file('image')->storeAs('public/images', $extention);
//
//        $slide=new Slide();
//
//
//        $slide->image=$extention;
//
//        $slide->fill(request()->all());
//
//        $slide->save();
//        $slide->update(["image" => $extention]);
//    }
//
//    public function editslide($id)
//    {
//        //
//        $slide=Slide::find($id);
//
//        return view('admin.editSlide', compact('slide'));
//
//    }
//    public function updateslide(Request $request, $id)
//    {
//        //
//
//        $slide = Slide::find($id);
//        $slide->update($request->all());
//    }
//    public function destroy($id)
//    {
//        $slide = Slide::find($id);
//        $slide->delete();
//        return redirect("admin/index");
//
//        //
//    }

}
