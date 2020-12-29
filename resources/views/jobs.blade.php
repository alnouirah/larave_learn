<?php $active = 'jobs'; ?>
@extends('layouts.appU')

@section('Ucontent')
                <form method="POST" action="/jobs" accept-charset="UTF-8" class="form-horizontal" id="form1">
                        {{ csrf_field() }}
            <h3>المهن أو الحرف</h3>
            <div class="rwo">
                {{-- jobs --}}
                <div class="form-group col-sm-7">
                    <label for="full_name" class="col-sm-6 control-label alignRight">المهن أو الحرف التي تجيدها :</label>
                    <div class="col-sm-12">
                        <textarea required class="form-control" id="name" name="name"></textarea>
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    </div>
                </div>



            </div> <!-- End row -->
        </form>
        <div class="form-group col-sm-7">
                        <button class="btn btn-info col-sm-3" form="form1">إضافة</button>
                </div>
    
                <div class="form-group col-sm-5 pull-left needUp">
                        <a href="langs"><button class="btn btn-success col-sm-3 pull-left">التالي</button></a>
                </div>

                @if (count($jobs))
                        <div class="col-sm-12">
                                <div class="table-responsive">
                                        <table class="table table-bordered">
                                                <tr>
                                                        <td>الحرفة أو المهنه</td>
                                                        <td>خيارات</td>
                                                </tr>
                                                @foreach ($jobs as $item)    
                                                        <tr>
                                                                <td>{{ $item->name }}</td>
                                                        <td>
                                                                <form action="{{ route('jobs.destroy',['id'=>$item->id]) }}" method="POST">
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