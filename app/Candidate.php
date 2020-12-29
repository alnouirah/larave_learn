<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class  Candidate extends Authenticatable
{
    use Notifiable;

    protected $guard = 'candidate';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personalInfo(){
        return $this->hasOne('App\Personal');
    }

    public function progress(){
        return $this->hasMany('App\CandidateProgress');
    }

    public function educations(){
        return $this->hasMany('App\CandidateEducations');
    }

    public function trainings(){
        return $this->hasMany('App\CandidateTraining');
    }

    public function experinces(){
        return $this->hasMany('App\CandidateExperince');
    }

    public function habbites(){
        return $this->hasMany('App\CandidateHabbites');
    }

    public function jobs(){
        return $this->hasMany('App\CandidateJobs');
    }

    public function languages(){
        return $this->hasMany('App\CandidateLanguages');
    }

    public function pc(){
        return $this->hasMany('App\CandidatePc');
    }

    public function relatives(){
        return $this->hasMany('App\CandidateRelatives');
    }

    public function nonRelatives(){
        return $this->hasMany('App\CandidateNonrelatives');
    }

    public function noamanRelatives(){
        return $this->hasMany('App\CandidateNoamanRelatives');
    }
    
    public function generalInfos(){
        return $this->hasOne('App\CandidateGeneralInfo');
    }

    public function applications(){
        return $this->belongsToMany('App\Availablejob','job_applications','candidate_id','available_jobs_id');
    }
}
