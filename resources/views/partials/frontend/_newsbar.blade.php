    <!-- Marquee Section -->
    <section class="marquee-section-two">
        <div class="marquee-three">
          <div class="inner-box">
            <div class="marquee-group slide-right">
                @foreach($news as $new)
              <div class="text" data-text="{{$new->title}}">{{$new->title}}</div>
              @endforeach
            
            </div>

            <div aria-hidden="true" class="marquee-group">

               @foreach($news as $new)
              <div class="text" data-text="{{$new->title}}">{{$new->title}}</div>
              @endforeach
              
            </div>
          </div>
        </div>
        <div class="marquee-two">
          <div class="inner-box">
            <div class="marquee-group">
            @foreach($news->sortByDesc('created_at') as $new)
                <div class="text" data-text="{{ $new->title }}">{{ $new->title }}</div>
            @endforeach
             
            </div>

            <div aria-hidden="true" class="marquee-group">
           
            @foreach($news->sortByDesc('created_at') as $new)
                <div class="text" data-text="{{ $new->title }}">{{ $new->title }}</div>
            @endforeach
              </div>
              
            </div>
          </div>
        </div>
      </section>

      <!-- End Marquee Section -->