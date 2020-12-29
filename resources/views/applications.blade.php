<?php $active = "applications" ?>
@extends('layouts.appU')
@section('Ucontent')
        <h3>الوظائف المتقدم إليها</h3>          
                <div class="col-sm-12">
                        <div class="table-responsive">
                                @if (!$applications->isEmpty())
                                        <table class="table table-bordered">
                                                <thead>
                                                        <tr>
                                                                <td>تاريخ نشر الوظيفة</td>
                                                                <td>عنوان الوظيفة</td>
                                                                <td>مكان الوظيفة</td>
                                                                <td>تاريخ الإنتهاء</td>
                                                                <td>خيارات</td>
                                                        </tr>
                                                </thead>
                                                <tbody>
                                                        @foreach (Auth::guard('candidate')->user()->applications as $application)
                                                                <tr>
                                                                        <td>{{ $application->created_at->format('Y-m-d') }}</td>
                                                                        <td>{{ $application->title }}</td>
                                                                        <td>{{ $application->location }}</td>
                                                                        <td>{{ $application->deadline }}</td>
                                                                        <td>
                                                                                <form action="{{ route('applications.destroy',['applications'=>$application->id]) }}" method="POST">
                                                                                        {{csrf_field()}}
                                                                                        {{ method_field('DELETE') }}
                                                                                        <button type="submit">حذف</button>
                                                                                </form>
                                                                        </td>
                                                                </tr>
                                                        @endforeach
                                                </tbody>
                                        </table>
                                @else
                                        <h5> لم يتم التقدم لأي وظيفة </h5>
                                @endif
                        </div>
                </div>

@endsection