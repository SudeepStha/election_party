<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Rachana;
use Illuminate\Http\Request;

class RachanaController extends Controller
{ 
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $rachana = Rachana::all();
        return view('backend.rachana.index', compact('rachana'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.rachana.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $rachana = new Rachana();
        $rachana->title = $request->title;
        $rachana->description = $request->description;
        
        if($request->hasFile('featured')){
            $file = $request->featured;
            $new = time() . '.' . $file->getClientOriginalExtension();
            $file->move('rachanaimage', $new);
            $rachana->featured = "rachanaimage/$new";
        }

        $rachana->save();
  
        return redirect()->back();
  
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
        $rachana = Rachana::find($id);
        return view('backend.rachana.edit',compact('rachana'));
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
        $rachana = Rachana::find($id);
        $rachana->title = $request->title;
        $rachana->description = $request->description;
        
        if($request->hasFile('featured')){
            $file = $request->featured;
            $new = time() . '.' . $file->getClientOriginalExtension();
            $file->move('rachanaimage', $new);
            $rachana->featured = "rachanaimage/$new";
        }

        $rachana->update();
  
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $rachana = Rachana::find($id);
        $rachana->delete();

        return redirect()->back();
    }
}
