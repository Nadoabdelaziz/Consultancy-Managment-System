
<div class="">

<!-- menu bar frame -->
  <div class="art-menu-bar-frame" style="width: 218px;overflow-y: scroll;">

  <!-- @if(auth()->user()) -->
      <!-- menu bar header -->
      <div class="art-menu-bar-header" style="color: tr;">
        <!-- menu bar button -->
        <a class="art-menu-bar-btn" href="#." style="width: -webkit-fill-available;background-color: gray;margin-bottom: 25px;"></a>
        <!-- menu bar button end -->
      </div>
  <!-- @endif     -->
      <!-- menu bar header end -->

      <!-- current page title -->
      <!-- <div class="art-current-page"></div> -->
        <!-- current page title end -->
        <!-- scroll frame -->
        <div class="art-scroll-frame" style="font-size: medium;text-align-last: end;">

            <!-- menu -->
            <nav id="swupMenu">
              <!-- menu list -->
              <ul class="main-menu">
                <!-- menu item -->
                <p class="menu-item current-menu-item">
                  <a href="/{{app()->getLocale()}}">{{__('Home')}}</a>
                </p>
                
                <!-- menu item -->
                <p class="menu-item">
                  <a href="{{app()->getLocale()}}/account">{{__('Account Management')}}</a>
                </p>

                <!-- menu item -->
                <!-- <li class="menu-item menu-item-has-children"> -->
                  <!-- <a href="#.">{{__('Sentence Calculator')}}</a> -->
                  <!-- sub menu -->
                  <!-- <ul class="sub-menu"> -->
                    <!-- lvl 2 nav link -->
                    <p class="menu-item">
                      <a target="_blank" href="{{app()->getLocale()}}/SentenceCalculator">{{__('Sentence Calculator')}} 
                        <i class="fa fa-calculator" aria-hidden="true"></i>
                      </a>
                    </p>
                    <!-- lvl 2 nav link -->
                    <p target="_blank" class="menu-item">
                      <a href="/portfolio-3-col.html">{{__('Design Your Calculator')}}
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                      </a>
                    </p>
                    <!-- lvl 2 nav link -->
                    <p target="_blank" class="menu-item">
                      <a href="{{app()->getLocale()}}/GoldenCalculator">{{__('Golden Barcode Calculator')}}
                        <i class="fa fa-bolt" aria-hidden="true"></i>
                      </a>
                    </p>
                  <!-- </ul> -->
                  <!-- sub menu end -->
                <!-- </li> -->

                <!-- menu item -->
                <!-- <li class="menu-item menu-item-has-children"> -->
                  <!-- <a href="#.">{{__('Services')}}</a> -->
                  <!-- sub menu -->
                  <!-- <ul class="sub-menu"> -->
                    <!-- lvl 2 nav link -->
                    <p class="menu-item">
                      <a href="{{app()->getLocale()}}/blog-post">{{__('Places Consultant')}}
                        <i class="fa fa-bar-chart" aria-hidden="true"></i>
                      </a>
                    </p>
                    <!-- lvl 2 nav link -->
                    <p class="menu-item">
                      <a href="{{app()->getLocale()}}/ProductConsultant">{{__('Product Name Consultant')}}
                        <i class="fa fa-pie-chart" aria-hidden="true"></i>
                      </a>
                    </p>
                    <!-- lvl 2 nav link -->
                    <p class="menu-item">
                      <a href="{{app()->getLocale()}}/NewBornCons">{{__('NewBorn Names Consultant')}}
                        <i class="fa fa-gamepad" aria-hidden="true"></i>
                      </a>
                    </p>
                    <!-- lvl 2 nav link -->
                    <p class="menu-item">
                      <a href="{{app()->getLocale()}}/OtherCons">{{__('Other Consultants')}}
                        <i class="fa fa-circle-thin" aria-hidden="true"></i>
                      </a>
                    </p>
                    <!-- lvl 2 nav link -->            
                  <!-- </ul> -->
                  <!-- sub menu end -->
                <!-- </li> -->

                <!-- <li class="menu-item menu-item-has-children"> -->
                  <!-- <a href="#.">{{__('special Higher Consultants')}}</a> -->
                      <!-- sub menu -->
                      <!-- <ul class="sub-menu"> -->
                        <!-- lvl 2 nav link -->
                        <p class="menu-item"><a href="{{app()->getLocale()}}/PhaiConsultant">{{__('Phai Consultant')}}</a></p>
                        <!-- lvl 2 nav link -->
                        <p class="menu-item"><a href="{{app()->getLocale()}}/goalsConsultancy">{{__('Goals Consultant')}}</a></p>
                        <!-- lvl 2 nav link -->
                        <p class="menu-item"><a href="{{app()->getLocale()}}/StrongConsultant">{{__('Strong Consultant')}}</a></p>
                      <!-- </ul> -->
                      <!-- sub menu end -->
                <!-- </li>     -->
                
              
                <!-- <li class="menu-item menu-item-has-children"> -->
                  <!-- <a href="#.">{{__('Invoices')}}</a> -->
                  <!-- sub menu -->
                  <!-- <ul class="sub-menu"> -->
                    <p class="menu-item"><a href="/portfolio-2-col.html">{{__('Provision of services')}}</a></p>
                    <p class="menu-item"><a href="/portfolio-2-col.html">{{__('Show Price')}}</a></p>
                    <p class="menu-item"><a href="/portfolio-2-col.html">{{__('Draft')}}</a></p>
                    <p class="menu-item"><a href="/portfolio-2-col.html">{{__('Payment Methods')}}</a></p>
                    <p class="menu-item"><a href="/portfolio-2-col.html">{{__('Add Balance')}}</a></p>
                  <!-- </ul> -->
                  <!-- sub menu end -->
                <!-- </li>     -->

                <!-- <li class="menu-item menu-item-has-children"> -->
                  <!-- <a href="#.">{{__('Tickets & Support')}}</a> -->
                  <!-- sub menu -->
                  <!-- <ul class="sub-menu"> -->
                    <p class="menu-item"><a href="{{app()->getLocale()}}/tickets">{{__('Tickets')}}</a></p>
                    <p class="menu-item"><a href="/portfolio-2-col.html">{{__('News & Ads')}}</a></p>
                    <p class="menu-item"><a href="/portfolio-2-col.html">{{__('Open Tickets')}}</a></p>
                  <!-- </ul> -->
                <!-- </li>  -->


                
                <!-- menu item -->
                <p class="menu-item">
                  <a href="/contact.html">{{__('Videos')}}</a>
                </p>

                <!-- menu item -->
                <!-- <li class="menu-item"><a href="/contact.html">{{__('Join Us')}}</a></li> -->

                <!-- menu item -->
                <p class="menu-item"><a href="/contact.html">{{__('Referral Points System')}}</a></p>

                <br>
                
                    <!-- menu item -->
                    <p class="menu-item current-menu-item">
                      <button class="btn-danger" href="{{app()->getLocale()}}/logout">{{__('Logout')}}</button>
                    </p>

              <!-- menu list end -->
            </nav>
            <!-- menu end -->

            <!-- language change -->
            <ul class="art-language-change">
              <!-- language item -->
              @if(app()->getLocale() == 'ar')
              <li id="arlang" class="art-active-lang">
                <a id="ar" href="{{url('ar')}}">AR</a>
              </li>
              <li id="enlang">
                <a id="en" href="{{url('en')}}">EN</a>
              </li>
              @else
              <li id="arlang"  >
                <a id="ar" href="{{url('ar')}}">AR</a>
              </li>
              <li id="enlang" class="art-active-lang">
                <a id="en" href="{{url('en')}}">EN</a>
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

<script>
    $('#ar').click(function() {
      $('#arlang').addClass('art-active-lang');
      $('#enlang').removeClass('art-active-lang');

    });

    $('#en').click(function() {
      $('#arlang').removeClass('art-active-lang');
      $('#enlang').addClass('art-active-lang');
    });

</script>
