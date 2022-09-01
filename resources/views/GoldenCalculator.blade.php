@include('partials.head')


<?php
// $serice_head=$_GET['var'];
// $serice_head2=$_GET['var2'];
// $serice_head3=$_GET['var3'];


?>

<body>



  <!-- app -->
  <div class="art-app">

  
    <!-- mobile top bar -->
    <div class="art-mobile-top-bar"></div>

    <!-- app wrapper -->
    <div class="art-app-wrapper">

      <!-- app container end -->
      <div class="art-app-container">
        

        <!-- info bar -->
        @foreach($consultants as $consultant) 
          @include('partials.sidebar')
        @endforeach
        <!-- info bar end -->

        <!-- content -->
        <div class="art-content" style="height: fit-content;">

          <!-- curtain -->
          <div class="art-curtain"></div>

          <!-- top background -->
          <div class="art-top-bg" style="background-image: url(img/bg.jpg)">
            <!-- overlay -->
            <div class="art-top-bg-overlay"></div>
            <!-- overlay end -->
          </div>
          <!-- top background end -->


          <!-- swup container -->
          <div class="transition-fade" id="swup">

            <!-- scroll frame -->
            <div id="scrollbar" class="art-scroll-frame">

              <!-- container -->
              <div class="container-fluid">
                  <!-- Nav -->
                <div class="row p-15-0">

                  <!-- <div class="col-lg-12">

                    <div class="art-section-title">
                      <div class="art-title-frame">
                        <h4></h4>
                      </div>

                      <div class="art-right-frame">
                        <div class="art-project-category"></div>
                      </div>
                    </div>

                  </div> -->

                  
                    <!-- col -->
                      @include('partials.Calc.goldpost')
                    <!-- col end -->                
                
                </div>
                <!-- row end -->

              </div>
              <br><br><br><br>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- pagination -->
                    <div class="art-a art-pagination">
                      <!-- button -->
                      <a href="/blog-post.html" class="art-link art-color-link art-w-chevron art-left-link"><span>Previous post</span></a>
                      <div class="art-pagination-center art-m-hidden">
                        <a class="art-link" href="/blog-3-col.html">All publications</a>
                      </div>
                      <!-- button -->
                      <a href="/blog-post.html" class="art-link art-color-link art-w-chevron"><span>Next post</span></a>
                    </div>
                    <!-- pagination end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Similar posts</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider container -->
                    <div class="swiper-container art-blog-slider" style="overflow: visible">
                      <!-- slider wrapper -->
                      <div class="swiper-wrapper">
                        <!-- slide -->
                          @include('partials.Blogs.similar')
                        <!-- slide end -->                       
                      </div>
                      <!-- slider wrapper end -->
                    </div>
                    <!-- slider container end -->

                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- slider navigation -->
                    <div class="art-slider-navigation">

                      <!-- left side -->
                      <div class="art-sn-left">

                        <!-- slider pagination -->
                        <div class="swiper-pagination"></div>

                      </div>
                      <!-- left side end -->

                      <!-- right side -->
                      <div class="art-sn-right">

                        <!-- slider navigation -->
                        <div class="art-slider-nav-frame">
                          <!-- prev -->
                          <div class="art-slider-nav art-blog-swiper-prev"><i class="fas fa-chevron-left"></i></div>
                          <!-- next -->
                          <div class="art-slider-nav art-blog-swiper-next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                        <!-- slider navigation -->

                      </div>
                      <!-- right side end -->

                    </div>
                    <!-- slider navigation end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- row -->
                <div class="row">

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/1.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/2.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/3.png" alt="brand">
                  </div>
                  <!-- col end -->

                  <!-- col -->
                  <div class="col-6 col-lg-3">
                    <!-- brand -->
                    <img class="art-brand" src="img/brands/1.png" alt="brand">
                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->
                <footer>
                  <!-- copyright -->
                  <div class="art-copy">© 2020 Artur Carter</div>
                  <!-- author ( Please! Do not delete it. You are awesome! :) -->
                  <div>Template author:&#160; <a href="https://themeforest.net/user/millerdigitaldesign" target="_blank">Nazar Miller</a></div>
                </footer>
                <!-- footer end -->

              </div>
              <!-- container end -->


            </div>
            <!-- scroll frame end -->

          </div>
          <!-- swup container end -->

        </div>
        <!-- content end -->

        <!-- menu bar -->
        <div class="art-menu-bar">

        <!-- menu bar frame -->
          <div class="art-menu-bar-frame">

              <!-- menu bar header -->
              
              <!-- menu bar header end -->

              <!-- current page title -->
              <div class="art-current-page"></div>
                <!-- current page title end -->
                <!-- scroll frame -->
                <div class="art-scroll-frame">

                    <!-- menu -->
                    <nav id="swupMenu">
                      <!-- menu list -->
                      <ul class="main-menu">
                        <!-- menu item -->
                        <li class="menu-item current-menu-item"><a href="/{{app()->getLocale()}}">{{__('Home')}}</a></li>
                        
                        <!-- menu item -->
                        <li class="menu-item"><a href="/history.html">{{__('Account Management')}}</a></li>

                        <!-- menu item -->
                        <li class="menu-item menu-item-has-children">
                          <a href="#.">{{__('Sentence Calculator')}}</a>
                          <!-- sub menu -->
                          <ul class="sub-menu">
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                              <a href="{{app()->getLocale()}}/SentenceCalculator">{{__('Sentence Calculator')}}</a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item"><a href="/portfolio-3-col.html">{{__('Design Your Calculator')}}</a></li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item"><a href="{{app()->getLocale()}}/GoldenCalculator">{{__('Golden Barcode Calculator')}}</a></li>
                          </ul>
                          <!-- sub menu end -->
                        </li>

                        <!-- menu item -->
                        <li class="menu-item menu-item-has-children">
                          <a href="#.">{{__('Services')}}</a>
                          <!-- sub menu -->
                          <ul class="sub-menu">
                            <!-- lvl 2 nav link -->
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Places Consultant')}}</a></li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Product Name Consultant')}}</a></li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('NewBorn Names Consultant')}}</a></li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Other Consultants')}}</a></li>
                            <!-- lvl 2 nav link -->            
                            <li class="menu-item menu-item-has-children">
                              <a href="#.">{{__('special Higher Consultants')}}</a>
                              <!-- sub menu -->
                              <ul class="sub-menu">
                                <!-- lvl 2 nav link -->
                                <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Phai Consultant')}}</a></li>
                                <!-- lvl 2 nav link -->
                                <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Goals Consultant')}}</a></li>
                                <!-- lvl 2 nav link -->
                                <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Strong Consultant')}}</a></li>
                              </ul>
                              <!-- sub menu end -->
                            </li>
                          </ul>
                          <!-- sub menu end -->
                        </li>
                        
                      
                        <li class="menu-item menu-item-has-children">
                          <a href="#.">{{__('Invoices')}}</a>
                          <!-- sub menu -->
                          <ul class="sub-menu">
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Provision of services')}}</a></li>
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Show Price')}}</a></li>
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Draft')}}</a></li>
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Payment Methods')}}</a></li>
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Add Balance')}}</a></li>
                          </ul>
                          <!-- sub menu end -->
                        </li>    

                        <li class="menu-item menu-item-has-children">
                          <a href="#.">{{__('Tickets & Support')}}</a>
                          <!-- sub menu -->
                          <ul class="sub-menu">
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Tickets')}}</a></li>
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('News & Ads')}}</a></li>
                            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Open Tickets')}}</a></li>
                          </ul>
                        </li> 


                        
                        <!-- menu item -->
                        <li class="menu-item"><a href="/contact.html">{{__('Videos')}}</a></li>

                        <!-- menu item -->
                        <li class="menu-item"><a href="/contact.html">{{__('Join Us')}}</a></li>

                        <!-- menu item -->
                        <li class="menu-item"><a href="/contact.html">{{__('Referral Points System')}}</a></li>

                        <br>
                        
                            <!-- menu item -->
                            <li class="menu-item current-menu-item"><a class="btn-danger" href="{{app()->getLocale()}}/logout">{{__('Logout')}}</a></li>

                      <!-- menu list end -->
                    </nav>
                    <!-- menu end -->

                    <!-- language change -->
                    <ul class="art-language-change">
                      <!-- language item -->
                      @if(app()->getLocale() == 'ar')
                      <li  class="art-active-lang">
                        <a href="{{url('ar')}}">AR</a>
                      </li>
                      <li>
                        <a href="{{url('en')}}">EN</a>
                      </li>
                      @else
                      <li >
                        <a href="{{url('ar')}}">AR</a>
                      </li>
                      <li class="art-active-lang">
                        <a href="{{url('en')}}">EN</a>
                      </li>
                      @endif
                      <!-- language item -->
                    </ul>
                    <!-- language change end -->
                </div>  
              </div>
              <!-- scroll frame end -->

          </div>
        <!-- menu bar frame -->

        </div>
        <!-- menu bar end -->

      </div>
      <!-- app container end -->

    </div>
    <!-- app wrapper end -->

    <!-- preloader -->
    @include('partials.Preloader')

    <!-- preloader end -->

  </div>
  <!-- app end -->
</body>

</html>
