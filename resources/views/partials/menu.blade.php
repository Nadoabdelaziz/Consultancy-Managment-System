<div class="art-menu-bar art-active" style="
    min-width: 235px;
    position: relative;
">

    <!-- menu bar frame -->
    <div class="art-menu-bar-frame">

        <!-- menu bar header -->
        <div class="art-menu-bar-header" style="display:block">
            <!-- menu bar button -->
            <!-- <a class="art-menu-bar-btn art-active" href="#."> -->
            <div class="container row" style="width: auto;">
                <a class="art-menu-bar-btn" href="#."
                    style="text-align-last: center;color:white;width: -webkit-fill-available;background-color: gray;margin-bottom: 64px;">
                    <h4>783625 : {{__('Client Number')}}</h4>
                </a>
            </div>

            <!-- icon -->
            <span></span>
            </a>
            <!-- menu bar button end -->
        </div>
        <!-- menu bar header end -->

        <!-- current page title -->


        <!-- <div class="art-current-page"><a href="/home.html">Home</a></div> -->
        <!-- current page title end -->

        <!-- scroll frame -->
        <div class="art-scroll-frame" style="font-size: medium;text-align-last: end;">



            <!-- menu -->
            <nav id="swupMenu" data-swup="1">
                <!-- menu list -->
                <ul class="main-menu" style="padding: 0px;overflow-y:scroll;height: 500px;">
                    <!-- menu item -->

                    <li>

                        <div class="container row" style="/* display: inline; */width: auto;">
                            <a class="art-menu-bar-btn" href="#."
                                style="text-align-last: center;color:white;width: -webkit-fill-available;background-color: #181D33;margin-bottom: 16px;padding: 3px 0px 18px 0px;">
                                <h5>{{__('Deposit Operation')}}</h5>
                            </a>
                        </div>

                        <div class="container row" style="
    width: auto;
