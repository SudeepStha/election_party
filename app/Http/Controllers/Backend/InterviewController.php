<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Interview;
use Illuminate\Http\Request;

class InterviewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $interview = Interview::all();
        return view('backend.interview.index', compact('interview'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
        return view('backend.interview.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $requestlocalhos
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $interview = new Interview();
        $interview->title = $request->title;
        $interview->description = $request->description;
        
        if($request->hasFile('featured')){
            $file = $request->featured;
            $new = time() . '.' . $file->getClientOriginalExtension();
            $file->move('interviewimage', $new);
            $interview->featured = "interviewimage/$new";
        }

        $interview->save();
  
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
        $interview = Interview::find($id);
        return view('backend.interview.edit',compact('interview'));
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
        $interview = Interview::find($id); 
        $interview->title = $request->title;
        $interview->description = $request->description;
        
        if($request->hasFile('featured')){
            $file = $request->featured;
            $new = time() . '.' . $file->getClientOriginalExtension();
            $file->move('interviewimage', $new);
            $interview->featured = "interviewimage/$new";
        }

        $interview->update();
  
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
        $interview = Interview::find($id);
        $interview->delete();

        return redirect()->back();
    }
}
