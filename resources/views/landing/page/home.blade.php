@extends('landing.layouts.main')

@section('title', 'Hydtech')
@section('content')

<!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
      style="background-image: url(../assets/images/backgrounds/home.jpg);">
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="../assets/images/svgs/secondary-leaf.svg" alt="" class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70"><span
                    class="text-primary"></span>
                    <br>Empowering Ideas. Connecting Minds. Building the Future.</p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">Hydtech</h1>
            <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

<!--  Why choose us Section -->
    <section class="why-choose-us py-5 py-lg-11 py-xl-12">
      <div class="container">
        <div class="row justify-content-between gap-5 gap-xl-0">
          <div class="col-xl-3 col-xxl-3">
            <div class="d-flex flex-column gap-7">
              <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                data-aos-duration="1000">
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">01</span>
                <hr class="border-line">
                <span class="badge text-bg-dark">About us</span>
              </div>
              <h2 class="mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Hydtech.</h2>
              {{-- <p class="mb-0 fs-5" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">We believe that the best technology is built through shared vision and strong teamwork. </p> --}}
            </div>
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
      </div>
    </section>

    <!-- Featured Projects Section -->
<section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-11">
      <div class="row gap-7 gap-xl-0">
        <div class="col-xl-4 col-xxl-4">
          <div class="d-flex align-items-center gap-7 py-2"
            data-aos="fade-right" data-aos-delay="100" data-aos-duration="1000">
            <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
            <hr class="border-line bg-white">
            <span class="badge text-bg-dark">Projects</span>
          </div>
        </div>
        <div class="col-xl-8 col-xxl-7">
          <div class="row">
            <div class="col-xxl-8">
              <div class="d-flex flex-column gap-6"
                data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                <h2 class="mb-0">Our Projects</h2>
                <p class="fs-5 mb-0 text-opacity-70">
                  Explore our landscape-style portfolio — crafted for modern technology and creative excellence.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      {{-- Slider Projek --}}
      <div class="featured-projects-slider px-3">
        <div class="owl-carousel owl-theme">
          @foreach($projek as $index => $item)
            <div class="item">
              <div class="portfolio d-flex flex-column gap-3"
                data-aos="fade-up"
                data-aos-delay="{{ ($index+1) * 100 }}"
                data-aos-duration="1000">

                {{-- Rasio Landscape (16:9) --}}
                <div class="portfolio-img position-relative overflow-hidden rounded-4 shadow-sm" style="aspect-ratio: 16 / 9;">
                  @if($item->thumbnail)
                    <img src="{{ asset('storage/'.$item->thumbnail) }}"
                      alt="{{ $item->name_projek }}"
                      class="img-fluid w-100 h-100"
                      style="object-fit: cover;">
                  @else
                    <img src="{{ asset('assets/images/no-image.png') }}"
                      alt="no image"
                      class="img-fluid w-100 h-100"
                      style="object-fit: cover;">
                  @endif

                  <div class="portfolio-overlay p-6 d-flex flex-column justify-content-end">
                    <a href="{{ route('detailProjek', $item->id) }}"
                      class="btn bg-primary p-2 round-45 rounded-circle hstack justify-content-center align-self-end shadow">
                      <iconify-icon icon="lucide:arrow-up-right" class="fs-6 text-dark"></iconify-icon>
                    </a>
                  </div>
                </div>

                <div class="portfolio-details text-center">
                  <h4 class="mb-1 ">{{ $item->name_projek }}</h4>
                  <div class="hstack gap-2 justify-content-center">
                    @if($item->kategori)
                      <span class="badge text-bg-dark">{{ $item->kategori->nama_kategori }}</span>
                    @endif
                    <span class="badge text-bg-dark">{{ ucfirst($item->client) }}</span>
                  </div>
                </div>

              </div>
            </div>
          @endforeach
        </div>
      </div>

    </div>
  </div>
</section>

    <!--  Services Section -->
<section class="services py-5 py-lg-11 py-xl-12 bg-dark" id="services">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-10">
      <div class="row gap-7 gap-xl-0">
        <div class="col-xl-4 col-xxl-4">
          <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
            data-aos-duration="1000">
            <span
              class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">03</span>
            <hr class="border-line bg-white">
            <span class="badge text-dark bg-white">Services</span>
          </div>
        </div>
        <div class="col-xl-8 col-xxl-7">
          <div class="row">
            <div class="col-xxl-8">
              <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <h2 class="mb-0 text-white">What we do</h2>
                <p class="fs-5 mb-0 text-white text-opacity-70">
                  This is our team, and we are ready to connect big ideas with future technology.
                </p>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="services-tab">
        <div class="row gap-5 gap-xl-0">
          <!-- Bagian Gambar -->
          <div class="col-xl-4">
            <div class="tab-content" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
              @foreach($kategoris as $key => $kategori)
                <div class="tab-pane fade {{ $key == 0 ? 'show active' : '' }}"
                     id="kategori-{{ $kategori->id }}-img"
                     role="tabpanel"
                     aria-labelledby="kategori-{{ $kategori->id }}-tab"
                     tabindex="0">
                  @if($kategori->gambar)
                    <img src="{{ asset('storage/'.$kategori->gambar) }}" alt="{{ $kategori->nama_kategori }}" class="img-fluid">
                  @else
                    <img src="{{ asset('assets/images/no-image.png') }}" alt="no image" class="img-fluid">
                  @endif
                </div>
              @endforeach
            </div>
          </div>

          <!-- Bagian Tab -->
          <div class="col-xl-8">
            <div class="d-flex flex-column gap-5">
              <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                @foreach($kategoris as $key => $kategori)
                  <li class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                      role="presentation">
                    <div class="row w-100 align-items-center gx-3">
                      <div class="col-lg-6 col-xxl-5">
                        <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 {{ $key == 0 ? 'active' : '' }}"
                          id="kategori-{{ $kategori->id }}-tab"
                          data-bs-toggle="tab"
                          data-bs-target="#kategori-{{ $kategori->id }}-img"
                          type="button" role="tab"
                          aria-controls="kategori-{{ $kategori->id }}-img"
                          aria-selected="{{ $key == 0 ? 'true' : 'false' }}">
                          {{ $kategori->nama_kategori }}
                        </button>
                      </div>
                      <div class="col-lg-6 col-xxl-7">
                        <p class="text-white text-opacity-70 mb-0">
                          {{ $kategori->deskripsi ?? '-' }}
                        </p>
                      </div>
                    </div>
                  </li>
                @endforeach
              </ul>

              <a href="{{ route('projek') }}"  class="btn border border-white border-opacity-25" data-aos="fade-up"
                data-aos-delay="300" data-aos-duration="1000">
                <span class="btn-text">See our Work</span>
                <iconify-icon icon="lucide:arrow-up-right"
                  class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
              </a>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
</section>

<!--  Meet our team Section -->
    <section class="meet-our-team py-5 py-lg-11 py-xl-12">
    <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="row gap-7 gap-xl-0">
                <div class="col-xl-4 col-xxl-4">
                    <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                        data-aos-duration="1000">
                        <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                        <hr class="border-line bg-white">
                        <span class="badge text-bg-dark">The team</span>
                    </div>
                </div>
                <div class="col-xl-8 col-xxl-7">
                    <div class="row">
                        <div class="col-xxl-8">
                            <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                                data-aos-duration="1000">
                                <h2 class="mb-0">Meet our team</h2>
                                <p class="fs-5 mb-0 text-opacity-70">
                                    This is our team, and we are ready to connect big ideas with future technology.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- Looping user --}}
            <div class="meet-our-team-slider px-3">
                <div class="owl-carousel owl-theme">
                    @foreach($users as $index => $user)
                        <div class="item">
                            <div class="meet-team d-flex flex-column gap-4"
                                data-aos="fade-up"
                                data-aos-delay="{{ ($index+1) * 100 }}"
                                data-aos-duration="1000">

                                <div class="meet-team-img position-relative overflow-hidden">
                                    {{-- Kalau ada field foto, tampilkan --}}
                                    @if(!empty($user->photo))
                                        <img src="{{ asset('storage/' . $user->photo) }}" alt="team-img" class="img-fluid w-100">
                                    @else
                                        <img src="{{ asset('assets/images/team/default.jpg') }}" alt="team-img" class="img-fluid w-100">
                                    @endif

                                    <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                                        <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                                           <li><a href="https://www.linkedin.com/in/teamhydtech/" class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:linkedin" class="fs-7 text-gray"></a></li>
                                            <li><a href="https://www.instagram.com/hydtech.official/" class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:instagram" class="fs-7 text-gray"></iconify-icon></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="meet-team-details">
                                    <h4 class="mb-0">{{ $user->name }}</h4>
                                    <p class="mb-0"> @if ($user->role == 1)
                                            Leader
                                        @else
                                            Developer
                                        @endif</p>

                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

        </div>
    </div>
