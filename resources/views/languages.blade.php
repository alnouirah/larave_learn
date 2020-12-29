<?php $active = "langs" ?>
@extends('layouts.appU')
@section('Ucontent')

        <form method="POST" action="/languages" accept-charset="UTF-8" class="form-horizontal" id="form1">
                        {{ csrf_field() }}
        <h3> المؤهلات الدراسية</h3>
        <div class="rwo">


            {{-- Languaes  --}}
            <div class="form-group col-sm-7">
                    <label for="language" class="col-sm-4 control-label"> اللغة :  </label>
                    <div class="col-sm-8">
                                <select class="form-control required" title="قم بإختيار اللغة "  name="language" data-placeholder="Choose a Language...">
                                        <option value="الأفريقية">الأفريقية</option>
                                        <option value="الألبانية">الألبانية</option>
                                        <option value="العربية">العربية</option>
                                        <option value="الارمينيه">الارمينيه</option>
                                        <option value="لغة الباسكي">الباسكي</option>
                                        <option value="البنغاليه">البنغاليه</option>
                                        <option value="البلغارية">البلغارية</option>
                                        <option value="الكتلونيه">الكتلونيه</option>
                                        <option value="الكمبوديه">الكمبوديه</option>
                                        <option value="الصينية">الصينية</option>
                                        <option value="الكرواتيه">الكرواتيه</option>
                                        <option value="التشيكية">التشيكية</option>
                                        <option value="الدانماركية">الدانماركية</option>
                                        <option value="الهولندية">الهولندية</option>
                                        <option value="الإنجليزية">الإنجليزية</option>
                                        <option value="الإستونية">الإستونية</option>
                                        <option value="فيجي">فيجي</option>
                                        <option value="الفلندية">الفلندية</option>
                                        <option value="الفرنسية">الفرنسية</option>
                                        <option value="الجورجية">الجورجية</option>
                                        <option value="الألمانية">الألمانية</option>
                                        <option value="الغوجاراتية">الغوجاراتية</option>
                                        <option value="العبرية">العبرية</option>
                                        <option value="الهندية">الهندية</option>
                                        <option value="الهنغارية">الهنغارية</option>
                                        <option value="الإيسلندية">الإيسلندية</option>
                                        <option value="الإندنوسية">الإندنوسية</option>
                                        <option value="الإيرلندية">الإيرلندية</option>
                                        <option value="الإيطالية">الإيطالية</option>
                                        <option value="اليابانيه">اليابانيه</option>
                                        <option value="الجاويه">الجاويه</option>
                                        <option value="الكوريه">الكوريه</option>
                                        <option value="اللاتينية">اللاتينية</option>
                                        <option value="اللاتفية">اللاتفية</option>
                                        <option value="اللتوانيه">اللتوانيه</option>
                                        <option value="المقدونيه">المقدونيه</option>
                                        <option value="الملاويه">الملاويه</option>
                                        <option value="المالايامية">المالايامية</option>
                                        <option value="المالطية">المالطية</option>
                                        <option value="الماورية">الماورية</option>
                                        <option value="المهاراتيه">المهاراتيه</option>
                                        <option value="المنغولية">المنغولية</option>
                                        <option value="النيباليه">النيباليه</option>
                                        <option value="النرويجية">النرويجية</option>
                                        <option value="الفارسية">الفارسية</option>
                                        <option value="البولنديه">البولنديه</option>
                                        <option value="البرتغاليه">البرتغاليه</option>
                                        <option value="البنجابية">البنجابية</option>
                                        <option value="الكيشويه">الكيشويه</option>
                                        <option value="الرومانيه">الرومانيه</option>
                                        <option value="الروسية">الروسية</option>
                                        <option value="ساموايه">ساموايه</option>
                                        <option value="الصربية">الصربية</option>
                                        <option value="السلوفاكيه">السلوفاكيه</option>
                                        <option value="السلوفينيه">السلوفينيه</option>
                                        <option value="الإسبانيه">الإسبانيه</option>
                                        <option value="السواحليه">السواحليه</option>
                                        <option value="السويديه">السويديه </option>
                                        <option value="لغة التاميل">لغة التاميل</option>
                                        <option value="التتارية">التتارية</option>
                                        <option value="التيلجو">التيلجو</option>
                                        <option value="التايلانديه">التايلانديه</option>
                                        <option value="التبتيه">التبتيه</option>
                                        <option value="تونجا">تونجا</option>
                                        <option value="التركيه">التركيه</option>
                                        <option value="الأوكرانيه">الأوكرانيه</option>
                                        <option value="الأرديه">الأرديه</option>
                                        <option value="الأوزركيه">الأوزركيه</option>
                                        <option value="الفيتناميه">الفيتناميه</option>
                                        <option value="الويلزية">الويلزية</option>
                                        <option value="الزوساويه">الزوساويه</option>
                                      </select>
                    </div>
            </div>

            {{-- Languaes  Read --}}
            <div class="form-group col-sm-5">
                    <label for="reading" class="col-sm-4 control-label"> مستوى القراءة :  </label>
                    <div class="col-sm-8">
                            <select class="form-control required" title="قم بإختيار مستوى القراءة  "  name="reading">
                                    <option value="جيد" selected="selected">جيد</option>
                                    <option value="متوسط">متوسط</option>
                                    <option value="ممتاز">ممتاز</option></select>
                    </div>
            </div>

            {{-- Languaes  Write --}}
            <div class="form-group col-sm-7">
                    <label for="writing" class="col-sm-4 control-label"> مستوى الكتابة :  </label>
                    <div class="col-sm-8">
                            <select class="form-control required" title="قم بإختيار مستوى الكتابة"  name="writing">
                                    <option value="جيد" selected="selected">جيد</option>
                                    <option value="متوسط">متوسط</option>
                                    <option value="ممتاز">ممتاز</option></select>
                    </div>
            </div>

            {{-- Languaes  conversation --}}
            <div class="form-group col-sm-5">
                    <label for="conversation" class="col-sm-4 control-label"> مستوى المحادثة :  </label>
                    <div class="col-sm-8">
                            <select class="form-control required" title="قم بإختيار مستوى المحادثة  "  name="conversation">
                                    <option value="جيد" selected="selected">جيد</option>
                                    <option value="متوسط">متوسط</option>
                                    <option value="ممتاز">ممتاز</option></select>
                    </div>
            </div>
        </div> <!-- End row -->
    </form>
        <div class="form-group col-sm-7">
                <button class="btn btn-info col-sm-3" form="form1">إضافة</button>
        </div>


        <div class="form-group col-sm-5 pull-left needUp">
            <a href="{{ url('/langs') }}"><button class="btn btn-success col-sm-3 pull-left">التالي</button></a>
        </div>
        @if (count($langs))            
                <div class="col-sm-12">
                        <div class="table-responsive">
                                <table class="table table-bordered">
                                        <tr>
                                                <td>اللغة</td>
                                                <td>مستوى القراءة</td>
                                                <td>مستوى الكتابة</td>
                                                <td>مستوى المحادثة</td>
                                                <td>خيارات</td>
                                        </tr>
                                        @isset($langs)                                    
                                                @foreach ($langs as $item)                                    
                                                        <tr>
                                                                <td>{{ $item->language }}</td>
                                                                <td>{{ $item->reading }}</td>
                                                                <td>{{ $item->writing }}</td>
                                                                <td>{{ $item->conversation }}</td>
                                                        <td>
                                                                <form action="{{ route('languages.destroy',['id'=>$item->id]) }}" method="POST">
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