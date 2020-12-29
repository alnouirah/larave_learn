<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;
use App\CandidateLanguages;
use App\CandidateProgress;

class LanguagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $langs = Auth::guard('candidate')->user()->languages;
        return view('languages',compact('langs'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $this->validate($request,[
            'language'          =>'required',
            'reading'           =>'required',
            'writing'           =>'required',
            'conversation'      =>'required',
        ],[
            'language.required'         =>'required',
            'reading.required'          =>'required',
            'writing.required'          =>'required',
            'conversation.required'     =>'required',
        ]);

        
        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidateLanguages::create($request->all());
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(7,Auth::guard('candidate')->user(),10);
            return redirect('languages');
        }
        if(!$progress->where('section_id',7)->count()){
            addProgress(7,Auth::guard('candidate')->user(),10);
            return redirect('languages');
        }
        return redirect('/languages');
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
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(CandidateLanguages $languages)
    {
        $languages->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
            Auth::guard('candidate')->user()->progress->where('section_id',7)->first()->delete();
         }
        return redirect('/languages');
    }
}
