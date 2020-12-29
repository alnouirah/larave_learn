@extends('layouts.joblayout')
@section('content')    
  <section class="timeLine">
      <div class="container">
              <div class="row">
                      <div class="col-lg-12 " style="direction:rtl;text-align:center">

                              <div class="card text-right">
                                <div style="border-bottom: 1px solid #1640683b;margin-bottom: 15px;">
                                  <h1 style="font-size: 50px;padding-bottom:16px">{{ $job->title }}</h1>
                                </div>
                                <h2 style="    margin-right: 0;
                                display: inline-block;
                                background: #164168;
                                padding: 8px;
                                color: #fff;
                                padding-left: 70px;
                                font-size: 20px;">تفاصيل الوظيفة</h2>
                                <hr>
                                <div style="padding-right: 8px">
                                  {!! $job->description !!}
                                </div>
                                <br><br>
                                
                                @if (Auth::check())
                                    @if(Auth::guard('candidate')->user()->applications->contains($job))
                                      <h5 style="background: #ed6254;
                                      display: inline-block;
                                      padding: 10px;
                                      color: #fff;
                                      font-weight: bold;">لقد قمت بالتقديم في هذه الوظيفة مسبقاً </h5>
                                    @else
                                      <a href="{{ route('available-jobs.applay',['job'=>$job->id]) }}" class="btn btn-warning" style="width:200px;margin-right:30px"> تقديم </a>
                                    @endif
                                @else 
                                      <a href="{{ route('available-jobs.applay',['job'=>$job->id]) }}" class="btn btn-warning" style="width:200px;margin-right:30px"> تقديم </a>
                                @endif
                                
                                <div style="margin-right:30px;margin-top:20px">
                                    <span>مشاركة</span><br>
                                    <!-- AddToAny BEGIN -->
                                <div class="a2a_kit a2a_kit_size_32 a2a_default_style">
                                  <a class="iconShare a2a_button_facebook"></a>
                                  <a class="iconShare a2a_button_twitter"></a>
                                  <a class="iconShare a2a_button_email"></a>
                                  <a class="iconShare a2a_button_whatsapp"></a>
                                  </div>
                                  <script async src="https://static.addtoany.com/menu/page.js"></script>

                                </div>

                              </div>

                      </div>
              </div>
          
      </div>
  </section>
@endsection   
