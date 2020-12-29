<?php $active = "workExperince" ?>
@extends('layouts.appU')
@section('Ucontent')

        <form method="POST" action="/experince" accept-charset="UTF-8" class="form-horizontal" id="form1">
                {{ csrf_field() }}
        <h3>  الخبرات العملية</h3>
        <div class="rwo">

                {{-- workExperince  name --}}
                <div class="form-group col-sm-7">
                        <label for="name" class="col-sm-4 control-label">مسمى الوظيفة   :</label>
                        <div class="col-sm-8">
                        <input required  class="form-control required" title="أدخل مسمى " value="{{ old('name') }}" name="name" type="text">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                </div>

                {{-- workExperince  place --}}
                <div class="form-group col-sm-5">
                        <label for="place" class="col-sm-4 control-label">جهة العمل :</label>
                        <div class="col-sm-8">
                                <input required  class="form-control required" title="أدخل جهة العمل" value="{{ old('place') }}" name="place" type="text">
                                <span class="text-danger">{{ $errors->first('place') }}</span>
                        </div>
                </div>

                {{-- workExperince  duration --}}
                <div class="form-group col-sm-7">
                        <label for="workExperinceDuration" class="col-sm-4 control-label">من :</label>
                        <div class="col-sm-8">
                        <input required  class="form-control required" title="أدخل الفترة " value="{{ old('duration_from') }}" name="duration_from" type="date">
                                <span class="text-danger">{{ $errors->first('duration_from') }}</span>
                        </div>
                </div>
                <div class="form-group col-sm-5">
                        <label for="workExperinceDuration" class="col-sm-4 control-label">إلى :</label>
                        <div class="col-sm-8">
                        <input required  class="form-control required" title="أدخل الفترة " value="{{ old('duration_to') }}" name="duration_to" type="date">
                                <span class="text-danger">{{ $errors->first('duration_to') }}</span>
                        </div>
                </div>

                {{-- workExperince  location --}}
                <div class="form-group col-sm-7">
                        <label for="name" class="col-sm-4 control-label">العنوان   :</label>
                        <div class="col-sm-8">
                                <input required  class="form-control required" title="أدخل مسمى  " value="{{ old('locaion') }}" name="locaion" type="text">
                                <span class="text-danger">{{ $errors->first('locaion') }}</span>
                        </div>
                </div>

                {{-- workExperince  place --}}
                <div class="form-group col-sm-5">
                        <label for="phone" class="col-sm-4 control-label">التلفون :</label>
                        <div class="col-sm-8">
                        <input   class="form-control required" title="أدخل جهة العمل  " value="{{ old('phone') }}" name="phone" type="number">
                                <span class="text-danger">{{ $errors->first('phone') }}</span>
                        </div>
                </div>

                {{-- workExperince  Salary --}}
                <div class="form-group col-sm-7">
                        <label for="salary" class="col-sm-4 control-label"> الراتب :</label>
                        <div class="col-sm-8">
                        <input required  class="form-control required" title="ادخل الراتب" value="{{ old('salary') }}" name="salary" type="number">
                                <span class="text-danger">{{ $errors->first('salary') }}</span>
                        </div>
                </div>


                {{-- workExperince  leave --}}
                <div class="form-group col-sm-5">
                        <label for="leaving" class="col-sm-4 control-label">سبب ترك العمل   :</label>
                        <div class="col-sm-8">
                        <input  class="form-control required" title="أدخل سبب ترك الوظيفة  " value="{{  old('leaving') }}" name="leaving" type="text">
                                <span class="text-danger">{{ $errors->first('leaving') }}</span>
                        </div>
                </div>

                {{-- workExperince  Hours --}}
                <div class="form-group col-sm-7">
                        <label for="hours" class="col-sm-4 control-label"> عددالساعات :</label>
                        <div class="col-sm-8">
                        <input required  class="form-control required" title="عدد الساعات " value="{{ old('hours') }}" name="hours" type="number">
                                <span class="text-danger">{{ $errors->first('hours') }}</span>
                        </div>
                </div>

                {{-- workExperince  Responsibility --}}
                <div class="form-group col-sm-12">
                        <label for="respnsibility" class="col-sm-12 control-label alignRight">أهم الواجبات والمسئوليات التي قمت بها اثناء عملك    :</label>
                        
                </div>


                {{-- workExperince  Responsibility --}}
                <div class="form-group col-sm-12">
                        <div class="col-sm-12">
                                <textarea rows="10" class="form-control" required title="أدخل اهم الواجبات والمسئوليات التي قمت بها " value="{{ old('respnsibility') }}" name="respnsibility"></textarea>
                                <span class="text-danger">{{ $errors->first('respnsibility') }}</span>
                        </div>
                </div>


        </div> <!-- End row -->
    </form>

    
    <div class="form-group col-sm-7">
        <button class="btn btn-info col-sm-3" type="submit" form="form1">إضافة</button>
</div>

<div class="form-group col-sm-5 pull-left needUp">
        <a href="/habbites"><button class="btn btn-success col-sm-3 pull-left">التالي</button></a>
</div>
@if (count($experince))    
        <div class="col-sm-12">
                <div class="table-responsive">
                        <table class="table table-bordered">
                                <tr>
                                        <td>مسمى الوظيفة</td>
                                        <td>جهة العمل</td>
                                        <td>من تاريخ</td>
                                        <td>إلى تاريخ</td>
                                        <td>الراتب </td>
                                        <td>خيارات </td>

                                </tr>
                                @foreach ($experince as $item)                        
                                        <tr>
                                                <td>{{ $item->name }}</td>
                                                <td>{{ $item->place }}</td>
                                                <td>{{ $item->duration_from }}</td>
                                                <td>{{ $item->duration_to }}</td>
                                                <td>{{ $item->salary }}</td>
                                                <td>
                                                        <form action="{{ route('experince.destroy',['id'=>$item->id]) }}" method="POST">
                                                                {{csrf_field()}}
                                                                {{ method_field('DELETE') }}
                                                                <button type="submit">حذف</button>
                                                        </form>
                                                </td>
                                        </tr>
                                @endforeach
                        </table>
                </div>
        </div>
@endif
@endsection