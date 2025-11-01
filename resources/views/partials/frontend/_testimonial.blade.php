    <!-- Testimonial Section -->
    <section class="testimonial-section-four">
      <div class="bg bg-image"></div>
      <div class="container pt-0 pb-0">
        <div class="sec-title text-center">
          <span class="sub-title line-style">testimonios</span>
          <h2 class="letters-slide-up ">Nuestra cliente dice</h2>
        </div>
        <div class="outer-box" id="testimonial-sec">
          <div class="testimonial-carousel-two owl-carousel owl-theme default-dots">
            @foreach($testimonials as $testimonial)
            <!-- Testimonial Block -->
            <div class="testimonial-block-four">
              <div class="inner-box">
                <div class="content">
                  <div class="text">
                    {{$testimonial->review}}
                    </div>
                  <div class="box-info">
                    <div class="author-box">
                      <figure class="author-image">
                        <img src="{{asset($testimonial->image)}}" alt="" />
                      </figure>
                      <div class="author-info">
                        <h6 class="name">{{$testimonial->fullname}}</h6>
                        <span class="designation">{{$testimonial->designation}}</span>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            @endforeach
      
          </div>
        </div>
      </div>
    </section>
    <!-- End Testimonial Section -->