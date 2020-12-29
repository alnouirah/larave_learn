<?php $active = 'habbites'; ?>
@extends('layouts.appU')

@section('Ucontent')

                <form method="POST" action="/habbites" accept-charset="UTF-8" class="form-horizontal" id="form1">
                        {{ csrf_field() }}
        <h3>الهوايات </h3>
        <div class="rwo">
                {{-- jobs --}}
                <div class="form-group col-sm-7">
                        <label for="name" class="col-sm-6 control-label alignRight">اضف بعض الهوايات التي تمارسها :</label>
                        <div class="col-sm-12">
                            <textarea required class="form-control" id="jobs" name="name"></textarea>
                        </div>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                </div>   
            


        </div> <!-- End row -->
    </form>

    <div class="form-group col-sm-7">
                <button class="btn btn-info col-sm-3" form="form1" type="submit">إضافة</button>
        </div>

        <div class="form-group col-sm-5 pull-left needUp">
                <a href="/jobs"><button class="btn btn-success col-sm-3 pull-left">التالي</button></a>
        </div>

        @if (count($habbites))
                <div class="col-sm-12">
                        <div class="table-responsive">
                                <table class="table table-bordered">
                                        <tr>
                                                <td>الهوايه</td>
                                                <td>خيارات</td>
                                        </tr>
                                        @foreach ($habbites as $item)                                            
                                                <tr>
                                                        <td>{{ $item->name }}</td>
                                                        <td>
                                                                <form action="{{ route('habbites.destroy',['id'=>$item->id]) }}" method="POST">
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