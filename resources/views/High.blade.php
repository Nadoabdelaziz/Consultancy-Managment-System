@include('partials.head')
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
<br><br><br>
                <!-- row -->
                <div class="row p-30-0">

                  <!-- col -->
                  <div class="col-lg-12">

                    <!-- section title -->
                    <div class="art-section-title">
                      <!-- title frame -->
                      <div class="art-title-frame">
                        <!-- title -->
                        <h4>Education</h4>
                      </div>
                      <!-- title frame end -->
                    </div>
                    <!-- section title end -->

                    <!-- timeline -->
                    @include('partials.High.post')
                    <!-- timeline end -->

                  </div>
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->

              <br><br><br><br><br><br>
              <!-- container -->
              <div class="container-fluid">

                <!-- footer -->
               @include('partials.footer')
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
            <div class="art-menu-bar-header">
              <!-- menu bar button -->
              <a class="art-menu-bar-btn" href="#.">
                <!-- icon -->
                <span></span>
              </a>
              <!-- menu bar button end -->
            </div>
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
                  <li class="menu-item"><a href="/home.html">Home</a></li>
                  <!-- menu item -->
                  <li class="menu-item menu-item-has-children">
                    <a href="#.">Portfolio</a>
                    <!-- sub menu -->
                    <ul class="sub-menu">
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/portfolio-2-col.html">2 column</a></li>
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/portfolio-3-col.html">3 column</a></li>
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/portfolio-2-col-masonry.html">2 column masonry</a></li>
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/portfolio-3-col-masonry.html">3 column masonry</a></li>
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/portfolio-single.html">Single project</a></li>
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/portfolio-single-2.html">Single project 2</a></li>
                    </ul>
                    <!-- sub menu end -->
                  </li>
                  <!-- menu item -->
                  <li class="menu-item current-menu-item"><a href="/history.html">History</a></li>
                  <!-- menu item -->
                  <li class="menu-item"><a href="/contact.html">Contact</a></li>
                  <!-- menu item -->
                  <li class="menu-item menu-item-has-children">
                    <a href="#.">Blog</a>
                    <!-- sub menu -->
                    <ul class="sub-menu">
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/blog-2-col.html">2 column</a></li>
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/blog-3-col.html">3 column</a></li>
                      <!-- lvl 2 nav link -->
                      <li class="menu-item"><a href="/blog-post.html">Publication</a></li>
                    </ul>
                    <!-- sub menu end -->
                  </li>
                  <!-- menu item -->
                  <li class="menu-item"><a href="onepage.html" target="_blank">Onepage</a></li>
                </ul>
                <!-- menu list end -->
              </nav>
              <!-- menu end -->

              <!-- language change -->
              <ul class="art-language-change">
                <!-- language item -->
                <li><a href="#.">FR</a></li>
                <!-- language item -->
                <li class="art-active-lang"><a href="#.">EN</a></li>
              </ul>
              <!-- language change end -->

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
    <div class="art-preloader">
      <!-- preloader content -->
      <div class="art-preloader-content">
        <!-- title -->
        <h4>Artur Carter</h4>
        <!-- progressbar -->
        <div id="preloader" class="art-preloader-load"></div>
      </div>
      <!-- preloader content end -->
    </div>
    <!-- preloader end -->

  </div>
  <!-- app end -->
</body>

</html>
