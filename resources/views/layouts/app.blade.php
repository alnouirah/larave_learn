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

        <link rel="stylesheet" href="{{ asset('css/style.css') }}" />

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

            .loginElements a{
              color: #fff;
              margin-top: 32px;
              display: inline-block;
              padding-right: 15px;
            }

          </style>
      
    </head>

    <body>
        <nav class="navbar navbar-default ">
                <div class="container-fluid">
                  <div class="row">
                      <div class="col-lg-4 col-md-8 col-sm-7"
                          style="background: #164168;color:#fff;min-height:74px;padding-top:26px;padding-right:90px">
              
                          <p style="font-size:20px"><span style="color:#ed6742">بوابة التوظيف</span> - شركة النعمان للصرافة</p>
              
                      </div>

                      <div class="col-lg-5 loginElements hidden-sm text-center">
                          @if (Route::has('candidate.login'))
                            @auth
                                  <a style="color:#fff"  href="{{ route('candidate.logout') }}">تسجيل الخروج </a>
                            @else
                          
                                <a href="{{ route('candidate.login') }}">تسجيل الدخول </a>
                            
                            @if (Route::has('register'))
                              
                                  <a href="/register">إنشاء حساب</a>
                              
                            @endif
                            @endauth
                          @endif
                      </div>
              
                      <div class="col-lg-3 col-md-4 col-sm-5 " style="padding:0;background:#fff">
                          <img width="80px" style="margin-left:7px"
                              src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcT6JGkP4pDNRsasfEYlw_FQB7tomP76AHMzuDAw7oWdCB0Iy_fp&amp;s">
                          <img width="233px" src="https://www.alnoaman.com/image/logo_ar.svg">
                      </div>
                  </div>
                </div>

              </nav>
        
        
        @yield('content')



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

              <section class="copyright text-center">
                <div class="container">
                    <p> جميع الحقوق محفوظة لدى شركة النعمان للصرافة © 2018</p>
                </div>
          </section>
        <script src="{{ asset('js/plugin.js') }}"></script>
    </body>
</html>
