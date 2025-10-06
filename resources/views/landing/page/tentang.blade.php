@extends('landing.layouts.main')

@section('title', 'Tentang')
@section('content')

<!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
      style="background-image: url(../assets/images/backgrounds/about.jpg);">
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="../assets/images/svgs/secondary-leaf.svg" alt="" class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70">We craft <span class="text-primary">innovative
                    digital</span> designs that amplify brand identity and drive meaningful results</p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">About us</h1>
            <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

<!--  About Content Section -->
    <section class="about-content py-5 py-lg-11 py-xl-12">
      <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11 gap-xxl-12">
          <div class="row gap-4 gap-lg-0">
            <div class="col-lg-4">
              <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Hydtech.</h2>
            </div>
            <div class="col-lg-8">
              <div class="d-flex flex-column gap-4 gap-lg-5" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">
                <p class="mb-0 fs-5 text-dark">
                  Behind every smart idea and innovative technology, there is an extraordinary team working with passion, expertise, and collaboration. We believe that the best technology is built through shared vision and strong teamwork.

                </p>
                <p class="mb-0 fs-5 text-dark">
                  Every member of the Hydtech team plays a vital role in creating smart, impactful, and sustainable digital solutions. Together, we continue to learn, grow, and innovate to address the challenges of an ever-evolving world.
                </p>
              </div>
            </div>
          </div>
          {{-- <div class="row gx-xl-5">
            <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
              <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="45">45</span>+</h2>
                <div class="d-flex flex-column gap-3">
                  <h4 class="mb-0">Presence in global markets</h4>
                  <p class="mb-0">Expanding reach across international regions with localized expertise and worldwide
                    impact.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
              <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="15">15</span>M</h2>
                <div class="d-flex flex-column gap-3">
                  <h4 class="mb-0">In strategic investments</h4>
                  <p class="mb-0">Driving growth with curated partnerships and high-performing, audience-driven
                    initiatives.</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-lg-4 mb-8 mb-lg-0">
              <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                <h2 class="mb-0 fs-13 pb-7 border-bottom"><span class="count" data-target="158">158</span>+</h2>
                <div class="d-flex flex-column gap-3">
                  <h4 class="mb-0">Trusted brand collaborations</h4>
                  <p class="mb-0">Shaping industry conversations through innovation, creativity, and lasting influence.
                  </p>
                </div>
              </div>
            </div>
          </div> --}}
        </div>
      </div>
    </section>

<!--  About Img Section -->
    {{-- <section class="about-img">
      <img src="../assets/images/about/about-img.jpg" alt="" class="w-100 object-fit-cover">
      <div class="marquee w-100 d-flex align-items-center overflow-hidden bg-primary py-4">
        <div class="marquee-content d-flex align-items-center gap-8">
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Branding</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Web development</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Agency</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Content creation</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">SaaS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Motion & 3d modeling</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Photography</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Branding</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Web development</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Agency</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Content creation</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">SaaS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Motion & 3d modeling</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Photography</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Branding</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Web development</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Agency</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Content creation</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">SaaS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Motion & 3d modeling</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Photography</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Branding</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Web development</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Agency</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Content creation</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">SaaS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Motion & 3d modeling</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Photography</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Branding</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Web development</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Agency</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Content creation</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">SaaS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Motion & 3d modeling</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Photography</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Branding</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Web development</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Agency</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Content creation</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">SaaS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Motion & 3d modeling</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Photography</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Branding</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Web development</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Agency</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Content creation</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">SaaS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Motion & 3d modeling</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Photography</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Branding</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Web development</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Agency</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Content creation</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">SaaS</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Motion & 3d modeling</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
          <div class="hstack gap-4 flex-shrink-0">
            <h4 class="mb-0">Photography</h4>
            <span class="round-10 bg-dark bg-opacity-10 rounded-circle flex-shrink-0"></span>
          </div>
        </div>
      </div>
    </section> --}}

<!--  Meet our team Section -->
    <section class="meet-our-team py-5 py-lg-11 py-xl-12">
    <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            {{-- Bagian judul --}}
            <div class="row gap-7 gap-xl-0">
                <div class="col-xl-4 col-xxl-4">
                    <div class="d-flex align-items-center gap-7 py-2"
                        data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
                        <span
                            class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
                        <hr class="border-line bg-white">
                        <span class="badge text-bg-dark">The team</span>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-7">
                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="d-flex flex-column gap-6"
                                data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                                <h2 class="mb-0">Meet our team</h2>
                                <p class="fs-5 mb-0 text-opacity-70">
                                    Our team is committed to redefining digital experiences through
                                    innovative web solutions while fostering a diverse and collaborative environment.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Grid tim dinamis --}}
            <div class="row">
                @foreach($users as $index => $user)
                    <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
                        <div class="meet-team d-flex flex-column gap-4"
                            data-aos="fade-up"
                            data-aos-delay="{{ ($index+1) * 100 }}"
                            data-aos-duration="1000">

                            {{-- Gambar tim --}}
                            <div class="meet-team-img position-relative overflow-hidden rounded-4">
                                @if(!empty($user->photo))
                                    <img src="{{ asset('storage/' . $user->photo) }}" alt="{{ $user->name }}"
                                         class="img-fluid w-100 h-100" style="object-fit: cover; aspect-ratio: 4/5;">
                                @else
                                    <img src="{{ asset('assets/images/team/default.jpg') }}" alt="team-img"
                                         class="img-fluid w-100 h-100" style="object-fit: cover; aspect-ratio: 4/5;">
                                @endif

                                {{-- Overlay sosmed --}}
                                <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end"
                                    style="background: linear-gradient(to top, rgba(0,0,0,0.7), rgba(0,0,0,0)); transition: 0.3s;">
                                    <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                        <li>
                                            <a href="#!"
                                               class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center">
                                                <img src="{{ asset('assets/images/svgs/icon-twitter.svg') }}" alt="twitter">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                               class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center">
                                                <img src="{{ asset('assets/images/svgs/icon-be.svg') }}" alt="be">
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#!"
                                               class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center">
                                                <img src="{{ asset('assets/images/svgs/icon-linkedin.svg') }}" alt="linkedin">
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            {{-- Detail tim --}}
                            <div class="meet-team-details text-center">
                                <h4 class="mb-2">{{ $user->name }}</h4>
                                <p class="mb-4">
                                    @if ($user->role == 1)
                                        Leader
                                    @else
                                        Developer
                                    @endif
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>
</section>

<style>
.meet-team-img {
    position: relative;
    overflow: hidden;
    border-radius: 1rem;
}
.meet-team-img img {
    transition: transform 0.4s ease;
}
.meet-team-img:hover img {
    transform: scale(1.05);
}
.meet-team-overlay {
    opacity: 0;
    position: absolute;
    inset: 0;
}
.meet-team-img:hover .meet-team-overlay {
    opacity: 1;
}
</style>


@endsection
