<div class="col-lg-4 col-md-6">

<!-- service -->
<div class="art-a art-service-icon-box">
  <!-- service content -->
  <div class="art-service-ib-content">
    <!-- title -->
    <h4 class="mb-15">{{__($service->header)}}</h4>
    <!-- text -->
    <div class="mb-15">{{__($service->description)}}</div>
      <!-- button -->
      <!-- <h1></h1> -->
      <div class="art-buttons-frame">
        @if(auth()->user())

            @if(auth()->user()->role_id == '3' || auth()->user()->role_id == '5' || auth()->user()->role_id == '5')
              <a href="{{app()->getLocale()}}/{{$service->slug}}" class="art-link art-color-link art-w-chevron">{{__('Order now')}}</a>
            @else
              <a href="{{app()->getLocale()}}/High" class="art-link art-color-link art-w-chevron">{{__('Order now')}}</a>
            @endif

        @else
        <a href="ar/admin/login" class="art-link art-color-link art-w-chevron">{{__('Order now')}}</a>
        @endif
      </div>
    </div>
  <!-- service content end -->
  </div>
<!-- service end -->

</div>