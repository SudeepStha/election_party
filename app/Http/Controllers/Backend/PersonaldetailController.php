<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Personaldetail;
use Illuminate\Http\Request;

class PersonaldetailController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $personaldetail = Personaldetail::first();
        // return $personaldetail;
        return view('backend.personaldetail.index', compact('personaldetail'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('backend.personaldetail.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $personaldetail = new Personaldetail();
        $personaldetail->name = $request->name;
        $personaldetail->party = $request->party;
        $personaldetail->description = $request->description;
        $personaldetail->facebook = $request->facebook;
        $personaldetail->youtube = $request->youtube;
        $personaldetail->email = $request->email;
        $personaldetail->contact = $request->contact;
        
        if($request->hasFile('photo')){
            $file = $request->photo;
            $new = time() . '.' . $file->getClientOriginalExtension();
            $file->move('personaldetailimage', $new);
            $personaldetail->photo = "personaldetailimage/$new";
        };

        if($request->hasFile('cover')){
            $file1 = $request->cover;
            $new1 = time() . '.' . $file1->getClientOriginalExtension();
            $file1->move('personaldetailcover', $new1);
            $personaldetail->cover = "personaldetailcover/$new1";
        }

        $personaldetail->save();
  
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
        $personaldetail = Personaldetail::find($id);
        return view('backend.personaldetail.edit', compact('personaldetail'));
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
        $personaldetail = Personaldetail::find($id);
        $personaldetail->name = $request->name;
        $personaldetail->party = $request->party;
        $personaldetail->description = $request->description;
        $personaldetail->facebook = $request->facebook;
        $personaldetail->youtube = $request->youtube;
        $personaldetail->email = $request->email;
        $personaldetail->contact = $request->contact;
        
        if($request->hasFile('photo')){
            $file = $request->photo;
            $new = time() . '.' . $file->getClientOriginalExtension();
            $file->move('personaldetailimage', $new);
            $personaldetail->photo = "personaldetailimage/$new";
        };

        if($request->hasFile('cover')){
            $file1 = $request->cover;
            $new1 = time() . '.' . $file1->getClientOriginalExtension();
            $file1->move('personaldetailcover', $new1);
            $personaldetail->cover = "personaldetailcover/$new1";
        }

        $personaldetail->update();
  
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
        //
    }
}
