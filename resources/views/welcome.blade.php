<!DOCTYPE html>
<html>
    <head>
        <title>التوظيف</title>
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, maximum-scale=1"
        />
        
        <!-- Latest compiled and minified CSS -->
        <link
            rel="stylesheet"
            href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
            integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u"
            crossorigin="anonymous"

        />
        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/3.2.1/css/font-awesome.min.css"
            disabled
            id="fontStyle"
        />

        <link
            rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-rtl/3.4.0/css/bootstrap-rtl.min.css"
            id="bootStyle"
            disabled
        />

        <head>
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css">
          </head>

        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

        <!-- MATERIAL DESIGN ICONIC FONT -->
        {{-- <link rel="stylesheet" href="{{ asset('css/material-design-iconic-font.css') }}"> --}}

        <!-- STYLE CSS -->
        {{-- <link rel="stylesheet" href="{{ asset('css/formWizard.css') }}"> --}}
    <style>
      .OtherMajors{
        display: none;
      }

      .mainSection,
      .eduSection,
      .prevSection,
      .languagesSection,
      .habbitesSection,
      .trainingSection{
        
      }

      .isoLogo{
        float: right;
        width: 66px;
        margin-top: 5px;
      }

      .bran{
        background-color: #fff!important;
        height: 82px;
        margin-left: -15px;
        padding: 0 15px;
        border: 1px solid #164168;
        width: 300px;
      }


        div::-webkit-scrollbar {
            width: 4px;
        }

        div::-webkit-scrollbar-thumb {
        background: #ed6742; 
        border-radius: 10px;
        }
    </style>

    </head>

    <body>
        <nav class="navbar navbar-default ">
            {{-- <div class="container-fluid">
                <div class="navbar-header navbar-left">
                        <div class="bran">
                             <img class="img-responsive isoLogo" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6JGkP4pDNRsasfEYlw_FQB7tomP76AHMzuDAw7oWdCB0Iy_fp&s">
                              <a class="navbar-brand" href="">
                                   <img src="https://www.alnoaman.com/image/logo_ar.svg"> 
                              </a>
                        </div>
                </div>
                <div class="container  hidden-xs">
                  <div class="row">
                    <div class="col-md-4 jobExplain">
                        <p style="font-size:20px"><span style="color:#ed6742">بوابة التوظيف</span> - شركة النعمان للصرافة</p>

                    </div>
                    <div class="col-md-4 col-md-offset-1">
                      
                    </div>
                    <div class="col-md-4"></div>
                  </div>
                </div>
            </div> --}}
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-9 col-md-8 col-sm-7"
                        style="background: #164168;color:#fff;min-height:74px;padding-top:26px;padding-right:90px">
            
                        <p style="font-size:20px"><span style="color:#ed6742">بوابة التوظيف</span> - شركة النعمان للصرافة</p>
            
                    </div>
            
                    <div class="col-lg-3 col-md-4 col-sm-5 " style="padding:0;background:#fff">
                        <img width="80px" style="margin-left:7px"
                            src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6JGkP4pDNRsasfEYlw_FQB7tomP76AHMzuDAw7oWdCB0Iy_fp&amp;s">
                        <img width="233px" src="https://www.alnoaman.com/image/logo_ar.svg">
                    </div>
                </div>
            </div>
        </nav>

        <div class="clearfix"></div>
        <section class="MainBackground" style="background:url('{{asset('image/business_background.jpg')}}')">
            {{-- <img src="{{  }}" title="mainPic" style="width:100%"/> --}}
            <div class="container">
                <div class="mainBox" style="padding:15px 0;color:#fff">
                    <div class="row text-center">

                                
                            <div class="col-lg-6"  style="background:#fff;padding: 68px 0px;max-height: 493px;overflow-y: auto;">
                                {{-- <img  class="img-responsive" src="{{asset('image/cover4.png')}}" title="training logo"/> --}}

                                

                                <div class="col-lg-4">

                                        <div>
                                            <img style="width:80px;padding-bottom:10px" src="{{ asset('image/signIn.png') }}"/>
                                        </div>
                                        <a href="{{ route('candidate.login') }}" class="btn btn-primary newTrainer" style="color: #ffffff;background-color: #ed6742;;border-color: #b7afaf;width: 150px;margin-bottom:10px">تسجيل الدخول</a>
                                        <div style="margin-bottom:10px;color:#164168">
                                            قم بتسجيل الدخول وإكمال تعبئة سيرتك الذاتية ولتكن جزءاً منا 
                                            ...
                                        </div>
                                        
                                </div>
    
                                <div class="col-lg-4">

                                    <div>
                                            <img style="width:80px;padding-bottom:10px" src="{{ asset('image/signUp.png') }}"/>
                                    </div>


                                    <a href="/register" class="btn btn-primary PreTrainer" style="color: #ffffff;background-color: #3487c7;;border-color: #b7afaf;width:150px;margin-bottom:10px">إنشاء حساب</a>

                                    <div style="margin-bottom:10px;color:#164168">
                                        
                                        إذا لم تكن تملك حساباً  !! من هنا يمكنك البدء .     
                                    </div>                                    
                                </div>
                                    
                                <div class="col-lg-4">

                                    <div>
                                            <img style="width:80px;padding-bottom:10px" src="{{ asset('image/jobs.png') }}"/>
                                    </div>


                                    <a href="/available-jobs" class="btn btn-primary PreTrainer" style="color: #ffffff;background-color: #f0bc5e;border-color: #16416836;width:150px;margin-bottom:10px;">الوظائف الشاغرة</a>

                                    <div style="margin-bottom:10px;color:#164168">
                                        تصفح الوظائف الشاغرة لدينا قد تجد ما يناسبك ..
                                    </div>

                                </div>

                                <div class="col-lg-12">
                                    <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true" style="color:#164168">
                                        
                                        <div class="panel panel-default">
                                            <div class="panel-heading" role="tab" id="headingOne" style="background: #ed6742;">
                                                <h4 class="panel-title text-right">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                                        <i class="icon-plus-sign-alt collapseOne"></i>  &nbsp; لماذا تنضم إلى فريق العمل في شركة النعمان للصرافة  
                                                </a>
                                                </h4>
                                            </div>

                                            <div id="collapseOne" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
                                                <div class="panel-body">
                                                    <ul class="list prim list-crosshairs fx animated fadeIn text-right" data-animate="fadeIn">
                                                        {{-- <li > --}}
                                                            نحن نعتز بقيمنا المؤسسية ونعمل على تعزيز التمسك بها في وذلك من خلال : 
                                                                <ul class="list prim list-ok " >
                                                                    <li>غرس ثقافة القيم والسلوكيات الوظيفية المثالية لكل منتسبي الشركة</li> <li>المساهمة المجتمعية التي تجعل كل فرد يشعر بالرضا كونه لبنة هامة في بناء اقتصاد الوطن الحبيب .</li>
                                                                    <li>بناء فريق عمل واحد يشعر بالثقة والتقدير والاحترام المتبادل  داخل كل المستويات الوظيفية  .
                                                                    </li> 
                                                                    
                                                                    <li>التحديث المستمر لمتطلبات العمل التقنية والتسويقية .</li> 
                                                                </ul> 
                                                            {{-- </li>  --}}
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="panel panel-default">
                                          <div class="panel-heading" role="tab" id="headingTwo" style="background: #3487c7;">
                                            <h4 class="panel-title text-right">
                                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                                    <i class="icon-plus-sign-alt collapseTwo"></i>  &nbsp;  خطوات تقديم طلب الحصول على فرصة عمل في شركة النعمان للصرافة 
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                            <div class="panel-body">
                                                    <ul class="list prim list-ok text-right"> 
                                                        <li class="fx animated fadeIn" data-animate="fadeIn">
                                                             زيارة موقع شركة النعمان للصرافة 
                                                        </li> 
                                                        <li class="fx animated fadeIn" data-animate="fadeIn">
                                                            القيام بإنشاء حساب جديد فيما إذا كنت تزوره للمرة الأولى أو تسجيل الدخول في حال كنت تملك حساب سابق . 
                                                        </li> 
                                                        <li class="fx animated fadeIn" data-animate="fadeIn">
                                                                قم بتعبئة البيانات الأساسية وإضافة بيانات المؤهل، والأعمال السابقة، ومجالات الأعمال التي تتقنها، وبيانات المعرفين، والبيانات العامة بشكل كامل ودقيق. 
                                                        </li> 
                                                        <li class="fx animated fadeIn" data-animate="fadeIn">
                                                             قم بالضغط على زر حفظ والتأكد من إكتمال ملفك التعريفي من خلال المؤشر الظاهر أعلى الشاشه . 
                                                        </li> 
                                                        
                                                        <li class="fx animated fadeIn" data-animate="fadeIn">
                                                               في حال توافق طلبك مع احتياجاتنا الحالية سيتم الرد عليك عبر الايميل و الهاتف. 
                                                        </li> 
                                                    </ul>
                                            </div>
                                          </div>
                                        </div>

                                        <div class="panel panel-default">
                                          <div class="panel-heading" role="tab" id="headingThree" style="background: #f0bc5e;">
                                            <h4 class="panel-title text-right">
                                              <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                                    <i class="icon-plus-sign-alt collapseThree"></i>  &nbsp;
                                                    إجراءات التوظيف في شركة النعمان للصرافة
                                              </a>
                                            </h4>
                                          </div>
                                          <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                                            <div class="panel-body">
                                                وصف القائمة الثالثه
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                </div>


                            </div> 

                            <div class="col-lg-6" style="background:#164168;padding: 70px 40px 110px 40px;">
                                <div class="col-lg-12">
                                    <h1 style="font-size:28px;margin-bottom:30px;color: #ed6742;">بوابة التوظيف لشركة النعمان للصرافة</h1>
                                    <h3>كن جزءاً منا ..</h3>
                                    <p style="line-height: 2.7;">
                                        شركة النعمان للصرافة هي مكان العمل المفضل بالنسبة للأشخاص الذين يعملون بجد و المهتمين في إحداث فرق في حياتهم العملية و المهنية. لدينا ثقافة قوية من العمل الجماعي و هي القاسم المشترك في استراتيجية أعمالنا وبيئة عملنا. نحن في تطلع دائم لإنضمام الأشخاص الحيويين و الخلاقين إلى فريق عملنا لكي نحقق معاً أهداف شركتنا.
                                    </p>
                                </div>
                                <div class="col-lg-12" style="padding-top:40px;"></div>
                            </div>

                    </div>
                </div>
            </div>

        </section>
        
        <section class="recInfoBox" style="background: #ddd !important;padding-top: 11px !important;display:none">
            <div class="container">
                    <div class="row">
                        <div class="clearfix"></div>

                        <div class="col-lg-12 text-center" style="padding-bottom:10px">
                            <button class="btn btn-primary active signButton signButtonNew" data-type="new " style=" width:45% ">متقدم جديد</button>
                            <button class="btn btn-primary signButton"                      data-type="prev" style=" width:45% ">متقدم سابق</button>
                        </div>


                        <div id="progress_bar" class="col-lg-12">
                            <div class="progress">
                                <div class="progress-bar progress-bar active" role="progressbar" aria-valuenow="0" aria-valuemin="0"
                                    aria-valuemax="100" style="width:0%">
                                    اكتمل 0%
                                </div>
                            </div>
                        </div>
                        
                        <div id="progress_menu" class="col-lg-3">
                            <div class="list-group">
                                <a href="/home" data-section="main" class="list-group-item active ">بيانات أساسية  <i class="icons icon-check mainSection" style="display:none"> </i></a>
                                <a href="educations" data-section="educations" class="list-group-item ">المؤهلات الدراسية <i class="icons icon-check eduSection" style="display:none"> </i> </a>
                                <a href="/training" data-section="training" class="list-group-item ">الدورات التدريبية ( السابقة ) <i class="icons icon-check prevSection" style="display:none"> </i> </a>
                                <a href="/langs" data-section="langs" class="list-group-item ">اللغات <i class="icons icon-check languagesSection" style="display:none"> </i> </a>
                                <a href="/pc" data-section="pc" class="list-group-item ">المهارات , الهوايات أو الحرف <i class="icons icon-check habbitesSection" style="display:none"> </i> </a>
                                <a href="/TrainingCourse" data-section="TrainingCourse" class="list-group-item ">الدورة المراد تدربها <i class="icons icon-check trainingSection" style="display:none"> </i> </a>
                            </div>
                        </div>

                        <form action="/storeNewTrainer" id="trainer" method="POST">
                            {{ csrf_field() }}
                            <div id="main" class="col-lg-9  text-right">
                                    <h3>البيانات الأساسية</h3>
                                    <div class="rwo">

                                        <div class="form-group col-sm-7">
                                            <div class="row">
                    
                                                <label for="full_name" class="col-sm-4 control-label">الاسم الرباعي :</label>
                                                <div class="col-sm-8">
                                                    <input  class="form-control" title="أدخل الأسم الرباعي" name="name"
                                                        value="" type="text">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-5">
                                            <div class="row">
                                                <label for="sureName" class="col-sm-4 control-label">الجنس:</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" title="يجب تحديد نوع الجنس" id="gender" name="gender">
                                                        <option selected="selected" disabled>الرجاء الاختيار</option>
                                                        <option value="ذكر">ذكر</option>
                                                        <option value="أنثى">أنثى</option>
                                                    </select>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group col-sm-7">
                    
                                        </div>
                    
                    
                                        <div class="form-group col-sm-7 ">
                                            <div class="row">
                                                <label for="cardIdNumber" class="col-sm-4 control-label">رقم البطاقة الشخصية </label>
                                                <div class="col-sm-8">
                                                    <input  class="form-control" title="أدخل رقم البطاقة الشخصية"
                                                        name="cardIdNumber" value="" type="number" id="name">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-5">
                                            <div class="row">
                                                <label for="cardIdDateReleas" class="col-sm-4 control-label">تاريخ الإصدار :</label>
                                                <div class="col-sm-8">
                                                    <input  class="form-control" title="أدخل تاريخ إصدار البطاقة"
                                                        name="cardIdDateReleas" type="date" value="" id="cardIdDateReleas">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-7">
                                            <div class="row">
                                                <label for="cardIdPlaceReleas" class="col-sm-4 control-label">مكان الإصدار :</label>
                                                <div class="col-sm-8">
                                                    <input  class="form-control" title="أدخل مكان إصدار البطاقة الشخصية"
                                                        value="" name="cardIdPlaceReleas" type="text">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-5"></div>
                    
                    
                                        <div class="form-group col-sm-7">
                                            <div class="row">
                                                <label for="socialMarital" class="col-sm-4 control-label">الحالة الإجتماعية :</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" title="يجب تحديد الحالة الاجتماعية"
                                                        id="marital_status" name="marital_status">
                                                        <option selected="selected" disabled>الرجاء الاختيار</option>
                                                        <option value="أعزب">أعزب</option>
                                                        <option value="متزوج">متزوج</option>
                                                        <option value="أرمل">أرمل</option>
                                                        <option value="مطلق">مطلق</option>
                                                    </select>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                    
                                        <div class="form-group col-sm-5">
                                            <div class="row">
                                                <label for="childNumber" class="col-sm-5 control-label">عدد الأولاد :</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" title="أدخل عدد الأولاد" value=""
                                                        name="childNumber" type="text">
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-7">
                                            <div class="row">
                                                <label for="birthDate" class="col-sm-4 control-label">تاريخ الميلاد :</label>
                                                <div class="col-sm-8">
                                                    <input  class="form-control" title="أدخل تاريخ الميلاد"
                                                        name="birthDate" value="" type="date">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-5">
                                            <div class="row">
                                                <label for="birthPlace" class="col-sm-5 control-label">مكان الميلاد :</label>
                                                <div class="col-sm-7">
                                                    <input class="form-control" title="أدخل مكان الميلاد" value=""
                                                        name="birthPlace" type="text">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-7">
                                            <div class="row">
                                                <label for="state" class="col-sm-4 control-label">المحافظة :</label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" placeholder="اختر المدينة"
                                                        title="يجب اختيار المدينة" name="state">
                                                        <option selected disabled >الرجاء الإختيار</option>
                                                        <option value="صنعاء">صنعاء</option>
                                                        <option value="عدن">عدن</option>
                                                        <option value="تعز">تعز</option>
                                                        <option value="إب">إب</option>
                                                        <option value="ذمار">ذمار</option>
                                                        <option value="الحديدة">الحديدة</option>
                                                        <option value="حجة">حجة</option>
                                                        <option value="عمران">عمران</option>
                                                        <option value="الضالع">الضالع</option>
                                                        <option value="ريمة">ريمة</option>
                                                        <option value="البيضاء">البيضاء</option>
                                                        <option value="المحويت">المحويت</option>
                                                        <option value="لحج">لحج</option>
                                                        <option value="امانة العاصمة">امانة العاصمة</option>
                                                        <option value="الجوف">الجوف</option>
                                                        <option value="المهرة">المهرة</option>
                                                        <option value="حضرموت - المكلا">حضرموت - المكلا</option>
                                                        <option value="شبوة">شبوة</option>
                                                        <option value="مأرب">مأرب</option>
                                                        <option value="حضرموت - سقطرى">حضرموت - سقطرى</option>
                                                        <option value="صعدة">صعدة</option>
                                                    </select>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-5">
                                            <div class="row">
                                                <label for="twon" class="col-sm-5 control-label">المدينة :</label>
                                                <div class="col-sm-7">
                                                    <input  class="form-control" title="أدخل المدينة" value=""
                                                        name="twon" type="text">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-7">
                                            <div class="row">
                                                <label for="qareah" class="col-sm-4 control-label">اسم القرية :</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control"
                                                        title="رجاءً قم بإدخال اسم القرية التي نشأت بها"  name="village"
                                                        type="text">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-7">
                                            <div class="row">
                                                <label for="hoseType" class="col-sm-4 control-label"> نوع السكن : </label>
                                                <div class="col-sm-8">
                                                    <select class="form-control" title="قم بإختيار نوع السكن " name="hoseType">
                                                        <option value="ملك" selected="selected">ملك</option>
                                                        <option value="إيجار">إيجار</option>
                                                    </select>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                    
                                        <div class="form-group col-sm-7">
                                            <div class="row">
                                                <label for="home" class="col-sm-4 control-label">العنوان الدائم</label>
                                                <div class="col-sm-8">
                                                    <input  class="form-control" title="أدخل بإدخال عنوان الإقامة الدائم" name="home" type="text">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-7">
                                                <div class="row">
                                                    <label for="phone2" class="col-sm-4 control-label">هاتف : ( سيار )</label>
                                                    <div class="col-sm-8">
                                                        <input  class="form-control" value="" title="قم بإدخال رقم الهاتف "
                                                            name="phone2" type="number">
                                                    </div>
                                                </div>
                                        </div>


                                        <div class="form-group col-sm-5">
                                            <div class="row">
                                                <label for="phone1" class="col-sm-4 control-label">هاتف : ( منزل )</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" value="" title="قم بإدخال رقم الهاتف "
                                                        name="phone1" type="number">
                    
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-7">
                                            <div class="row">
                                                <label for="home" class="col-sm-4 control-label">البريد الإلكتروني</label>
                                                <div class="col-sm-8">
                                                    <input class="form-control" title="أدخل بإدخال عنوان الإقامة الدائم"
                                                        name="facebook" type="text">
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                    
                                        <div class="form-group col-sm-5 pull-left needUp">
                                                <a href="http://jobs.alnoaman.com/training">
                                                    <button data-section="educations" class="btn btn-success col-sm-3 pull-left nextButton">التالي</button>
                                                </a>
                                        </div>
                                    </div> <!-- End row -->
                                
                            </div> <!-- End Main -->

                            <div id="educations" class="col-lg-9  text-right" style="display: none;background: #fff;">
                                            <h3> المؤهلات الدراسية</h3>
                                            <div class="rwo">
                                    
                                    
                                                <div class="form-group col-sm-7">
                                                    <label for="education" class="col-sm-4 control-label"> المؤهل : </label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control" title="قم بإختيار المؤهل  " name="education">
                                                            <option selected disabled>قم بإختيار المؤهل</option>
                                                            <option value="ثانوية عامة">ثانوية عامة</option>
                                                            <option value="دبلوم">دبلوم</option>
                                                            <option value="دبلوم عالي">دبلوم عالي</option>
                                                            <option value="بكالوريوس">بكالوريوس</option>
                                                            <option value="ماجستير">ماجستير</option>
                                                            <option value="دكتوراه">دكتوراه</option>
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                    
                                                <div class="form-group col-sm-7">
                                                    <label for="major" class="col-sm-4 control-label">التخصص :</label>
                                                    <div class="col-sm-8">
                                                        <select class="form-control Majore" title="قم بإختيار المؤهل  " name="majore">
                                                            <option value="محاسبة" selected="selected">محاسبة</option>
                                                            <option value="علوم مصرفية">علوم مصرفية</option>
                                                            <option value="علوم إدارية">علوم إدارية</option>
                                                            <option value="نظم معلومات إدارية">نظم معلومات إدارية</option>
                                                            <option value="تكنولوجيا معلومات">تكنولوجيا معلومات </option>
                                                            <option value="أخرى">أخرى</option>
                                                        </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                    
                                                <div class="form-group col-sm-5 OtherMajors">
                                                    <label for="country" class="col-sm-4 control-label">التخصص  :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" title="أدخل جهة الدراسة المتخرج منها " placeholder="قم بكتابة التخصص هنا"  value="" name="otherMajors"
                                                            type="text">
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>
                                    
                                                <div class="form-group col-sm-7">
                                                    <label for="graduatedDate" class="col-sm-4 control-label"> سنة التخرج :</label>
                                                    <div class="col-sm-8">
                                                        <input class="form-control" title="أدخل تاريخ التخرج" value=""
                                                            name="graduatedDate" type="date">
                                                        <span class="text-danger"></span>
                                                    </div>
                                                </div>

                                                <div class="form-group col-sm-7">
                                    
                                                    <label for="collages" class="col-sm-4 control-label"> إسم الجامعة :</label>
                                                    <div class="col-sm-8">
                                                            <select class="form-control" placeholder="قم بإختيار التخصص" value="" name="college">
                                                                    <option value="" disabled="" selected="">إختر</option>
                                                                    <option value="جامعة صنعاء">جامعة صنعاء</option>
                                                                    <option value="جامعة العلوم الحديثه">جامعة العلوم الحديثه</option>
                                                                    <option value="جامعة العلوم والتكنولوجيا الحديثه">جامعة العلوم والتكنولوجيا الحديثه</option>
                                                                    <option value="جامعة المستقبل">جامعة المستقبل</option>
                                                                </select>
                                                        <span class="text-danger"></span>
                                                    </div>
                                    
                                                </div>

                                                <div class="form-group col-sm-5">
                                                        <label for="country" class="col-sm-4 control-label">البلد :</label>
                                                        <div class="col-sm-8">
                                                            <select class="form-control" placeholder="قم بإختيار التخصص" value="" name="country">
                                                                <option value="" disabled="" selected="">إختر</option>
                                                                <option value="أفغانستان">أفغانستان</option>
                                                                <option value="ألبانيا">ألبانيا</option>
                                                                <option value="الجزائر">الجزائر</option>
                                                                <option value="أندورا">أندورا</option>
                                                                <option value="أنغولا">أنغولا</option>
                                                                <option value="أنتيغوا وباربودا">أنتيغوا وباربودا</option>
                                                                <option value="الأرجنتين">الأرجنتين</option>
                                                                <option value="أرمينيا">أرمينيا</option>
                                                                <option value="أستراليا">أستراليا</option>
                                                                <option value="النمسا">النمسا</option>
                                                                <option value="أذربيجان">أذربيجان</option>
                                                                <option value="البهاما">البهاما</option>
                                                                <option value="البحرين">البحرين</option>
                                                                <option value="بنغلاديش">بنغلاديش</option>
                                                                <option value="باربادوس">باربادوس</option>
                                                                <option value="بيلاروسيا">بيلاروسيا</option>
                                                                <option value="بلجيكا">بلجيكا</option>
                                                                <option value="بليز">بليز</option>
                                                                <option value="بنين">بنين</option>
                                                                <option value="بوتان">بوتان</option>
                                                                <option value="بوليفيا">بوليفيا</option>
                                                                <option value="البوسنة والهرسك ">البوسنة والهرسك </option>
                                                                <option value="بوتسوانا">بوتسوانا</option>
                                                                <option value="البرازيل">البرازيل</option>
                                                                <option value="بروناي">بروناي</option>
                                                                <option value="بلغاريا">بلغاريا</option>
                                                                <option value="بوركينا فاسو ">بوركينا فاسو </option>
                                                                <option value="بوروندي">بوروندي</option>
                                                                <option value="كمبوديا">كمبوديا</option>
                                                                <option value="الكاميرون">الكاميرون</option>
                                                                <option value="كندا">كندا</option>
                                                                <option value="الرأس الأخضر">الرأس الأخضر</option>
                                                                <option value="جمهورية أفريقيا الوسطى ">جمهورية أفريقيا الوسطى </option>
                                                                <option value="تشاد">تشاد</option>
                                                                <option value="تشيلي">تشيلي</option>
                                                                <option value="الصين">الصين</option>
                                                                <option value="كولومبيا">كولومبيا</option>
                                                                <option value="جزر القمر">جزر القمر</option>
                                                                <option value="كوستاريكا">كوستاريكا</option>
                                                                <option value="ساحل العاج">ساحل العاج</option>
                                                                <option value="كرواتيا">كرواتيا</option>
                                                                <option value="كوبا">كوبا</option>
                                                                <option value="قبرص">قبرص</option>
                                                                <option value="التشيك">التشيك</option>
                                                                <option value="جمهورية الكونغو الديمقراطية">جمهورية الكونغو الديمقراطية</option>
                                                                <option value="الدنمارك">الدنمارك</option>
                                                                <option value="جيبوتي">جيبوتي</option>
                                                                <option value="دومينيكا">دومينيكا</option>
                                                                <option value="جمهورية الدومينيكان">جمهورية الدومينيكان</option>
                                                                <option value="تيمور الشرقية ">تيمور الشرقية </option>
                                                                <option value="الإكوادور">الإكوادور</option>
                                                                <option value="مصر">مصر</option>
                                                                <option value="السلفادور">السلفادور</option>
                                                                <option value="غينيا الاستوائية">غينيا الاستوائية</option>
                                                                <option value="إريتريا">إريتريا</option>
                                                                <option value="إستونيا">إستونيا</option>
                                                                <option value="إثيوبيا">إثيوبيا</option>
                                                                <option value="فيجي">فيجي</option>
                                                                <option value="فنلندا">فنلندا</option>
                                                                <option value="فرنسا">فرنسا</option>
                                                                <option value="الغابون">الغابون</option>
                                                                <option value="غامبيا">غامبيا</option>
                                                                <option value="جورجيا">جورجيا</option>
                                                                <option value="ألمانيا">ألمانيا</option>
                                                                <option value="غانا">غانا</option>
                                                                <option value="اليونان">اليونان</option>
                                                                <option value="جرينادا">جرينادا</option>
                                                                <option value="غواتيمالا">غواتيمالا</option>
                                                                <option value="غينيا">غينيا</option>
                                                                <option value="غينيا بيساو">غينيا بيساو</option>
                                                                <option value="غويانا">غويانا</option>
                                                                <option value="هايتي">هايتي</option>
                                                                <option value="هندوراس">هندوراس</option>
                                                                <option value="المجر">المجر</option>
                                                                <option value="آيسلندا">آيسلندا</option>
                                                                <option value="الهند">الهند</option>
                                                                <option value="إندونيسيا">إندونيسيا</option>
                                                                <option value="إيران">إيران</option>
                                                                <option value="العراق">العراق</option>
                                                                <option value="جمهورية أيرلندا ">جمهورية أيرلندا </option>
                                                                <option value="فلسطين">فلسطين</option>
                                                                <option value="إيطاليا">إيطاليا</option>
                                                                <option value="جامايكا">جامايكا</option>
                                                                <option value="اليابان">اليابان</option>
                                                                <option value="الأردن">الأردن</option>
                                                                <option value="كازاخستان">كازاخستان</option>
                                                                <option value="كينيا">كينيا</option>
                                                                <option value="كيريباتي">كيريباتي</option>
                                                                <option value="الكويت">الكويت</option>
                                                                <option value="قرغيزستان">قرغيزستان</option>
                                                                <option value="لاوس">لاوس</option>
                                                                <option value="لاوس">لاوس</option>
                                                                <option value="لاتفيا">لاتفيا</option>
                                                                <option value="لبنان">لبنان</option>
                                                                <option value="ليسوتو">ليسوتو</option>
                                                                <option value="ليبيريا">ليبيريا</option>
                                                                <option value="ليبيا">ليبيا</option>
                                                                <option value="ليختنشتاين">ليختنشتاين</option>
                                                                <option value="ليتوانيا">ليتوانيا</option>
                                                                <option value="لوكسمبورغ">لوكسمبورغ</option>
                                                                <option value="مدغشقر">مدغشقر</option>
                                                                <option value="مالاوي">مالاوي</option>
                                                                <option value="ماليزيا">ماليزيا</option>
                                                                <option value="جزر المالديف">جزر المالديف</option>
                                                                <option value="مالي">مالي</option>
                                                                <option value="مالطا">مالطا</option>
                                                                <option value="جزر مارشال">جزر مارشال</option>
                                                                <option value="موريتانيا">موريتانيا</option>
                                                                <option value="موريشيوس">موريشيوس</option>
                                                                <option value="المكسيك">المكسيك</option>
                                                                <option value="مايكرونيزيا">مايكرونيزيا</option>
                                                                <option value="مولدوفا">مولدوفا</option>
                                                                <option value="موناكو">موناكو</option>
                                                                <option value="منغوليا">منغوليا</option>
                                                                <option value="الجبل الأسود">الجبل الأسود</option>
                                                                <option value="المغرب">المغرب</option>
                                                                <option value="موزمبيق">موزمبيق</option>
                                                                <option value="بورما">بورما</option>
                                                                <option value="ناميبيا">ناميبيا</option>
                                                                <option value="ناورو">ناورو</option>
                                                                <option value="نيبال">نيبال</option>
                                                                <option value="هولندا">هولندا</option>
                                                                <option value="نيوزيلندا">نيوزيلندا</option>
                                                                <option value="نيكاراجوا">نيكاراجوا</option>
                                                                <option value="النيجر">النيجر</option>
                                                                <option value="نيجيريا">نيجيريا</option>
                                                                <option value="كوريا الشمالية ">كوريا الشمالية </option>
                                                                <option value="النرويج">النرويج</option>
                                                                <option value="سلطنة عمان">سلطنة عمان</option>
                                                                <option value="باكستان">باكستان</option>
                                                                <option value="بالاو">بالاو</option>
                                                                <option value="بنما">بنما</option>
                                                                <option value="بابوا غينيا الجديدة">بابوا غينيا الجديدة</option>
                                                                <option value="باراغواي">باراغواي</option>
                                                                <option value="بيرو">بيرو</option>
                                                                <option value="الفلبين">الفلبين</option>
                                                                <option value="بولندا">بولندا</option>
                                                                <option value="البرتغال">البرتغال</option>
                                                                <option value="قطر">قطر</option>
                                                                <option value="جمهورية الكونغو">جمهورية الكونغو</option>
                                                                <option value="جمهورية مقدونيا">جمهورية مقدونيا</option>
                                                                <option value="رومانيا">رومانيا</option>
                                                                <option value="روسيا">روسيا</option>
                                                                <option value="رواندا">رواندا</option>
                                                                <option value="سانت كيتس ونيفيس">سانت كيتس ونيفيس</option>
                                                                <option value="سانت لوسيا">سانت لوسيا</option>
                                                                <option value="سانت فنسينت والجرينادينز">سانت فنسينت والجرينادينز</option>
                                                                <option value="ساموا">ساموا</option>
                                                                <option value="سان مارينو">سان مارينو</option>
                                                                <option value="ساو تومي وبرينسيب">ساو تومي وبرينسيب</option>
                                                                <option value="السعودية">السعودية</option>
                                                                <option value="السنغال">السنغال</option>
                                                                <option value="صربيا">صربيا</option>
                                                                <option value="سيشيل">سيشيل</option>
                                                                <option value="سيراليون">سيراليون</option>
                                                                <option value="سنغافورة">سنغافورة</option>
                                                                <option value="سلوفاكيا">سلوفاكيا</option>
                                                                <option value="سلوفينيا">سلوفينيا</option>
                                                                <option value="جزر سليمان">جزر سليمان</option>
                                                                <option value="الصومال">الصومال</option>
                                                                <option value="جنوب أفريقيا">جنوب أفريقيا</option>
                                                                <option value="كوريا الجنوبية">كوريا الجنوبية</option>
                                                                <option value="جنوب السودان">جنوب السودان</option>
                                                                <option value="إسبانيا">إسبانيا</option>
                                                                <option value="سريلانكا">سريلانكا</option>
                                                                <option value="السودان">السودان</option>
                                                                <option value="سورينام">سورينام</option>
                                                                <option value="سوازيلاند">سوازيلاند</option>
                                                                <option value="السويد">السويد</option>
                                                                <option value="سويسرا">سويسرا</option>
                                                                <option value="سوريا">سوريا</option>
                                                                <option value="طاجيكستان">طاجيكستان</option>
                                                                <option value="تنزانيا">تنزانيا</option>
                                                                <option value="تايلاند">تايلاند</option>
                                                                <option value="توغو">توغو</option>
                                                                <option value="تونجا">تونجا</option>
                                                                <option value="ترينيداد وتوباغو">ترينيداد وتوباغو</option>
                                                                <option value="تونس">تونس</option>
                                                                <option value="تركيا">تركيا</option>
                                                                <option value="تركمانستان">تركمانستان</option>
                                                                <option value="توفالو">توفالو</option>
                                                                <option value="أوغندا">أوغندا</option>
                                                                <option value="أوكرانيا">أوكرانيا</option>
                                                                <option value="الإمارات العربية المتحدة">الإمارات العربية المتحدة</option>
                                                                <option value="المملكة المتحدة">المملكة المتحدة</option>
                                                                <option value="الولايات المتحدة">الولايات المتحدة</option>
                                                                <option value="أوروغواي">أوروغواي</option>
                                                                <option value="أوزبكستان">أوزبكستان</option>
                                                                <option value="فانواتو">فانواتو</option>
                                                                <option value="فنزويلا">فنزويلا</option>
                                                                <option value="فيتنام">فيتنام</option>
                                                                <option value="اليمن">اليمن</option>
                                                                <option value="زامبيا">زامبيا</option>
                                                                <option value="زيمبابوي">زيمبابوي</option>
                                                            </select>
                                                            <span class="text-danger"></span>
                                                        </div>
                                                    </div>
                                    
                                    
                                    
                                    
                                    
                                            </div> <!-- End row -->
                                        
                                    
                                    
                                        <div class="form-group col-sm-5 pull-left needUp">
                                            <a href="http://jobs.alnoaman.com/training">
                                                <button data-section="training" class="btn btn-success col-sm-3 pull-left nextButton">التالي
                                                </button>
                                            </a>
                                        </div>
                                    
                            </div>
                                
                                
                            <div id="training" class="col-lg-9  text-right" style="display: none;background: #fff;">

                                        <h3>  الدورات التدريبية التي حصلت عليها مسبقاً</h3>
                                        <div class="rwo">
                                
                                
                                            <div class="form-group col-sm-7">
                                                <label for="trainingName" class="col-sm-4 control-label">إسم الدورة :</label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="trainingName" placeholder="قم بكتابة الدورات التي حصلت عليها مسبقاً هنا" rows="8"></textarea>
                                                    <span class="text-danger"></span>
                                                </div>
                                            </div>                    
                                        </div> <!-- End row -->
                                    
                                
                                    <div class="form-group col-sm-7 pull-left needUp">
                                        <a href="workExperince">
                                            <button data-section="langs" class="btn btn-success col-sm-3 pull-left nextButton">التالي</button>
                                        </a>
                                    </div>
                                
                            </div>

                            <div id="langs" class="col-lg-9  text-right" style="display: none;background: #fff;">
                                        <h3> اللغات</h3>
                                        <div class="rwo">
                                
                                
                                
                                            <div class="form-group col-sm-7">
                                                <label for="langs" class="col-sm-4 control-label"> اللغة : </label>
                                                <div class="col-sm-8">
                                                    <textarea class="form-control" name="languages" placeholder="قم بكتابة اللغات التي تجيدها هنا " rows="8"></textarea>
                                                </div>
                                            </div>
                                        </div> <!-- End row -->
                                    
                                
                                
                                    <div class="form-group col-sm-7 pull-left needUp">
                                        <a href="http://jobs.alnoaman.com/langs">
                                            <button data-section="pc" class="btn btn-success col-sm-3 pull-left nextButton">التالي</button>
                                        </a>
                                    </div>
                                
                            </div>

                            <div id="pc" class="col-lg-9  text-right" style="display: none;background: #fff;">
                                        <h3> المهارات , الهوايات أو الحرف التي تجيدها</h3>
                                        <div class="rwo">
                                
                                
                                
                                            <div class="form-group col-sm-7">
                                
                                                <label for="pcSkills" class="col-sm-4 control-label">إسم المهارة أو الهواية </label>
                                                <div class="col-sm-8">
                                                    <textarea name="habbites" class="form-control" placeholder="أدخل إسم الهاره او الهواية" rows="8"></textarea>
                                                    <span class="text-danger"></span>
                                                </div>
                                
                                            </div>
                                        </div> <!-- End row -->
                                    
                                
                                    <div class="form-group col-sm-7 pull-left needUp">
                                        <a href="http://jobs.alnoaman.com/relatives">
                                            <button data-section="TrainingCourse" class="btn btn-success col-sm-3 pull-left nextButton">التالي</button>
                                        </a>
                                    </div>
                            </div>


                            <div id="TrainingCourse" class="col-lg-9  text-right" style="display: none;background: #fff;">
                                        <h3> الدورات المتاحة حالياً للتدريب</h3>
                                        <div class="rwo">
                                
                                
                                
                                            <div class="form-group col-sm-7">
                                
                                                <label for="pcSkills" class="col-sm-4 control-label">قم بإختيار الدوره</label>
                                                <div class="col-sm-8">
                                                        <select class="form-control" name="requiredTrainingCourse">
                                                            <option value="جيد" selected="selected" disabled>قم بإختيار الدوره</option>
                                                            {{-- @foreach ($courses as $course)
                                                                <option value="{{$course->name}}">{{  $course->name }} </option>
                                                            @endforeach --}}
                                                        </select>
                                                    <span class="text-danger"></span>
                                                </div>
                                
                                            </div>
                                        </div> <!-- End row -->
                                    
                                
                                    <div class="form-group col-sm-5 pull-left needUp">
                                        <a href="http://jobs.alnoaman.com/relatives">
                                            <button type="submit" class="btn btn-primary col-sm-3 pull-left">إرسال</button>
                                        </a>
                                    </div>
                            </div>
                        </form>

                        <div class="clearfix"></div>
                        
                        <div class="previousTrainerRequest text-center" 
                            style="display:none;margin-bottom: 10px;">
                            <div class="row">
                                <div class="col-lg-4"></div>
                                <div class="col-lg-4" style="background:#fff;padding-top: 15px;padding-bottom: 22px;border-radius:8px">
                                    <form action="storePrevTrainer" method="POST">
                                        {{ csrf_field() }}
                                        <input name="email" type="text" class="form-control" placeholder="أدخل البريد الإلكتروني"><br>
                                        <select class="form-control" name="requiredTrainingCourseForPrev">
                                            <option selected disabled>قم بإختيار الدورة </option>
                                            {{-- @foreach ($courses as $course)
                                                <option>{{  $course->name }} </option>
                                            @endforeach --}}
                                        </select>
                                        <br>
                                        <button class="btn btn-primary">تسجيل</button>
                                    </form>
                                </div>
                                <div class="col-lg-4"></div>
                            </div>
                        </div>
                </div>
                    <!--End Row -->
            </div>  
        </section>


        <section class="footer">
            <div class="container">
              <div class="row">
                <div class="col-lg-3 footDiv first_foot logoDiv none">
                  <h3>نبذة عن الشركة </h3>
                  <ul>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/about-company">نبذة عن الشركة</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/alruyh-walrsalh">الرؤية والرسالة</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/prenciples-and-values">المبادئ والقيم</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/goals">الأهداف</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/work-team">فريق العمل</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/quality-policy">سياسة الجودة </a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/executive-manager-message">رسالة رئيس مجلس الإدارة</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/code-of-professional-and-ethical-conduct">ميثاق السلوك المهني والأخلاقي</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/principles-of-good-governance">مبادئ الحوكمة الرشيدة</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/social-responsibility">المسئولية الاجتماعية</a></li>
                                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/anti-money-laundering-and-terrorism-financing-policy">سياسة مكافحة غسيل الأموال وتمويل الإرهاب</a></li>
                                    <li><a href="http://alnoaman.com/awardsAndCertificates">الجوائز والشهادات</a>
                                </ul>
                </div>
                <div class="col-lg-3 second_foot footDiv none">
                  <h3>روابط سريعة </h3>
                  <ul>
                    <li><a target="blank" href="http://www.alnoaman.com/index">الرئيسية</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/aboutUs/company-profile">من نحن </a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/home/servicesAndProducts"> الخدمات  </a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/branches">الفروع</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/beAgent">كن وكيلاً</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/quick">كويك</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/news">الأخبار والفعاليات</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/contactUs">تواصل معنا</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/customerSurvay">استبيانات العملاء</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/condetions">الشروط والأحكام</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/privacy">سياسة الخصوصية</a></li>
                    <li><a target="blank" href="http://www.alnoaman.com/faq">الأسئلة المتكررة</a></li>
                  <li><a href="http://www.alnoaman.com/siteMap">خريطة الموقع</a></li>
                  </ul>
                </div>
                <div class="col-lg-3 footDiv">
    
                  <h3>قنوات التواصل  </h3>
                  <div class="row">
                    <div class="col-lg-12 none">
                      <a href="tel:00967 279099"><span> تلفون :    279099 00967  </span></a>
                      <a href="tel:00967 280411"><span>  تلفون :  280411 00967  </span></a>
                      <a href="tel:8006060"><span> الرقم المجاني: 8006060  </span></a>
                      <a href="#"><span> صندوق بريد: 3857 صنعاء </span></a><br>
                      <span class="emailSpan">  أو راسلنا على البريد الالكتروني     </span>
                      <span><a href="mailto:info@alnoaman.com">info@alnoaman.com</a>    </span><br>
                    </div>
                    <div class="pull-right footerSocial">
                      <ul>
                        <li><a href="tel:00967777545454"><i class="icon-phone"></i></a></li>
                        <li><a href="mailto:info@alnoaman.com"><i class="icon-envelope-alt"></i></a></li>
                        <li><a href="https://www.facebook.com/alnoaman"><i class="icon-facebook"></i></a></li>
                        <li><a href="https://www.youtube.com/alnoamanco"><i class="icon-youtube"></i></a></li>
                        <li><a href="https://twitter.com/alnoamanco"><i class="icon-twitter"></i></a></li>
                        <li><a href="#"><i class="icon-linkedin-sign"></i></a></li>
                        <li><a href="#"><i class="icon-instagram"></i></a></li>
                      </ul>
                    </div>
    
                  </div>
                </div>
    
    
    
                <div class="col-lg-3 subscrib footDiv none">
                  <h3>مواضيع متعلقة </h3>
                  <div class="subjects">
                    <button class="btn btn-primary">
                             مقالات 
                    </button>
    
                    <button class="btn btn-primary">
                            آخر الاخبار 
                    </button>
    
                    <button class="btn btn-primary" style="width:77px">
                             خدمات  
                    </button>
    
                    <button class="btn btn-primary">
                             قائمة الوكلاء
                    </button>
    
                    <button class="btn btn-primary" style="width:125px">
                            إكسبريس موني
                    </button>
    
                    <button class="btn btn-primary">
                            استبيانات العملاء
                    </button>
    
                    <button class="btn btn-primary">
                            شركة النعمان
                    </button>
    
    
                  </div><!-- End Subject div -->
                </div><!-- End Fourth col-lg-3 div -->
              </div> <!-- End row div -->
            </div> <!-- End container div -->
          </section>

          {{-- <section class="copyright text-center">
            <div class="container">
                <p>
                     جميع الحقوق محفوظة لدى شركة النعمان للصرافة © 2018
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                     &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                       <span>
                           @isset($numberOfVisits)
                                {{ $numberOfVisits->visits_number  }} 
                           @endisset
                        </span> 
                </p>
            </div>
        </section> --}}

        <section class="copyright text-center no-print">
            <div class="container">
              <div class="row">
                  <div class="col-lg-8 text-left">
                    <p>
                      جميع الحقوق محفوظة لدى شركة النعمان للصرافة © 2018
                    </p>
                  </div>
                  <div class="col-lg-4 text-left" style="font-weight:normal;color:#fff">
                    @isset($numberOfVisits)
                    @php
                        $num = $numberOfVisits->visits_number ;
                        $num_padded = sprintf("%09d", $num);
                        echo $num_padded
                    @endphp 
                @endisset
                  </div>
              </div> 
            </div>
      </section>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
        crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
        crossorigin="anonymous">
    </script>

    <script src="{{ asset('js/plugin.js') }}"></script>
    {{-- <script src="{{ asset('js/jquery.steps.js') }}"></script> --}}
    {{-- <script src="{{ asset('js/main.js') }}"></script> --}}
  
    <script>
          $(".collapse").on('show.bs.collapse', function(){
            let collapesIcon = this.id;
            $('.'+collapesIcon).removeClass('icon-plus-sign-alt').addClass('icon-minus-sign-alt');
         });


          $(".collapse").on('hide.bs.collapse', function(){
            let collapesIcon = this.id;
            $('.'+collapesIcon).removeClass('icon-minus-sign-alt').addClass('icon-plus-sign-alt');
         });
    </script>

</body>
</html>
