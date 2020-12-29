<?php $active = "training" ?>
@extends('layouts.appU')
@section('Ucontent')
        <form method="POST" action="/training" accept-charset="UTF-8" class="form-horizontal" id="form1">
                {{ csrf_field() }}
        
        <h3> الدورات التدريبية </h3>
        <div class="rwo">

            {{-- Training course name --}}
            <div class="form-group col-sm-7">
                <label for="name" class="col-sm-4 control-label">إسم الدورة :</label>
                <div class="col-sm-8">
                        <input class="form-control required" title="أدخل اسم الدوره " value="{{ old('name') }}" name="name" type="text">
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>
            </div>

            {{-- Training course place --}}
            <div class="form-group col-sm-5">
                <label for="place" class="col-sm-4 control-label">مكان الدورة :</label>
                <div class="col-sm-8">
                <input class="form-control required" title="أدخل مكان الدوره " value="{{ old('place') }}" name="place" type="text">
                        <span class="text-danger">{{ $errors->first('place') }}</span>
                </div>
            </div>

            {{-- Training course duration --}}
            <div class="form-group col-sm-7">
                <label for="duration" class="col-sm-4 control-label">مدة الدورة :</label>
                <div class="col-sm-8">
                        <input class="form-control required" title="أدخل مدة الدوره " value="{{ old('duration') }}" name="duration" type="text">
                        <span class="text-danger">{{ $errors->first('duration') }}</span>
                </div>
            </div>

            {{-- Training course certifcate --}}
            <div class="form-group col-sm-5">
                <label for="certificate" class="col-sm-4 control-label"> إسم الشهادة </label>
                <div class="col-sm-8">
                        <input class="form-control required" title="أدخل نوع شهادة الدوره " value="{{ old('certificate') }}" name="certificate" type="text">
                        <span class="text-danger">{{ $errors->first('certificate') }}</span>
                </div>
            </div>




        </div> <!-- End row -->
    </form>
    <div class="form-group col-sm-7">
                <button class="btn btn-info col-sm-3" value="1" type="submit" form="form1">إضافة</button>
        </div>

        <div class="form-group col-sm-5 pull-left needUp">
                <a href="workExperince"><button class="btn btn-success col-sm-3 pull-left">التالي</button></a>
        </div>

        @if (count($trainings))
            
                <div class="col-sm-12">
                        <div class="table-responsive">
                                <table class="table table-bordered">
                                        <tr>
                                                <td>الدوره</td>
                                                <td>المكان</td>
                                                <td>المدة</td>
                                                <td>نوع الشهاده</td>
                                                <td>خيارات</td>

                                        </tr>
                                        @foreach ($trainings as $item)
                                                <tr>
                                                        <td>{{ $item->name        }}</td>
                                                        <td>{{ $item->place       }}</td>
                                                        <td>{{ $item->duration    }}</td>
                                                        <td>{{ $item->certificate }}</td>
                                                        <td>
                                                                <form action="{{ route('training.destroy',['id'=>$item->id]) }}" method="POST">
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