</section>

<!--  Pricing Section -->
    <section class="pricing-section py-5 py-lg-11 py-xl-12 bg-light-gray">
      <div class="container">
        <div class="d-flex flex-column gap-5 gap-xl-10">
          <div class="d-flex flex-column gap-5 gap-xl-11">
            <div class="row gap-7 gap-xl-0">
              <div class="col-xl-4 col-xxl-4">
                <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                  data-aos-duration="2000">
                  <span
                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">05</span>
                  <hr class="border-line bg-white">
                  <span class="badge text-bg-dark">Partners</span>
                </div>
              </div>
              <div class="col-xl-8 col-xxl-7">
                <div class="row">
                  <div class="col-xxl-8">
                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                      data-aos-duration="1000">
                      <h2 class="mb-0">Our Partners</h2>
                      <p class="fs-5 mb-0 text-opacity-70">A glimpse into our creativity—exploring innovative designs,
                        successful collaborations, and transformative digital experiences.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
<!-- Media Partner Logo Slider -->
<div class="d-flex flex-column gap-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
  <div class="owl-carousel owl-theme">
    @foreach($mediaPartners as $partner)
      <div class="item text-center">
       <div class="p-3 rounded shadow-sm d-flex align-items-center justify-content-center"
     style="height: 70px; width: 100%; background: #fff;">
    @if($partner->logo)
        <img src="{{ asset('storage/' . $partner->logo) }}"
             alt="{{ $partner->nama }}"
             class="img-fluid"
             style="max-height: 100%; max-width: 100%; object-fit: contain;">
    @else
        <img src="{{ asset('assets/images/no-image.png') }}"
             alt="no image"
             class="img-fluid"
             style="max-height: 100%; max-width: 100%; object-fit: contain;">
    @endif