">

                            <a class="art-menu-bar-btn" href="#."
                                style="text-align-last: center;color:white;width: -webkit-fill-available;background-color: #181D33;margin-bottom: 25px;height: fit-content;">
                                <h2 style="font-size: 40px;font-family: inherit;float: left;">
                                    <i class="fa fa-info-circle" aria-hidden="true" style="padding-right: 16px;"></i>$
                                    00
                                </h2>
                            </a>
                        </div>
                    </li>
                    <li class="menu-item current-menu-item">
                        <a href="{{route('home',app()->getLocale())}}">{{__('Home')}}</a>
                    </li>

                    <li class="menu-item">
                        <a href="{{route('account',app()->getLocale())}}">{{__('Account Management')}}</a>
                    </li>


                    <!-- menu item -->
                    <li class="menu-item menu-item-has-children" style="padding: 12px;margin: 17px 0 26px 0;">
                        <a target="_blank" href="#" style="color: darkgray;">
                            <i class="fa fa-chevron-down" aria-hidden="true" style="float:left"></i>
                            {{__('Sentence Calculator')}} </a>
                        <!-- sub menu -->
                        <ul class="sub-menu art-active">
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a target="_blank"
                                    href="{{app()->getLocale()}}/SentenceCalculator">{{__('Sentence Calculator')}}
                                    <i class="fa fa-calculator" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{app()->getLocale()}}/CustomCalculator">{{__('Design Your Calculator')}}
                                    <i class="fa fa-calendar" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a target="_blank"
                                    href="{{app()->getLocale()}}/GoldenCalculator">{{__('Golden Barcode Calculator')}}
                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- sub menu end -->
                    </li>

                    <!-- menu item -->
                    <li class="menu-item menu-item-has-children" style="padding: 12px;margin: 17px 0 26px 0;">
                        <a target="_blank" href="#" style="color: darkgray;">
                            <i class="fa fa-chevron-down" aria-hidden="true" style="float:left"></i>
                            {{__('Services')}} </a>
                        <!-- sub menu -->
                        <ul class="sub-menu art-active">
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{route('Places',app()->getLocale())}}">{{__('Places Consultant')}}
                                    <i class="fas fa-chart-bar" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{route('Products',app()->getLocale())}}">{{__('Product Name Consultant')}}
                                    <i class="fas fa-chart-pie" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{route('NewBorns',app()->getLocale())}}">{{__('NewBorn Names Consultant')}}
                                    <i class="fa fa-gamepad" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- sub menu end -->
                    </li>

                    <!-- menu item -->
                    <li class="menu-item menu-item-has-children" style="padding: 12px;margin: 17px 0 26px 0;">
                        <a target="_blank" href="#" style="color: darkgray;">
                            <i class="fa fa-chevron-down" aria-hidden="true" style="float:left"></i>
                            {{__('special Higher Consultants')}} </a>
                        <!-- sub menu -->
                        <ul class="sub-menu art-active">
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{route('Phai',app()->getLocale())}}">
                                    <i class="fas fa-info-circle newicons" aria-hidden="true"></i>
                                    {{__('Phai Consultant')}}
                                    <i>
                                        <img src="/img/phi.png" alt="" style="width: 25px;">
                                    </i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{route('Goals',app()->getLocale())}}">
                                    <i class="fas fa-info-circle newicons" aria-hidden="true"></i>
                                    {{__('Goals Consultant')}}
                                    <i class="far fa-circle" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{route('Strongs',app()->getLocale())}}">
                                    <i class="fas fa-info-circle newicons" aria-hidden="true"></i>
                                    {{__('Strong Consultant')}}
                                    <i class="fa fa-bolt" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- sub menu end -->
                    </li>


                    <!-- menu item -->
                    <li class="menu-item menu-item-has-children" style="padding: 12px;margin: 17px 0 26px 0;">
                        <a target="_blank" href="#" style="color: darkgray;">
                            <i class="fa fa-chevron-down" aria-hidden="true" style="float:left"></i>
                            {{__('Invoices')}}</a>
                        <!-- sub menu -->
                        <ul class="sub-menu art-active">
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="/portfolio-2-col.html">
                                    <i class="fas fa-info-circle oldicons" aria-hidden="true"></i>
                                    {{__('Provision of services')}}
                                    <i class="far fa-sticky-note" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="/portfolio-2-col.html">
                                    <i class="fas fa-info-circle oldicons" aria-hidden="true"></i>
                                    {{__('Show Price')}}
                                    <i class="fab fa-rocketchat" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="/portfolio-2-col.html">
                                    <i class="fas fa-info-circle oldicons" aria-hidden="true"></i>
                                    {{__('Draft')}}
                                    <i class="far fa-newspaper" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- sub menu end -->
                    </li>


                    <!-- menu item -->
                    <li class="menu-item menu-item-has-children" style="padding: 12px;margin: 17px 0 26px 0;">
                        <a target="_blank" href="#" style="color: darkgray;">
                            <i class="fa fa-chevron-down" aria-hidden="true" style="float:left"></i>

                            {{__('Tickets & Support')}} </a>
                        <!-- sub menu -->
                        <ul class="sub-menu art-active">
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{route('Tickets',app()->getLocale())}}">
                                    <i class="fas fa-info-circle oldicons" aria-hidden="true"></i>
                                    {{__('Tickets')}}
                                    <i class="far fa-caret-square-down	" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="/portfolio-2-col.html">
                                    <i class="fas fa-info-circle oldicons" aria-hidden="true"></i>
                                    {{__('News & Ads')}}
                                    <i class="fab fa-rocketchat" aria-hidden="true"></i>
                                </a>
                            </li>
                            <!-- lvl 2 nav link -->
                            <li class="menu-item">
                                <a href="{{route('TicketList',app()->getLocale())}}">
                                    {{__('Open Tickets')}}
                                    <i class="fas fa-external-link-alt	" aria-hidden="true"></i>
                                </a>
                            </li>
                        </ul>
                        <!-- sub menu end -->
                    </li>



                    <!-- menu item -->
                    <li class="menu-item">
                        <a href="/portfolio-2-col.html">
                            {{__('Payment Methods')}}
                            <i class="fas fa-credit-card	" aria-hidden="true"></i>
                        </a>
                    </li>
                    <!-- menu item -->
                    <li class="menu-item">
                        <a href="/portfolio-2-col.html">
                            {{__('Add Balance')}}
                            <i class="far fa-closed-captioning	" aria-hidden="true"></i>
                        </a>
                    </li>


                    <li class="menu-item">
                        <a href="/contact.html">{{__('Videos')}}</a>
                    </li>
                    <li class="menu-item">
                        <a href="/contact.html">{{__('Referral Points System')}}</a>
                    </li>

                    <li class="menu-item" style="padding-top: 25px;">
                        <button class="btn-lg btn-danger" href="{{app()->getLocale()}}/logout">{{__('Logout')}}</button>
                    </li>


                    <!-- menu item -->
                    <!-- <li class="menu-item menu-item-has-children">
          <a href="#.">Blog</a>
          <ul class="sub-menu art-active">
            <li class="menu-item"><a href="/blog-2-col.html">2 column</a></li>
            <li class="menu-item"><a href="/blog-3-col.html">3 column</a></li>
            <li class="menu-item"><a href="/blog-post.html">Publication</a></li>
          </ul>
        </li> -->
                    <!-- menu item -->

                </ul>
                <!-- menu list end -->
            </nav>
            <!-- menu end -->




            <!-- language change -->
            <ul class="art-language-change">
                <!-- language item -->
                @if(app()->getLocale() == 'ar')
                <li style="padding-right: 5px;" id="arlang" class="art-active-lang">
                    <a id="ar" href="{{url('ar')}}">AR</a>
                </li>
                <li id="enlang" style="padding-right: 5px;">
                    <a id="en" href="{{url('en')}}">EN</a>
                </li>
                @else
                <li id="arlang" style="padding-right: 5px;">
                    <a id="ar" href="{{url('ar')}}">AR</a>
                </li>
                <li style="padding-right: 5px;" id="enlang" class="art-active-lang">
                    <a id="en" href="{{url('en')}}">EN</a>
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

<style>
a {
    color: white;
}

i {
    padding-left: 7px;

}

.newicons {
    padding-left: 0;
    float: left;
    color: indianred;
}

.oldicons {
    padding-left: 0;
    float: left;
    color: gold;
}

.menu-item {
    padding-right: 13px;

}
</style>