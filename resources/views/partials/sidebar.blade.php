<div class="art-info-bar">

<!-- menu bar frame -->
<div class="art-info-bar-frame">

  <!-- info bar header -->
  <div class="art-info-bar-header">
    <!-- info bar button -->
    <a class="art-info-bar-btn" href="#.">
      <!-- icon -->
      <i class="fas fa-ellipsis-v"></i>
    </a>
    <!-- info bar button end -->
  </div>
  <!-- info bar header end -->

  <!-- info bar header -->
  <div class="art-header">
  <a href="/{{app()->getLocale()}}/">{{__('Home')}}</a>

    <!-- avatar -->
    <div class="art-avatar">
      <a data-fancybox="avatar" href="{{url('img/face-1.jpg')}}" class="art-avatar-curtain">
        <img src="storage/{{$consultant->img}}" alt="avatar">
        <i class="fas fa-expand"></i>
      </a>
      <!-- available -->
      <div class="art-lamp-light">
        <!-- add class 'art-not-available' if not available-->
        <div class="art-available-lamp"></div>
      </div>
    </div>
    <!-- avatar end -->
    <!-- name -->
    <h5 class="art-name mb-10"><a href="/home.html">{{$consultant->name}}</a></h5>
    <!-- post -->
    <div class="art-sm-text">{{$consultant->job}} </div>
  </div>
  <!-- info bar header end -->

  <!-- scroll frame -->
  <div id="scrollbar2" class="art-scroll-frame">

    <!-- info bar about -->
    <div class="art-table p-15-15">
      <!-- about text -->
      <ul>
        <!-- country -->
        <li>
          <h6>Residence:</h6><span>{{$consultant->residence}}</span>
        </li>
        <!-- city -->
        <li>
          <h6>City:</h6><span>{{$consultant->city}}</span>
        </li>
        <!-- age -->
        <li>
          <h6>Age:</h6><span>{{$consultant->age}}</span>
        </li>
      </ul>
    </div>
    <!-- info bar about end -->

    <!-- divider -->
    <div class="art-ls-divider"></div>

    <!-- language skills -->
    <div class="art-lang-skills p-30-15">

      <!-- skill -->
      <div class="art-lang-skills-item">
        <div id="circleprog1" class="art-cirkle-progress"></div>
        <!-- title -->
        <h6>{{$consultant->lang1}}</h6>
      </div>
      <!-- skill end -->

      <!-- skill -->
      <div class="art-lang-skills-item">
        <div id="circleprog2" class="art-cirkle-progress"></div>
        <!-- title -->
        <h6>{{$consultant->lang2}}</h6>
      </div>
      <!-- skill end -->

      <!-- skill -->
      <div class="art-lang-skills-item">
        <div id="circleprog3" class="art-cirkle-progress"></div>
        <!-- title -->
        <h6>{{$consultant->lang3}}</h6>
      </div>
      <!-- skill end -->

    </div>
    <!-- language skills end -->

    <!-- divider -->
    <div class="art-ls-divider"></div>

    <!-- hard skills -->
    <div class="art-hard-skills p-30-15">

      <!-- skill -->
      <div class="art-hard-skills-item">
        <div class="art-skill-heading">
          <!-- title -->
          <h6>{{$consultant->sk1}}</h6>
        </div>
        <!-- progressbar frame -->
        <div class="art-line-progress">
          <!-- progressbar -->
          <div id="lineprog1"></div>
        </div>
        <!-- progressbar frame end -->
      </div>
      <!-- skill end -->

      <!-- skill -->
      <div class="art-hard-skills-item">
        <div class="art-skill-heading">
          <!-- title -->
          <h6>{{$consultant->sk2}}</h6>
        </div>
        <!-- progressbar frame -->
        <div class="art-line-progress">
          <!-- progressbar -->
          <div id="lineprog2"></div>
        </div>
        <!-- progressbar frame end -->
      </div>
      <!-- skill end -->

      <!-- skill -->
      <div class="art-hard-skills-item">
        <div class="art-skill-heading">
          <!-- title -->
          <h6>{{$consultant->sk3}}</h6>
        </div>
        <!-- progressbar frame -->
        <div class="art-line-progress">
          <!-- progressbar -->
          <div id="lineprog3"></div>
        </div>
        <!-- progressbar frame end -->
      </div>
      <!-- skill end -->

      <!-- skill -->
      <div class="art-hard-skills-item">
        <div class="art-skill-heading">
          <!-- title -->
          <h6>{{$consultant->sk4}}</h6>
        </div>
        <!-- progressbar frame -->
        <div class="art-line-progress">
          <!-- progressbar -->
          <div id="lineprog4"></div>
        </div>
        <!-- progressbar frame end -->
      </div>
      <!-- skill end -->

      <!-- skill -->
      <div class="art-hard-skills-item">
        <div class="art-skill-heading">
          <!-- title -->
          <h6>{{$consultant->sk5}}</h6>
        </div>
        <!-- progressbar frame -->
        <div class="art-line-progress">
          <!-- progressbar -->
          <div id="lineprog5"></div>
        </div>
        <!-- progressbar frame end -->
      </div>
      <!-- skill end -->

    </div>
    <!-- language skills end -->

    <!-- divider -->
    <div class="art-ls-divider"></div>

    <!-- knowledge list -->
    <ul class="art-knowledge-list p-15-0">
      <!-- list item -->
      <li>{{$consultant->extr1}}</li>
      <!-- list item -->
      <li>{{$consultant->extr2}}</li>
      <!-- list item -->
      <li>{{$consultant->extr3}}</li>
      <!-- list item -->
      <li>{{$consultant->extr4}}</li>
    </ul>
    <!-- knowledge list end -->

    <!-- divider -->
    <div class="art-ls-divider"></div>

    <!-- links frame -->
    <div class="art-links-frame p-15-15">

      <!-- download cv button -->
      <a href="storage/{{$consultant->cv}}" class="art-link" download>Download cv <i class="fas fa-download"></i></a>

    </div>
    <!-- links frame end -->

  </div>
  <!-- scroll frame end -->

  <!-- sidebar social -->
  <div class="art-ls-social">
    <!-- social link -->
    <a href="#." target="_blank"><i class="far fa-circle"></i></a>
    <!-- social link -->
    <a href="#." target="_blank"><i class="far fa-circle"></i></a>
    <!-- social link -->
    <a href="#." target="_blank"><i class="far fa-circle"></i></a>
    <!-- social link -->
    <a href="#." target="_blank"><i class="far fa-circle"></i></a>
    <!-- social link -->
    <a href="#." target="_blank"><i class="far fa-circle"></i></a>
  </div>
  <!-- sidebar social end -->

</div>
<!-- menu bar frame end -->

</div>