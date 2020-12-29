@extends('layouts.app')

@section('content')
        <div class="home">
            <div class="container">
                <div class="row">                    
                        <div class="col-lg-12 cvUserInfo">
                                <div class="wellcomeing text-center">
                                        <div class="col-sm-4 userInfoBox">
                                            <span>&nbsp; مرحباً : &nbsp;</span> <span>  {{ Auth::guard('candidate')->user()->name }} </span>
                                            <span> &nbsp;  - الرقم الشخصي :  &nbsp;</span> <span> ( {{ Auth::guard('candidate')->user()->id }}  ) </span>
                                        </div>
                                        
                                        <div class="col-sm-8 cvElements text-left userInfoBox">
                                                    <span><a href="{{ route('candidate-home') }}" style="padding:0 12px; color:#fff"> تعديل السيرة الذاتية  </span>
                                                    <span><a href="/available-jobs" target="_blank" style="color:#fff"> الوظائف الشاغرة   </a> </span>
                                            
                                        </div>
                                </div>
                        </div>
                    <div class="clearfix"></div>
                    <div id="progress_bar" class="col-lg-12">
                        <div class="progress">
                        <div class="progress">
                            <div class="progress-bar progress-bar active" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: @if(!is_null(Auth::guard('candidate')->user()->progress)) {{ Auth::guard('candidate')->user()->progress->sum('value') }}% @else 0% @endif">
                                    اكتمل {{ $progress }}%
                            </div>
                        </div>
                    </div> 
                    <div id="progress_menu" class="col-lg-3">
                        <div class="list-group">
                            {{-- <a href="{{ route('candidate-home')         }}" class="list-group-item @if($active == "home")          {{ "active" }} @endif ">بيانات أساسية                  </a>
                            <a href="{{ route('educations.index')       }}" class="list-group-item @if($active == "educations")    {{ "active" }} @endif">المؤهلات الدراسية          </a>
                            <a href="{{ route('training.index')         }}" class="list-group-item @if($active == "training")      {{ "active" }} @endif">الدورات التدريبية            </a>
                            <a href="{{ route('experince.index')        }}" class="list-group-item @if($active == "workExperince") {{ "active" }} @endif">الخبرات العملية             </a>
                            <a href="{{ route('habbites.index')         }}" class="list-group-item @if($active == "habbites")      {{ "active" }} @endif"> الهوايات                   </a>
                            <a href="{{ route('jobs.index')             }}" class="list-group-item @if($active == "jobs")          {{ "active" }} @endif"> المهن أو الحرف التي تجيدها  </a>
                            <a href="{{ route('languages.index')        }}" class="list-group-item @if($active == "langs")         {{ "active" }} @endif">اللغات                      </a>
                            <a href="{{ route('pc.index')               }}" class="list-group-item @if($active == "pc")            {{ "active" }} @endif">مهارات الحاسوب              </a>
                            <a href="{{ route('relatives.index')        }}" class="list-group-item @if($active == "relatives")     {{ "active" }} @endif">معرفين أقارب                </a>
                            <a href="{{ route('nonRelatives.index')     }}" class="list-group-item @if($active == "nonRelatives")  {{ "active" }} @endif">معرفين غير أقارب            </a>
                            <a href="{{ route('noamanRelatives.index')  }}" class="list-group-item @if($active == "noamanRelatives"){{ "active" }} @endif">معرفين من مركز الوظيفة    </a>
                            <a href="{{ route('generalInfo.index')      }}" class="list-group-item @if($active == "generalInfo")    {{ "active" }} @endif">بيانات عامة                </a> --}}

                            <a href="{{ route('candidate-home')         }}" class="list-group-item  @if($active == "home")              {{ "active" }} @endif"> {{ __('language.personalInfo')      }} @if(!is_null($progressChecked->where('section_id',1)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('educations.index')       }}" class="list-group-item  @if($active == "educations")        {{ "active" }} @endif"> {{ __('language.educations')        }} @if(!is_null($progressChecked->where('section_id',2)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('training.index')         }}" class="list-group-item  @if($active == "training")          {{ "active" }} @endif"> {{ __('language.training')          }} @if(!is_null($progressChecked->where('section_id',3)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('experince.index')        }}" class="list-group-item  @if($active == "workExperince")     {{ "active" }} @endif"> {{ __('language.experince')         }} @if(!is_null($progressChecked->where('section_id',4)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('habbites.index')         }}" class="list-group-item  @if($active == "habbites")          {{ "active" }} @endif"> {{ __('language.habbites')          }} @if(!is_null($progressChecked->where('section_id',5)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('jobs.index')             }}" class="list-group-item  @if($active == "jobs")              {{ "active" }} @endif"> {{ __('language.jobs')              }} @if(!is_null($progressChecked->where('section_id',6)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('languages.index')        }}" class="list-group-item  @if($active == "langs")             {{ "active" }} @endif"> {{ __('language.langs')             }} @if(!is_null($progressChecked->where('section_id',7)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('pc.index')               }}" class="list-group-item  @if($active == "pc")                {{ "active" }} @endif"> {{ __('language.pc')                }} @if(!is_null($progressChecked->where('section_id',8)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('relatives.index')        }}" class="list-group-item  @if($active == "relatives")         {{ "active" }} @endif"> {{ __('language.relatives')         }} @if(!is_null($progressChecked->where('section_id',9)->first()))  <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('nonRelatives.index')     }}" class="list-group-item  @if($active == "nonRelatives")      {{ "active" }} @endif"> {{ __('language.nonrelatives')      }} @if(!is_null($progressChecked->where('section_id',10)->first())) <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('noamanRelatives.index')  }}" class="list-group-item  @if($active == "noamanRelatives")   {{ "active" }} @endif"> {{ __('language.noamanrelatives')   }} @if(!is_null($progressChecked->where('section_id',11)->first())) <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('generalInfo.index')      }}" class="list-group-item  @if($active == "generalInfo")       {{ "active" }} @endif"> {{ __('language.generalInfo')       }} @if(!is_null($progressChecked->where('section_id',12)->first())) <i class="icons icon-check"></i>    @endif  </a>
                            <a href="{{ route('applications.index')      }}" class="list-group-item  @if($active == "applications")       {{ "active" }} @endif"> {{ __('language.applications')    }} </a>
                        </div>
                    </div>

                    <div id="main" class="col-lg-9  text-right">        
                        @yield('Ucontent')
                    </div> <!-- End Main -->
                </div> <!--End Row -->
            </div>
        </div> <!-- End container -->
        </div><!-- End Home -->
        

@endsection
