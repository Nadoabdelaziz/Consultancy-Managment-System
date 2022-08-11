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
        <li class="menu-item current-menu-item"><a href="/">{{__('Home')}}</a></li>
        
        <!-- menu item -->
        <li class="menu-item"><a href="/history.html">{{__('Account Management')}}</a></li>

        <!-- menu item -->
        <li class="menu-item menu-item-has-children">
          <a href="#.">{{__('Sentence Calculator')}}</a>
          <!-- sub menu -->
          <ul class="sub-menu">
            <!-- lvl 2 nav link -->
            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Sentence Calculator')}}</a></li>
            <!-- lvl 2 nav link -->
            <li class="menu-item"><a href="/portfolio-3-col.html">{{__('Design Your Calculator')}}</a></li>
            <!-- lvl 2 nav link -->
            <li class="menu-item"><a href="/portfolio-2-col-masonry.html">{{__('Golden Barcode Calculator')}}</a></li>
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
            <li class="menu-item"><a href="/portfolio-2-col.html">{{__('Show Prices')}}</a></li>
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
  <!-- scroll frame end -->

</div>
<!-- menu bar frame -->

</div>
