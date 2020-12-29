<?php $active = "home" ?>
@extends('layouts.appU')
@section('Ucontent')


    <form method="POST" action="{{ route('candidate-home') }}" accept-charset="UTF-8" class="form-horizontal">
        {{ csrf_field() }}
        <h3>البيانات الأساسية</h3>
        <div class="rwo">
            

            {{-- Full_name --}}
            <div class="form-group col-sm-7">
                <div class="row">

                    <label for="full_name" class="col-sm-4 control-label">الاسم الرباعي :</label>
                    <div class="col-sm-8">
                    <input required  class="form-control required" title="أدخل الأسم الرباعي" name="full_name" value="{{ Auth::user()->personalInfo->full_name ?? null }}" type="text">
                    <span class="text-danger">{{ $errors->first('full_name') }}</span>
                    </div>
                </div>
            </div>

            {{-- Sure_name --}}
            <div class="form-group col-sm-5">
                <div class="row">
                    <label for="sure_name" class="col-sm-5 control-label">اللقب  :</label>
                    <div class="col-sm-7">
                        <input required  class="form-control required" title="أدخل اللقب" name="sure_name" value="{{ Auth::user()->personalInfo->sure_name ?? null }}" type="text">
                        <span class="text-danger">{{ $errors->first('sure_name') }}</span>
                    </div>
                </div>
            </div>

            {{-- Sure_name --}}
        <div class="form-group col-sm-7">
            <div class="row">
                <label for="sure_name" class="col-sm-4 control-label">الجنس:</label>
                <div class="col-sm-8">
                    <select class="form-control" title="يجب تحديد نوع الجنس" id="gender" name="gender"><option>الرجاء الاختيار</option><option selected="selected" value="ذكر">ذكر</option><option value="أنثى">أنثى</option></select>
                    <span class="text-danger">{{ $errors->first('gender') }}</span>
                </div>
            </div>
            </div>
            <div class="form-group col-sm-5">
                
            </div>

            {{-- card_id Number --}}
            <div class="form-group col-sm-7 ">
                <div class="row">
                    <label for="id_card_number" class="col-sm-4 control-label">رقم البطاقة الشخصية </label>
                    <div class="col-sm-8">
                        <input required  class="form-control required" title="أدخل رقم البطاقة الشخصية" name="id_card_number" value="{{ Auth::user()->personalInfo->id_card_number ?? null }}" type="number"  id="name">
                        <span class="text-danger">{{ $errors->first('id_card_number') }}</span>
                    </div>
                </div>
            </div>

            {{-- card_id_releas_date --}}
            <div class="form-group col-sm-5">
                <div class="row">
                    <label for="id_card_date" class="col-sm-5 control-label">تاريخ الإصدار  :</label>
                    <div class="col-sm-7">
                        <input required  class="form-control required" title="أدخل تاريخ إصدار البطاقة" name="id_card_date" type="date" value="{{ Auth::user()->personalInfo->id_card_date ?? null }}"  id="id_card_date">
                        <span class="text-danger">{{ $errors->first('id_card_date') }}</span>
                    </div>
                </div>
            </div>

            {{-- card_id_releas_place --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="id_card_place" class="col-sm-4 control-label">مكان الإصدار :</label>
                    <div class="col-sm-8">
                        <input required  class="form-control required" title="أدخل مكان إصدار البطاقة الشخصية" value="{{ Auth::user()->personalInfo->id_card_place ?? null }}" name="id_card_place" type="text">
                        <span class="text-danger">{{ $errors->first('id_card_place') }}</span>
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-5"></div>

            {{-- socialMarital --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="socialMarital" class="col-sm-4 control-label">الحالة الإجتماعية :</label>
                    <div class="col-sm-8">
                        <select class="form-control required" title="يجب تحديد الحالة الاجتماعية" id="social_martial" name="social_martial"><option value="">الرجاء الاختيار</option><option value="أعزب" selected="selected">أعزب</option><option value="متزوج">متزوج</option><option value="أرمل">أرمل</option><option value="مطلق">مطلق</option></select>
                        <span class="text-danger">{{ $errors->first('social_martial') }}</span>
                    </div>
                </div>
            </div>


            {{-- child_number --}}
            <div class="form-group col-sm-5">
                <div class="row">
                    <label for="child_number" class="col-sm-5 control-label">عدد الأولاد :</label>
                    <div class="col-sm-7">
                        <input   class="form-control required" title="أدخل عدد الأولاد" value="{{ Auth::user()->personalInfo->child_number ?? null }}" name="child_number" type="text">
                    </div>
                </div>
            </div>

            {{-- birth_date --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="birth_date" class="col-sm-4 control-label">تاريخ الميلاد :</label>
                    <div class="col-sm-8">
                        <input required  class="form-control required" title="أدخل تاريخ الميلاد" name="birth_date" value="{{ Auth::user()->personalInfo->birth_date ?? null }}" type="date">
                        <span class="text-danger">{{ $errors->first('birth_date') }}</span>
                    </div>
                </div>
            </div>

            {{-- birth_place --}}
            <div class="form-group col-sm-5">
                <div class="row">
                    <label for="birth_place" class="col-sm-5 control-label">مكان الميلاد :</label>
                    <div class="col-sm-7">
                        <input required  class="form-control required" title="أدخل مكان الميلاد" value="{{ Auth::user()->personalInfo->birth_place ?? null }}" name="birth_place" type="text">
                        <span class="text-danger">{{ $errors->first('birth_place') }}</span>
                    </div>
                </div>
            </div>

            {{-- governorate --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="governorate" class="col-sm-4 control-label">المحافظة  :</label>
                    <div class="col-sm-8">
                        <select class="form-control required" placeholder="اختر المدينة" title="يجب اختيار المدينة"  name="governorate"><option value="1" selected="selected">صنعاء</option><option value="2">عدن</option><option value="5">تعز</option><option value="6">إب</option><option value="7">ذمار</option><option value="8">الحديدة</option><option value="9">حجة</option><option value="10">عمران</option><option value="11">الضالع</option><option value="12">ريمة</option><option value="13">البيضاء</option><option value="14">المحويت</option><option value="15">لحج</option><option value="16">امانة العاصمة</option><option value="17">الجوف</option><option value="18">المهرة</option><option value="19">حضرموت - المكلا</option><option value="20">شبوة</option><option value="21">مأرب</option><option value="22">حضرموت - سقطرى</option><option value="23">صعدة</option><option value="24">الجوف</option></select>
                        <span class="text-danger">{{ $errors->first('governorate') }}</span>
                    </div>
                </div>
            </div>
    
            {{-- city --}}
            <div class="form-group col-sm-5">
                <div class="row">
                    <label for="city" class="col-sm-5 control-label">المدينة  :</label>
                    <div class="col-sm-7">
                        <input required  class="form-control required" title="أدخل المدينة" value="{{ Auth::user()->personalInfo->city ?? null }}" name="city" type="text">
                        <span class="text-danger">{{ $errors->first('city') }}</span>
                    </div>
                </div>
            </div>

            {{-- qareah --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="qareah" class="col-sm-4 control-label">اسم القرية :</label>
                    <div class="col-sm-8"> 
                        <input required  class="form-control required" title="رجاءً قم بإدخال اسم القرية التي نشأت بها" value="{{ Auth::user()->personalInfo->village ?? null }}" name="village" type="text">
                        <span class="text-danger">{{ $errors->first('village') }}</span>
                    </div>
                </div>
            </div>



            {{-- homeType --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="homeType" class="col-sm-4 control-label"> نوع السكن : </label>
                    <div class="col-sm-8">
                        <select class="form-control required" title="قم بإختيار نوع السكن "  name="homeType"><option value="ملك" selected="selected">ملك</option><option value="إيجار">إيجار</option></select>
                        <span class="text-danger">{{ $errors->first('homeType') }}</span>
                    </div>
                </div>
            </div>

            {{-- least_work_duration --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="least_work_duration" class="col-sm-4 control-label"> أقل مدة تتعهد بالبقاء في عملك معنا بعد توظيفك :  </label>
                    <div class="col-sm-8">
                        <select class="form-control required" title="قم بإختيار المدرة "  name="least_work_duration"><option value="1" selected="selected">سنه واحدة</option><option value="2">سنتان</option><option value="3">ثلاث سنوات وأكثر</option></select>
                        <span class="text-danger">{{ $errors->first('least_work_duration') }}</span>
                    </div>
                </div>
            </div>

            {{-- home --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="ultimate_home" class="col-sm-4 control-label">العنوان الدائم</label>
                    <div class="col-sm-8">
                        <input required  class="form-control required" value="{{ Auth::user()->personalInfo->ultimate_home ?? null }}" title="أدخل بإدخال عنوان الإقامة الدائم" name="ultimate_home" type="text">
                        <span class="text-danger">{{ $errors->first('ultimate_home') }}</span>
                    </div>
                </div>
            </div>

            {{-- phone_home --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="phone_home" class="col-sm-4 control-label">هاتف : ( منزل )</label>
                    <div class="col-sm-8">
                        <input   class="form-control required" value="{{ Auth::user()->personalInfo->phone_home ?? null }}" title="قم بإدخال رقم الهاتف " name="phone_home" type="number">
                        
                    </div>
                </div>
            </div>

            {{-- phone_cell --}}
            <div class="form-group col-sm-5">
                <div class="row">
                    <label for="phone_cell" class="col-sm-5 control-label">هاتف : ( سيار )</label>
                    <div class="col-sm-7">
                        <input required  class="form-control required" value="{{ Auth::user()->personalInfo->phone_cell ?? null }}" title="قم بإدخال رقم الهاتف " name="phone_cell" type="number">
                    </div>
                </div>
            </div>


            {{-- face_account --}}
            <div class="form-group col-sm-7">
                <div class="row">
                    <label for="home" class="col-sm-4 control-label">حساب الفيس بوك</label>
                    <div class="col-sm-8">
                        <input   class="form-control required" value="{{ Auth::user()->personalInfo->face_account ?? null }}" title="أدخل بإدخال عنوان الإقامة الدائم" name="face_account" type="text">
                        <span class="text-danger">{{ $errors->first('face_account') }}</span>
                    </div>
                </div>
            </div>

            <div class="form-group col-sm-7">
                    <button class="btn btn-info col-sm-4" type="submit">حفظ</button>
            </div>
        </div> <!-- End row -->

    </form>

@endsection