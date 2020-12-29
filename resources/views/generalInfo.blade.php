<?php $active = "generalInfo" ?>
@extends('layouts.appU')
@section('Ucontent')
        <form method="POST" action="/generalInfo" accept-charset="UTF-8" class="form-horizontal" id="form1">
                {{ csrf_field() }}


        <h3> معلومات عامة</h3>
        @if(isset($generalInfo))
                <div class="rwo">
                                <div class="col-sm-12">
                                <div class="panel panel-default">
                                        <div class="panel-heading">أجب فقط بنعم أو لا : </div>
                                        <div class="panel-body">
                                        {{-- general _ Specific  --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تفضل العمل في القطاع الخاص ؟ :  </label>
                                                <div class="col-sm-4">
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->private == "نعم") checked @endif  value="نعم" name="private" type="radio" >&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->private != "نعم") checked @endif  value="لا" name="private" type="radio" >&nbsp;&nbsp;&nbsp;<i>لا</i> 
                                                </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('private') }}</span>
                                        </div>
                
                                        {{-- general _ overTime  --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تقبل العمل بنظام النوبات أو العمل الإضافي ؟ </label>
                                                <div class="col-sm-4">
                                                        <input class="required" title="اختر أحد الخياران"  @if($generalInfo->overTime == "نعم") checked @endif value="نعم" name="overTime" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required" title="اختر أحد الخياران"  @if($generalInfo->overTime != "نعم") checked @endif value="لا"   name="overTime" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                                </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('overTime') }}</span>
                                        </div>
                
                                        {{-- general _ is_hav_Job  --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تعمل في الوقت الحالي ؟ </label>
                                                <div class="col-sm-4">
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->currentJob == "نعم") checked @endif value="نعم"   value="نعم"   name="currentJob" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->currentJob != "نعم") checked @endif value="لا"   value="لا"     name="currentJob" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                                </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('currentJob') }}</span>
                                        </div>
                
                                        {{-- general _ own _ salary  --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تمتلك اي مصدر دخل مالي ؟ </label>
                                                <div class="col-sm-4">
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->currentSalary == "نعم") checked @endif value="نعم" name="currentSalary" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->currentSalary != "نعم") checked @endif value="لا" name="currentSalary" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                                </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('currentSalary') }}</span>
                                        </div>
                
                                        {{-- general _ Other_country  --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل انت مستعد للعمل في مدينة غير مدينتك <br> إن تطلب الأمر ( عند الضروره  ) ؟ </label>
                                                <div class="col-sm-4">
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->otherCity == "نعم") checked @endif  value="نعم"  name="otherCity" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->otherCity != "نعم") checked @endif  value="لا"   name="otherCity" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                                </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('otherCity') }}</span>
                                        </div>
                
                
                                        {{-- general _ ell  --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تعاني من إعاقة أو مرض مزمن ؟ </label>
                                                <div class="col-sm-4">
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->sick == "نعم") checked @endif value="نعم" name="sick" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->sick != "نعم") checked @endif value="لا"   name="sick" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                                </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('sick') }}</span>
                                        </div>
                
                
                                        {{-- general _ khedma  --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل قدمت ملفك للخدمة المدنية ؟ </label>
                                                <div class="col-sm-4">
                                                        <input class="required"   title="اختر أحد الخياران" @if($generalInfo->kehdma == "نعم") checked @endif  value="نعم"  name="kehdma" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required"   title="اختر أحد الخياران" @if($generalInfo->kehdma != "نعم") checked @endif  value="لا"  name="kehdma" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                                </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('kehdma') }}</span>
                                        </div>
                
                
                                        {{-- general _ visa _ madaneah  --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تفكر بشراء فيزا للعمل في الخارج ؟ </label>
                                                <div class="col-sm-4">
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->visa == "نعم") checked @endif name="visa" value="نعم" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->visa != "نعم") checked @endif name="visa" value="لا" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                                </div>
                                        </div>
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('visa') }}</span>
                                        </div>
                                        
                                        
                                        {{-- general _ study   --}}
                                        <div class="form-group col-sm-12">
                                                <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تدرس حالياً في معهد او جامعة  ؟ </label>
                                                <div class="col-sm-4">
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->currentStudy == "نعم") checked @endif value="نعم"   name="currentStudy"  type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                        <input class="required" title="اختر أحد الخياران" @if($generalInfo->currentStudy != "نعم") checked @endif value="لا"     name="currentStudy"   type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                                </div>
                                        </div> 
                                        <div class="form-group col-sm-12">
                                                <span class="text-danger">{{ $errors->first('currentStudy') }}</span>
                                        </div>   
                                        </div>
                                </div>
                                </div>
                
                                <div class="col-sm-12">
                                <div class="panel panel-default">
                                        <div class="panel-heading">أجب بإختصار  : </div>
                                        <div class="panel-body">
                
                                        {{-- general  Salary --}}
                                        <div class="form-group col-sm-12">
                                                <label for="workExperinceHours" class="col-sm-4 control-label"> ماهو أقل راتب يمكنك أن تقبل به شاملاً جميع البدلات  :</label>
                                                <div class="col-sm-8">
                                                <input class="form-control required" value="{{$generalInfo->leastSalary}}" title="عدد الساعات "  name="leastSalary" type="number">
                                                        <span class="text-danger">{{ $errors->first('leastSalary') }}</span>
                                                </div>
                                        </div>
                
                                        {{-- general  cerfificate --}}
                                        <div class="form-group col-sm-12">
                                                        <label for="workExperinceCertificate" class="col-sm-4 control-label"> هل  انت قادر على توفير الضمانات المطلوبه في حال تم قبولك ؟  :</label>
                                                        <div class="col-sm-8">
                                                                <input class="form-control required" value="{{$generalInfo->guranties}}" title="عدد الساعات " name="guranties" type="text">
                                                                <span class="text-danger">{{ $errors->first('guranties') }}</span>
                                                        </div>
                                        </div>
                
                                        {{-- general  Habbites --}}
                                        <div class="form-group col-sm-12">
                                                <label for="workExperinceHours" class="col-sm-4 control-label">   ماهي هواياتك   :</label>
                                                <div class="col-sm-8">
                                                <textarea name="habbites"  class="form-control" rows="8">{{$generalInfo->habbites}}</textarea>
                                                        <span class="text-danger">{{ $errors->first('habbites') }}</span>
                                                </div>
                                        </div>
                
                                        {{-- general  project --}}
                                        <div class="form-group col-sm-12">
                                                <label for="workExperinceProject" class="col-sm-4 control-label"> هل تمتلك او تدير أي مشروع تجاري خاص بك ؟  :</label>
                                                <div class="col-sm-8">
                                                <input class="form-control required" value="{{$generalInfo->ownProject}}" title="عدد الساعات " name="ownProject" type="text">
                                                        <span class="text-danger">{{ $errors->first('ownProject') }}</span>
                                                </div>
                                        </div>
                
                                        {{-- general  englishLevel --}}
                                        <div class="form-group col-sm-12">
                                                <label for="workExperinceProject" class="col-sm-4 control-label"> هل تتقن اللغة الإنجليزية ( كتابة ومحادثة وقراءة) ؟  :</label>
                                                <div class="col-sm-8">
                                                <input class="form-control required" value="{{$generalInfo->englishLevel}}" title="عدد الساعات " name="englishLevel" type="text">
                                                        <span class="text-danger">{{ $errors->first('englishLevel') }}</span>
                                                </div>
                                        </div>
                
                
                                        {{-- general  cerfificate --}}
                                        <div class="form-group col-sm-12">
                                                <label for="workExperinceCertificate" class="col-sm-4 control-label"> هل حصلت على شهادة التخرج ؟  :</label>
                                                <div class="col-sm-8">
                                                        <input class="form-control required" value="{{$generalInfo->certificate}}" title="عدد الساعات " name="certificate" type="text">
                                                        <span class="text-danger">{{ $errors->first('certificate') }}</span>
                                                </div>
                                        </div>
                                        </div>
                                </div>
                                </div>
                
                
                                <div class="form-group col-sm-7">
                                        <button class="btn btn-info col-sm-3" type="submit">حفظ</button>
                                </div>
                        </div> <!-- End row -->
        @else
        <div class="rwo">
                        <div class="col-sm-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">أجب فقط بنعم أو لا : </div>
                                <div class="panel-body">
                                {{-- general _ Specific  --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تفضل العمل في القطاع الخاص ؟ :  </label>
                                        <div class="col-sm-4">
                                                <input class="required" title="اختر أحد الخياران"   value="نعم" name="private" type="radio" >&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required" title="اختر أحد الخياران"   value="لا" name="private" type="radio" >&nbsp;&nbsp;&nbsp;<i>لا</i> 
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('private') }}</span>
                                </div>
        
                                {{-- general _ overTime  --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تقبل العمل بنظام النوبات أو العمل الإضافي ؟ </label>
                                        <div class="col-sm-4">
                                                <input class="required" title="اختر أحد الخياران"   value="نعم" name="overTime" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required" title="اختر أحد الخياران"   value="لا"  name="overTime" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('overTime') }}</span>
                                </div>
        
                                {{-- general _ is_hav_Job  --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تعمل في الوقت الحالي ؟ </label>
                                        <div class="col-sm-4">
                                                <input class="required" title="اختر أحد الخياران"  value="نعم"   name="currentJob" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required" title="اختر أحد الخياران"  value="لا"     name="currentJob" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('currentJob') }}</span>
                                </div>
        
                                {{-- general _ own _ salary  --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تمتلك اي مصدر دخل مالي ؟ </label>
                                        <div class="col-sm-4">
                                                <input class="required" title="اختر أحد الخياران"  value="نعم" name="currentSalary" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required" title="اختر أحد الخياران"  value="لا" name="currentSalary" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('currentSalary') }}</span>
                                </div>
        
                                {{-- general _ Other_country  --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل انت مستعد للعمل في مدينة غير مدينتك <br> إن تطلب الأمر ( عند الضروره  ) ؟ </label>
                                        <div class="col-sm-4">
                                                <input class="required" title="اختر أحد الخياران"   value="نعم"  name="otherCity" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required" title="اختر أحد الخياران"   value="لا"   name="otherCity" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('otherCity') }}</span>
                                </div>
        
        
                                {{-- general _ ell  --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تعاني من إعاقة أو مرض مزمن ؟ </label>
                                        <div class="col-sm-4">
                                                <input class="required" title="اختر أحد الخياران"  value="نعم" name="sick" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required" title="اختر أحد الخياران"  value="لا"   name="sick" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('sick') }}</span>
                                </div>
        
        
                                {{-- general _ khedma  --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل قدمت ملفك للخدمة المدنية ؟ </label>
                                        <div class="col-sm-4">
                                                <input class="required"   title="اختر أحد الخياران"   value="نعم"  name="kehdma" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required"   title="اختر أحد الخياران"   value="لا"  name="kehdma" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('kehdma') }}</span>
                                </div>
        
        
                                {{-- general _ visa _ madaneah  --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تفكر بشراء فيزا للعمل في الخارج ؟ </label>
                                        <div class="col-sm-4">
                                                <input class="required" title="اختر أحد الخياران"  name="visa" value="نعم" type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required" title="اختر أحد الخياران"  name="visa" value="لا" type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                        </div>
                                </div>
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('visa') }}</span>
                                </div>
                                
                                
                                {{-- general _ study   --}}
                                <div class="form-group col-sm-12">
                                        <label for="relativesJob" class="col-sm-6 control-label alignRight"> هل تدرس حالياً في معهد او جامعة  ؟ </label>
                                        <div class="col-sm-4">
                                                <input class="required" title="اختر أحد الخياران"  value="نعم"   name="currentStudy"  type="radio">&nbsp;&nbsp;&nbsp;<i>نعم</i>
                                                <input class="required" title="اختر أحد الخياران"  value="لا"     name="currentStudy"   type="radio">&nbsp;&nbsp;&nbsp;<i>لا</i>
                                        </div>
                                </div> 
                                <div class="form-group col-sm-12">
                                        <span class="text-danger">{{ $errors->first('currentStudy') }}</span>
                                </div>   
                                </div>
                        </div>
                        </div>
        
                        <div class="col-sm-12">
                        <div class="panel panel-default">
                                <div class="panel-heading">أجب بإختصار  : </div>
                                <div class="panel-body">
        
                                {{-- general  Salary --}}
                                <div class="form-group col-sm-12">
                                        <label for="workExperinceHours" class="col-sm-4 control-label"> ماهو أقل راتب يمكنك أن تقبل به شاملاً جميع البدلات  :</label>
                                        <div class="col-sm-8">
                                        <input class="form-control required" value="" title="عدد الساعات "  name="leastSalary" type="text">
                                                <span class="text-danger">{{ $errors->first('leastSalary') }}</span>
                                        </div>
                                </div>
        
                                {{-- general  cerfificate --}}
                                <div class="form-group col-sm-12">
                                                <label for="workExperinceCertificate" class="col-sm-4 control-label"> هل  انت قادر على توفير الضمانات المطلوبه في حال قبلوك؟  :</label>
                                                <div class="col-sm-8">
                                                        <input class="form-control required" value="" title="عدد الساعات " name="guranties" type="text">
                                                        <span class="text-danger">{{ $errors->first('guranties') }}</span>
                                                </div>
                                </div>
        
                                {{-- general  Habbites --}}
                                <div class="form-group col-sm-12">
                                        <label for="workExperinceHours" class="col-sm-4 control-label">   ماهي هواياتك   :</label>
                                        <div class="col-sm-8">
                                        <textarea name="habbites"  class="form-control" rows="8"></textarea>
                                                <span class="text-danger">{{ $errors->first('habbites') }}</span>
                                        </div>
                                </div>
        
                                {{-- general  project --}}
                                <div class="form-group col-sm-12">
                                        <label for="workExperinceProject" class="col-sm-4 control-label"> هل تمتلك او تدير أي مشروع تجاري خاص بك ؟  :</label>
                                        <div class="col-sm-8">
                                        <input class="form-control required" value="" title="عدد الساعات " name="ownProject" type="text">
                                                <span class="text-danger">{{ $errors->first('ownProject') }}</span>
                                        </div>
                                </div>
        
                                {{-- general  englishLevel --}}
                                <div class="form-group col-sm-12">
                                        <label for="workExperinceProject" class="col-sm-4 control-label"> هل تتقن اللغة الإنجليزية ( كتابة ومحادثة وقراءة) ؟  :</label>
                                        <div class="col-sm-8">
                                        <input class="form-control required" value="" title="عدد الساعات " name="englishLevel" type="text">
                                                <span class="text-danger">{{ $errors->first('englishLevel') }}</span>
                                        </div>
                                </div>
        
        
                                {{-- general  cerfificate --}}
                                <div class="form-group col-sm-12">
                                        <label for="workExperinceCertificate" class="col-sm-4 control-label"> هل حصلت على شهادة التخرج ؟  :</label>
                                        <div class="col-sm-8">
                                                <input class="form-control required" value="" title="عدد الساعات " name="certificate" type="text">
                                                <span class="text-danger">{{ $errors->first('certificate') }}</span>
                                        </div>
                                </div>
                                </div>
                        </div>
                        </div>
        
        
                        <div class="form-group col-sm-7">
                                <button class="btn btn-info col-sm-3" type="submit">حفظ</button>
                        </div>
                </div> <!-- End row -->        
        @endif
    </form>

@endsection