</div>

      </div>
    @endforeach
  </div>
</div>

          </div>
        </div>
      </div>
    </section>

<!--Contact Section-->
    <section class="contact-section position-relative overflow-hidden py-5 py-lg-11 py-xl-12" id="contact">
    <div class="container">
        <div class="row gx-0 align-items-center justify-content-center">
            <div class="col-xl-6">
                <div class="card p-xl-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                    <div class="card-body text-center">
                        <div class="d-flex flex-column gap-6 align-items-center">
                            <div class="d-flex align-items-center gap-7 py-2">
                                <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
                                <hr class="border-line">
                                <span class="badge text-bg-dark">Contact</span>
                            </div>
                            <h2 class="mb-0">Let's get in touch</h2>
                            <p class="mb-0 fs-5 text-dark">
                                Ready to start your project? We're here to help. Reach out to us through our social media.
                            </p>
                             <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-center">
                                <li><a href="https://www.facebook.com" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:facebook" class="fs-7 text-white"></iconify-icon></a></li>
                                <li><a href="https://www.twitter.com" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:twitter" class="fs-7 text-white"></iconify-icon></a></li>
                                <li><a href="https://www.instagram.com/hydtech.official/" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:instagram" class="fs-7 text-white"></iconify-icon></a></li>
                                <li><a href="https://www.linkedin.com/in/teamhydtech/" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:linkedin" class="fs-7 text-white"></a></li>
                                <li><a href="mailto:teamhydetech@gmail.com" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:mail" class="fs-7 text-white"></iconify-icon></a></li>
                            </ul>
                            <a href="mailto:teamhydetech@gmail.com"" class="btn btn-primary w-100 justify-content-center mt-3">
                                <span class="btn-text">Email Us</span>
                                <iconify-icon icon="lucide:arrow-up-right" class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                            </a>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </section>

@endsection

