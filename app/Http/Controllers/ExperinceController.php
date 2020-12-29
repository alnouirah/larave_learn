<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\CandidateExperince;
use App\CandidateProgress;
use Auth;

class ExperinceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $experince = Auth::guard('candidate')->user()->experinces;
        return view('experince',compact('experince'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        
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
            'name'                      => 'required',
            'place'                     => 'required',
            'duration_from'             => 'required',
            'duration_to'               => 'required',
            'locaion'                   => 'required',
            'salary'                    => 'required',
            'hours'                     => 'required',
            'respnsibility'            => 'required'
        ],[
            'name.required'             => 'حقل مسمى الوظيفة يجب ان لايكون فارغاً !!',
            'place.required'            => ' حقل  جهة  العمل يجب أن  لا يكون فارغاً !! ',
            'duration_from.required'    => 'حقل تاريخ مباشرة العمل يجب ان لايكون فارغاً !!! ',
            'duration_to.required'      => 'حقل تاريخ ترك العمل يجب ان لايكون فارغاً !! ',
            'locaion.required'          => 'حقل عنوان العمل يجب ان لايكون فارغاً !! ',
            'salary.required'           => 'حق الراتب يجب ان لايكون فارغاً !! ',
            'hours.required'            => 'حقل عدد ساعات العمل يجب ان لايكون فارغاً !! ',
            'respnsibility.required'   => 'حقل اهم الواجبات والمسئوليات يجب ان لايكون فارغاً !! '
        ]);

        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        CandidateExperince::create($request->all());
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(4,Auth::guard('candidate')->user(),10);
            return redirect('experince');
        }
        if(!$progress->where('section_id',4)->count()){
            addProgress(4,Auth::guard('candidate')->user(),10);
            return redirect('experince');
        }
        return redirect('experince');
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
    public function destroy(CandidateExperince $experince)
    {
        $experince->delete();
        if(!Auth::guard('candidate')->user()->educations->count()){
            Auth::guard('candidate')->user()->progress->where('section_id',4)->first()->delete();
         }
        return redirect('experince');
    }
}
