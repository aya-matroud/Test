<?php

namespace App\Http\Controllers;

use App\Http\Requests\StrreContact;
use App\Models\Contact;
use App\Models\Governorate;
use App\Models\Number;
use App\Models\Slide;
use App\Models\News;
use Illuminate\Http\Request;
use Captcha;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
//    public function __construct()
//    {
//        $this->middleware('auth');
//    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $slides=Slide::all();
//        $news = News::paginate(4);
//        $news=News::all();
        $news=News::orderBy('dateOfNew', 'desc')->take(3)->get();
        $numbers=Number::all();
        return view('syTrust.index',compact('slides','news','numbers'));
    }

    public function shownews($id){
        $news=News::find($id);
        return view('syTrust.news',compact('news'));
    }
    public function allnews(){
        $news=News::all();
        return view('syTrust.allnews',compact('news'));
    }

    public function index2()
    {

        return view('index');
    }

    public function create()
    {
        //
        $gov=Governorate::all();
        return view('syTrust.contactus',compact('gov'));

    }


    public function store(Request $request)
    {

        $this->validate($request, [
            'fullName' => 'required',
            'subject'=>'required',
            'mobileNumber'=>'required',
            'email' => 'required|email',
            'message' => 'required|min:5',
            'captcha' => 'required|captcha', // this will validate captcha
        ]);

        $contact=new Contact();
        $contact->fill(request()->all());
        $contact->save();

//        return redirect()->back()->with('success', 'Your message has been received.');

//
        return 'OK';



    }

    public function refreshCaptcha()
    {
        return response()->json([
            'captcha' => Captcha::img()
        ]);
    }
}
