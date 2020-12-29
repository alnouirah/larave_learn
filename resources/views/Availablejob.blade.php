@extends('layouts.joblayout')
@section('content')    
  <section class="timeLine text-center">
      <div class="container">
          @if ($availableJobs->count() > 0)
              
              <h3>الوظائف الشاغرة ..</h3>
              <p>للتقدم لإحدى الوظائف المتاحة قم فقط بالتسجيل وتعبئة سيرتك الذاتية . </p>
              <div class="row">
                  
                <table class="table text-right">
                  <thead>
                    <tr style="background: #d2d1cd">
                      <th>تاريخ النشر</th>
                      <th>اسم الوظيفة</th>
                      <th>المكان</th>
                      <th>تاريخ الانتهاء</th>
                    </tr>
                  </thead>
                  <tbody>
                  @foreach ($availableJobs as $job)   
                    <tr>
                      <td>{{ $job->created_at->format('Y-m-d') }}</td>
                      <td><a href="{{ route('available-jobs.show',['job'=>$job->id]) }}">{{ $job->title }}</a></td>
                      <td>{{ $job->location }}</td>
                      <td>{{ $job->deadline }}</td>
                    </tr>
                    @endforeach        
                  </tbody>
                </table>
              </div>
          @else
              <h2>المعذرة لا يوجد فرص متاحة للتوظيف في الوقت الحالي .  </h2>
          @endif
      </div>
  </section>
@endsection
