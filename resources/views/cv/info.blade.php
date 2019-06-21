<!-- Page Container -->
<div class="w3-content w3-margin-top" style="max-width:1400px;margin-top:0!important;">

  <!-- The Grid -->
  <div class="w3-row-padding">

    <!-- Left Column -->
    <div class="w3-third">

      <div class="w3-white w3-text-grey w3-card-4">
        <div class="w3-display-container">
          <img src="/detail/avatar_hat.jpg" style="width:100%" alt="Avatar">
          <div class="w3-display-bottomleft w3-container w3-text-black">
            <h2>{{ $info->name }}</h2>
          </div>
        </div>
        <div class="w3-container">
          <p>
            @if ($info->knowledge)
              <i class="fa fa-briefcase fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $info->knowledge }}
            @endif
          </p>
          <p>
            @if ($info->address)
              <i class="fa fa-home fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $info->address }}
            @endif
          </p>
          <p><i class="fa fa-envelope fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $info->email }}</p>
          <p>
            @if ($info->phone)
              <i class="fa fa-phone fa-fw w3-margin-right w3-large w3-text-teal"></i>{{ $info->phone }}
            @endif
          </p>
          <hr>

          <p class="w3-large"><b><i class="fa fa-asterisk fa-fw w3-margin-right w3-text-teal"></i>Skills</b></p>
          @forelse ($info->skill as $skill)
            <p>{{ $skill->name }}</p>
            <div class="w3-light-grey w3-round-xlarge w3-small">
              <div class="w3-container w3-center w3-round-xlarge w3-teal" style="width:{{ $skill->percentage }}%">{{ $skill->percentage }}%</div>
            </div>
            <br>
          @empty
            <p>No Skill</p>
          @endforelse
          <br>

          <p class="w3-large w3-text-theme"><b><i class="fa fa-globe fa-fw w3-margin-right w3-text-teal"></i>Languages</b></p>
          @forelse ($info->language as $lang)
            <p>{{ $lang->name }}</p>
            <div class="w3-light-grey w3-round-xlarge">
              <div class="w3-round-xlarge w3-teal" style="height:24px;width:{{ $lang->percentage }}%"></div>
            </div>
          @empty
            <p>No Language</p>
          @endforelse
          <br>
        </div>
      </div><br>

    <!-- End Left Column -->
    </div>

    <!-- Right Column -->
    <div class="w3-twothird">

      <div class="w3-container w3-card w3-white w3-margin-bottom">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-suitcase fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Work Experience</h2>

        @forelse ($info->experience as $experience)
          <div class="w3-container">
            <h5 class="w3-opacity"><b>{{ $experience->office }}</b></h5>
            <h6 class="w3-text-teal"><i class="fa fa-calendar fa-fw w3-margin-right"></i>
              @if ($experience->end_date)
                {{ $experience->start_date }} - {{ $experience->end_date }}
              @else
                 {{ $experience->start_date }} - <span class="w3-tag w3-teal w3-round">Current</span>
            @endif</h6>
            <p>{{ $experience->excerpt }}</p><br>
          </div>
        @empty
          <div class="w3-container">
            <h5 class="w3-opacity"><b>No Experience Record</b></h5>
          </div>
          <br>
        @endforelse

      </div>

      <div class="w3-container w3-card w3-white">
        <h2 class="w3-text-grey w3-padding-16"><i class="fa fa-certificate fa-fw w3-margin-right w3-xxlarge w3-text-teal"></i>Education</h2>

        @forelse ($info->education as $education)
            <div class="w3-container">
              <h5 class="w3-opacity"><b>{{ $education->school }}</b></h5>
              <h6 class="w3-text-teal">
                <i class="fa fa-calendar fa-fw w3-margin-right"></i>
                @if ($education->end_date)
                  {{ $education->start_date }} - {{ $education->end_date }}
                @else
                   {{ $education->start_date }} - <span class="w3-tag w3-teal w3-round">Current</span>
              @endif</h6>
              </h6>
              <p>{{ $education->level }}</p><br>
            </div>
        @empty
            <div class="w3-container">
              <h5 class="w3-opacity"><b>No Academic Record</b></h5>
            </div>
        @endforelse
      </div>

    <!-- End Right Column -->
    </div>

  <!-- End Grid -->
  </div>

  <!-- End Page Container -->
</div>
