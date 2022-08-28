

<div class="container-fluid">
  <br><br>



<!-- row -->
<div class="row p-60-0 p-lg-30-0 p-md-15-0">
  <!-- col -->
  <div class="col-lg-12">

    <!-- banner -->
    <div class="art-a art-banner" style="background-image: url(img/bg.jpg)">
      <!-- banner back -->
      <div class="art-banner-back"></div>
      <!-- banner dec -->
      <div class="art-banner-dec"></div>
      <!-- banner overlay -->
      <div class="art-banner-overlay">
        <!-- main title -->
        <div class="art-banner-title">
          <!-- title -->
          <h1 class="mb-15">{{__('Discover my Amazing Art Space!')}}</h1>
          <!-- suptitle -->
          @if(app()->getLocale() == 'en')
          <div class="art-lg-text art-code mb-25">&lt;<i>code</i>&gt; I build <span class="txt-rotate" data-period="2000"
              data-rotate='[ "web interfaces.", "ios and android applications.", "design mocups.", "automation tools." ]'></span>&lt;/<i>code</i>&gt;
            </div>
          @endif  
          <div class="art-buttons-frame">
            <!-- button -->
            <a href="/portfolio-3-col-masonry.html" class="art-btn art-btn-md"><span style="font-size: x-large;">{{__('Explore now')}}</span></a>
          </div>
        </div>
        <!-- main title end -->
        <!-- photo -->
        <img src="img/face-2-tany.png" class="art-banner-photo" alt="Your Name">
      </div>
      <!-- banner overlay end -->
    </div>
    <!-- banner end -->

  </div>
  <!-- col end -->
</div>
<!-- row end -->

</div>
<!-- container end -->