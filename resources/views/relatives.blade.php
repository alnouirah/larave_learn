<?php $active = "relatives" ?>
@extends('layouts.appU')
@section('Ucontent')
                <form method="POST" action="/relatives" accept-charset="UTF-8" class="form-horizontal" id="form1">
                        {{ csrf_field() }}
        <h3> المعرفين الأقارب</h3>
        <p>أذكر اسماء بعض المعرفين من الاقارب مع <br> ذكر الصفة بالترتيب ( أب - أخ - عم - خال - صهر أو نسب  ).</p>
        <div class="rwo">


                {{-- relative _ name  --}}
                <div class="form-group col-sm-7">
                        <label for="name" class="col-sm-4 control-label"> الأسم :  </label>
                        <div class="col-sm-8">
                                <input class="form-control required" title="أدخل اسم المعرف" value="{{ old('name') }}" name="name" type="text">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                </div>

                {{-- relative _ Job  --}}
                <div class="form-group col-sm-5">
                        <label for="job" class="col-sm-4 control-label"> الوظيفة :  </label>
                        <div class="col-sm-8">
                                <input class="form-control required" title="أدخل وظيفة المعرف " value="{{ old('job') }}" name="job" type="text">
                                <span class="text-danger">{{ $errors->first('job') }} </span>
                        </div>
                </div>

                {{-- relative _ Place  --}}
                <div class="form-group col-sm-7">
                        <label for="home" class="col-sm-4 control-label"> عنوان السكن :  </label>
                        <div class="col-sm-8">
                                <input class="form-control required" title="أدخل عنوان المعرف" value="{{ old('home') }}" name="home" type="text">
                                <span class="text-danger">{{ $errors->first('home') }}</span>
                        </div>
                </div>

                {{-- relative _ Phone  --}}
                <div class="form-group col-sm-5">
                        <label for="phone" class="col-sm-4 control-label"> التلفون :  </label>
                        <div class="col-sm-8">
                                <input class="form-control required" title="أدخل هاتف المعرف  " value="{{ old('phone') }}" name="phone" type="number">
                                <span class="text-danger">{{ $errors->first('phone') }} </span>
                        </div>
                </div>





            {{-- relative  for user --}}
            <div class="form-group col-sm-7">
                    <label for="relativlity" class="col-sm-4 control-label"> صلة القرابة :  </label>
                    <div class="col-sm-8">
                        <select class="form-control required" title="قم صلة قرابة المعرف  "  name="relativlity">
                                <option value="أب" selected="selected">أب</option>
                                <option value="أخ">أخ</option>
                                <option value="عم">عم</option>
                                <option value="خال">خال</option>
                                <option value="صهر">صهر</option>
                                <option value="نسب">نسب</option>
                        </select>
                    </div>
            </div>

        </div> <!-- End row -->
    </form>

    <div class="form-group col-sm-7">
                <button class="btn btn-info col-sm-3"  value="1" type="submit" form="form1">إضافة</button>
        </div>


        <div class="form-group col-sm-5 pull-left needUp">
                <a href="{{ url('/nonRelatives') }}"><button class="btn btn-success col-sm-3 pull-left">التالي</button></a>
        </div>
        @if (count($relatives))            
                <div class="col-sm-12">
                        <div class="table-responsive">
                                <table class="table table-bordered">
                                        <tr>
                                                <td>إسم المعرف</td>
                                                <td>صلة القرابة </td>
                                                <td>التلفون </td>
                                                <td>عنوان السكن  </td>
                                                <td>خيارات</td>
                                        </tr>
                                        @isset($relatives)                                    
                                                @foreach ($relatives as $item)                                    
                                                        <tr>
                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->relativlity }}</td>
                                                                <td>{{ $item->phone }}</td>
                                                                <td>{{ $item->home }}</td>
                                                        <td>
                                                                <form action="{{ route('relatives.destroy',['id'=>$item->id]) }}" method="POST">
                                                                        {{csrf_field()}}
                                                                        {{ method_field('DELETE') }}
                                                                        <button type="submit">حذف</button>
                                                                </form>
                                                        </td>
                                                        </tr>
                                                @endforeach
                                        @endisset
                                </table>
                        </div>
                </div>
        @endif

@endsection