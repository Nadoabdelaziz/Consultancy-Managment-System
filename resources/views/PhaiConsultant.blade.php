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
        <div class="art-content">

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
              @include('partials.Nav')
<br><br><br><br><br>

                <div class="row p-30-0">

                  <div class="col-lg-12">

                    <div class="art-section-title">
                      <div class="art-title-frame">
                        <h4>{{__('Phai Consultant')}}</h4>
                      </div>

                      <div class="art-right-frame">
                        <div class="art-project-category">Ui Design, Graphic</div>
                      </div>
                    </div>

                  </div>

<!-- 
                @if(isset($last_place_added))  
                  <h1>{{$last_place_added}}</h1>
                @endif   -->

                @if(isset($last_phai_added))  
                  @foreach($last_phai_added as $info)
                    <!-- col -->
                    @include('partials.Phai.post')
                    <!-- col end -->
                  @endforeach
                
                @else  
                    <!-- col -->
                      @include('partials.Phai.post')
                    <!-- col end -->
                @endif
                
                
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
        @include('partials.menu')
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
