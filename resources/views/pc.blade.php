<?php $active = "pc" ?>
@extends('layouts.appU')
@section('Ucontent')
                <form method="POST" action="/pc" accept-charset="UTF-8" class="form-horizontal" id="form1">
                        {{ csrf_field() }}
        <h3> مهارات الحاسوب</h3>
        <div class="rwo">


            {{-- skill --}}
            <div class="form-group col-sm-7">

                    <label for="pcSkills" class="col-sm-4 control-label">إسم المهارة:</label>
                    <div class="col-sm-8">
                    <input required class="form-control required" title="أدخل جهة الدراسة المتخرج منها " value="{{ old('name') }}" name="name" type="text">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>

            </div>

            {{-- Languaes  Read --}}
            <div class="form-group col-sm-5">
                    <label for="level" class="col-sm-5 control-label"> حدد المستوى  :  </label>
                    <div class="col-sm-7">
                            <select class="form-control required" title="قم بإختيار مستوى القراءة  "  name="level">
                                    <option value="جيد" selected="selected">جيد</option>
                                    <option value="متوسط">متوسط</option>
                                    <option value="ممتاز">ممتاز</option></select>
                    </div>
                    <span class="text-danger">{{ $errors->first('level') }}</span>
            </div>
        </div> <!-- End row -->
    </form>

    <div class="form-group col-sm-7">
                <button class="btn btn-info col-sm-3" form="form1">إضافة</button>
        </div>


        <div class="form-group col-sm-5 pull-left needUp">
            <a href="{{ url('/relatives') }}"><button class="btn btn-success col-sm-3 pull-left">التالي</button></a>
        </div>
        @if (count($pc))            
                <div class="col-sm-12">
                        <div class="table-responsive">
                                <table class="table table-bordered">
                                        <tr>
                                                        <td>المهارة</td>
                                                        <td>المستوى</td>
                                                        <td>خيارات</td>
                                        </tr>
                                        @isset($pc)                                    
                                                @foreach ($pc as $item)                                    
                                                        <tr>
                                                                <td>{{ $item->name }}</td>
                                                                <td>{{ $item->level }}</td>
                                                                <td>
                                                                        <form action="{{ route('pc.destroy',['id'=>$item->id]) }}" method="POST">
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