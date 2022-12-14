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

                <!-- row -->
                <div class="row p-30-0">


                  <!-- col -->
                  <?php $count=0; ?>
                  @foreach($tickets as $ticket)
                    @if(auth()->user() && auth()->user()->email == $ticket->email)
                      <?php $count++; ?>
                      @include('partials.ticket.list')
                    @endif
                  @endforeach    

                  @if($count == 0)
                    @include('partials.ticket.empty')
                  @endif
                
                  <!-- col end -->

                </div>
                <!-- row end -->

              </div>
              <!-- container end -->


              <!-- footer -->
             @include('partials.footer')
              <!-- footer end -->

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
