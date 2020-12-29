<?php

namespace App\Http\Controllers;

use App\Candidate;
use App\CandidateProgress;
use Illuminate\Http\Request;
use Auth;
use App\Personal;

class CandidateController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard');
    }

    public function save(Request $request){

        $this->validate($request,[
            'full_name'              => 'required',
            'sure_name'          => 'required',
            'id_card_number'      => 'required|min:11|max:11',
            'id_card_date'  => 'required',
            'id_card_place' => 'required',
            'social_martial'    => 'required',
            'birth_date'         => 'required',
            'gender'            => 'required',
            'birth_place'        => 'required',
            'governorate'             => 'required',
            'city'              => 'required',
            'homeType'          => 'required',
            'least_work_duration'          => 'required',
            'ultimate_home'              => 'required',
            'phone_cell'              => 'required',
        ],[

            'full_name.required'              => 'يجب ملئ حق الأسم !!',
            'sure_name.required'          => 'يجب ملئ حق اللقب !!',
            'id_card_number.required'      => 'يجب ملئ حق رقم البطاقة !!',
            'id_card_number.min'           => 'يجب أن لا يقل حقل رقم البطاقة عن 11 رقم !!',
            'id_card_number.max'           => 'يجب أن لا يزيد حقل رقم البطاقة عن 11 رقم !!',            'id_card_date.required'           => 'يجب ملئ حقل تاريخ إصدار البطاقة !!',
            'gender.required'                     => 'يجب إدخال الجنس !!',
            'id_card_place.required'          => 'يجب ملئ حقل مكان إصدار البطاقة !!',
            'social_martial.required'             => 'يجب إختيار نوع الحالة !!',
            'birth_date.required'                  => 'يجب إختيار تاريخ الميلاد',
            'birth_place.required'                 => 'يجب إختيار مكان الميلاد',
            'governorate.required'                      => 'يجب ملئ حقل العاصمة',
            'city.required'                       => 'يجب ملئ حقل المدينة',
            'homeType.required'                   => 'يجب إختيار نوع السكن',
            'least_work_duration.required'                   => 'يجب إختيار اقل مدة متوقعة للعمل معنا',
            'ultimate_home.required'                       => 'يجب ملئ حقل السكن الدائم',
            'phone_cell.required'                       => 'يجب ملئ حقل هاتف التواصل !! ',
        ]);

        $personal = Auth::guard('candidate')->user()->personalInfo;
        $request['candidate_id'] = Auth::guard('candidate')->user()->id;
        is_null($personal) ? $this->addPersonalInfo($request) : $this->updatePersonalInfo($request,Auth::guard('candidate')->user());
        
        $progress = Auth::guard('candidate')->user()->progress;
        if(is_null($progress)){
            addProgress(1,Auth::guard('candidate')->user(),10);
            return redirect('educations');
        }
        if(!$progress->where('section_id',1)->count()){
            addProgress(1,Auth::guard('candidate')->user(),10);
            return redirect('educations');
        }
        return redirect('educations');
    }

    private function addPersonalInfo(Request $request){
        Personal::create($request->all());
    }

    private function updatePersonalInfo(Request $request,Candidate $candidate){
        $candidate->personalInfo->update($request->all());
    }
}
