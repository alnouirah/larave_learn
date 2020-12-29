<?php 


use App\Candidate;
use App\CandidateProgress;


function addProgress($section_id,Candidate $candidate,$value){
    CandidateProgress::create([
        'candidate_id'  =>  $candidate->id,
        'section_id'    =>  $section_id,
        'value'         =>  $value
    ]);
}
