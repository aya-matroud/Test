<?php

namespace App\Http\Controllers;

use App\Models\Governorate;
use App\Models\News;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function __construct()
    {
        $this->middleware('checkAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $news=News::paginate(3);
        return view('admin.showNew',compact('news'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $new=News::all();
        $governorate=Governorate::all();
        return view('admin.addNew',compact('new','governorate'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $extention=$request->file('image')->GetClientOriginalName();
        $request->file('image')->storeAs('public/images', $extention);

        $new=new News();


        $new->image=$extention;

        $new->fill(request()->all());
        $new->save();
        $new->governorates()->attach($request['governorates']);
        $new->update(["image" => $extention]);
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //

        $news=News::find($id);
        $governorate=Governorate::all();

        return view('admin.editNew', compact('news','governorate'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //

        $news = News::find($id);
        $news->update($request->all());
//        $news->governorates()->syncWithoutDetaching($request['governorates']);
        $news->governorates()->sync($request['governorates']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $news=News::find($id);
        $news->governorates()->detach($news['governorates']);
        $news->delete();

    }
}
