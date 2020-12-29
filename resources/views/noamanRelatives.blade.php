<?php $active = "noamanRelatives" ?>
@extends('layouts.appU')
@section('Ucontent')
                <form method="POST" action="/noamanRelatives" accept-charset="UTF-8" class="form-horizontal" id="form1">
                        {{ csrf_field() }}
        <h3> المعرفين في مركز الوظيفة</h3>
        <p>أذكر أقرب أصدقائك إليك في مركز الوظيفة <br> الذي يمكن الإتصال بهم كمرجع عنك .</p>
        <div class="rwo">


                {{-- relative _ name  --}}
                <div class="form-group col-sm-7">
                        <label for="name" class="col-sm-4 control-label"> الأسم :  </label>
                        <div class="col-sm-8">
                                <input required  class="form-control required" title="أدخل اسم المعرف  " value="{{ old('name') }}" name="name" type="text">
                                <span class="text-danger">{{ $errors->first('name') }}</span>
                        </div>
                </div>

                {{-- relative _ Job  --}}
                <div class="form-group col-sm-5">
                        <label for="job" class="col-sm-4 control-label"> الوظيفة :  </label>
                        <div class="col-sm-8">
                                <input required  class="form-control required" title="أدخل وظيفة المعرف  " value="{{ old('job') }}" name="job" type="text">
                                <span class="text-danger">{{ $errors->first('job') }} </span>
                        </div>
                </div>

                {{-- relative _ Place  --}}
                <div class="form-group col-sm-7">
                        <label for="home" class="col-sm-4 control-label"> عنوان السكن :  </label>
                        <div class="col-sm-8">
                                <input   class="form-control required" title="أدخل عنوان المعرف  " value="{{ old('home') }}" name="home" type="text">
                                <span class="text-danger">{{ $errors->first('home') }}</span>
                        </div>
                </div>

                {{-- relative _ Phone  --}}
                <div class="form-group col-sm-5">
                        <label for="phone" class="col-sm-4 control-label"> التلفون :  </label>
                        <div class="col-sm-8">
                                <input required  class="form-control required" title="أدخل هاتف المعرف  " value="{{ old('phone') }}" name="phone" type="number">
                                <span class="text-danger">{{ $errors->first('phone') }} </span>
                        </div>
                </div>
        </div> <!-- End row -->
        
</form>
                <div class="form-group col-sm-7">
                        <button class="btn btn-info col-sm-3" type="submit" form="form1">إضافة</button>
                </div>
        
        
                <div class="form-group col-sm-5 pull-left needUp">
                        <a href="{{ url('/generalInfo') }}"><button class="btn btn-success col-sm-3 pull-left">التالي</button></a>
                </div>
                @if (count($noamanRelatives))            
                        <div class="col-sm-12">
                                <div class="table-responsive">
                                        <table class="table table-bordered">
                                                <tr>
                                                        <td>إسم المعرف</td>
                                                        <td>التلفون </td>
                                                        <td>عنوان السكن  </td>
                                                        <td>خيارات</td>
                                                </tr>
                                                @isset($noamanRelatives)                                    
                                                        @foreach ($noamanRelatives as $item)                                    
                                                                <tr>
                                                                        <td>{{ $item->name }}</td>
                                                                        <td>{{ $item->phone }}</td>
                                                                        <td>{{ $item->home }}</td>
                                                                <td>
                                                                        <form action="{{ route('noamanRelatives.destroy',['id'=>$item->id]) }}" method="POST">
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