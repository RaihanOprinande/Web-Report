@extends('landing.layouts.main')

@section('title', 'Home')
@section('content')

<!--  Banner Section -->
    <section class="banner-section position-relative d-flex align-items-end min-vh-100">
      <video class="position-absolute top-0 start-0 w-100 h-100 object-fit-cover" autoplay muted loop playsinline>
        <source src="../assets/images/backgrounds/banner-video.mp4" type="video/mp4" />
      </video>
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-8 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="../assets/images/svgs/primary-leaf.svg" alt="" class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70">We create <span
                    class="text-primary">high-performing</span> digital designs that elevate brands and enhance
                  conversions.</p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">Studiova</h1>
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
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">04</span>
                <hr class="border-line">
                <span class="badge text-bg-dark">About us</span>
              </div>
              <h2 class="mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Why choose us</h2>
              <p class="mb-0 fs-5" data-aos="fade-right" data-aos-delay="300" data-aos-duration="1000">We blend
                creativity with strategy to craft unique digital experiences that make an
                impact.
                With a focus on innovation, attention to details.</p>
            </div>
          </div>
          <div class="col-xl-9 col-xxl-8">
            <div class="row">
              <div class="col-lg-4 mb-7 mb-lg-0">
                <div class="card position-relative overflow-hidden bg-primary h-100" data-aos="fade-up"
                  data-aos-delay="100" data-aos-duration="1000">
                  <div class="card-body d-flex flex-column justify-content-between">
                    <div class="d-flex flex-column gap-3 position-relative z-1">
                      <ul class="list-unstyled mb-0 hstack gap-1">
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-bold"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                        <li><a class="hstack" href="javascript:void(0)"><iconify-icon icon="solar:star-line-duotone"
                              class="fs-6 text-dark"></iconify-icon></a></li>
                      </ul>
                      <p class="mb-0 fs-6 text-dark">The team exceeded our expectations with a stunning brand identity.
                      </p>
                    </div>
                    <div class="position-relative z-1">
                      <div class="pb-6 border-bottom">
                        <h2 class="mb-0">98.6%</h2>
                        <p class="mb-0">Customer satisfaction</p>
                      </div>
                      <div class="hstack gap-6 pt-6">
                        <img src="../assets/images/profile/avatar-1.png" alt=""
                          class="img-fluid rounded-circle overflow-hidden flex-shrink-0" width="64" height="64">
                        <div>
                          <h5 class="mb-0">Wade Warren</h5>
                          <p class="mb-0">Bank of America</p>
                        </div>
                      </div>
                    </div>
                    <div class="position-absolute bottom-0 end-0">
                      <img src="../assets/images/backgrounds/customer-satisfaction-bg.svg" alt="" class="img-fluid">
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-7 mb-lg-0">
                <div class="d-flex flex-column gap-7" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="position-relative">
                    <img src="../assets/images/services/services-img-2.jpg" alt="" class="img-fluid w-100">
                  </div>

                  <div class="card bg-dark">
                    <div class="card-body d-flex flex-column gap-7">
                      <div>
                        <h2 class="mb-0 text-white">500+</h2>
                        <p class="mb-0 text-white text-opacity-70">Successful projects completed</p>
                      </div>
                      <ul class="d-flex align-items-center mb-0">
                        <li>
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-1.jpg" width="44" height="44"
                              class="rounded-circle border border-2 border-dark" alt="user-1">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-2.jpg" width="44" height="44"
                              class="rounded-circle border border-2 border-dark" alt="user-2">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-3.jpg" width="44" height="44"
                              class="rounded-circle border border-2 border-dark" alt="user-3">
                          </a>
                        </li>
                        <li class="ms-n2">
                          <a href="javascript:void(0)">
                            <img src="../assets/images/profile/user-4.jpg" width="44" height="44"
                              class="rounded-circle border border-2 border-dark" alt="user-4">
                          </a>
                        </li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-4 mb-7 mb-lg-0">
                <div class="card border h-100 position-relative overflow-hidden" data-aos="fade-up" data-aos-delay="300"
                  data-aos-duration="1000">
                  <span
                    class="border rounded-circle round-490 d-block position-absolute top-0 start-50 translate-middle"></span>
                  <div class="card-body d-flex flex-column justify-content-between">
                    <div>
                      <h2 class="mb-0">238+</h2>
                      <p class="mb-0 text-dark">Brands served worldwide</p>
                    </div>
                    <div class="d-flex flex-column gap-3">
                      <a href="index.html" class="logo-dark">
                        <img src="../assets/images/logos/logo-dark.svg" alt="logo" class="img-fluid">
                      </a>
                      <p class="mb-0 fs-5 text-dark">Our global reach allows us to create unique, culturally relevant
                        designs for businesses across different industries.</p>
                    </div>
                  </div>
                  <span
                    class="border rounded-circle round-490 d-block position-absolute top-100 start-50 translate-middle"></span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

<!--  Featured Projects Section -->
    <section class="featured-projects py-5 py-lg-11 py-xl-12 bg-light-gray">
      <div class="d-flex flex-column gap-5 gap-xl-11">
        <div class="container">
          <div class="row gap-7 gap-xl-0">
            <div class="col-xl-4 col-xxl-4">
              <div class="d-flex align-items-center gap-7 py-2" data-aos="fade-right" data-aos-delay="100"
                data-aos-duration="1000">
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">02</span>
                <hr class="border-line">
                <span class="badge text-bg-dark">Portfolio</span>
              </div>
            </div>
            <div class="col-xl-8 col-xxl-7">
              <div class="row">
                <div class="col-xxl-8">
                  <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                    data-aos-duration="1000">
                    <h2 class="mb-0">Featured projects</h2>
                    <p class="fs-5 mb-0">A glimpse into our creativity—exploring innovative designs, successful
                      collaborations, and transformative digital experiences.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="featured-projects-slider px-3">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <div class="portfolio d-flex flex-column gap-6">
                <div class="portfolio-img position-relative overflow-hidden">
                  <img src="../assets/images/portfolio/portfolio-img-1.jpg" alt="" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="projects-detail.html"
                      class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                      <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                    </a>
                  </div>
                </div>
                <div class="portfolio-details d-flex flex-column gap-3">
                  <h3 class="mb-0">Snapclear</h3>
                  <div class="hstack gap-2">
                    <span class="badge text-dark border">UX Strategy</span>
                    <span class="badge text-dark border">UI Design</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio d-flex flex-column gap-6">
                <div class="portfolio-img position-relative overflow-hidden">
                  <img src="../assets/images/portfolio/portfolio-img-2.jpg" alt="" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="projects-detail.html"
                      class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                      <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                    </a>
                  </div>
                </div>
                <div class="portfolio-details d-flex flex-column gap-3">
                  <h3 class="mb-0">Amber Bottle</h3>
                  <div class="hstack gap-2">
                    <span class="badge text-dark border">Web development</span>
                    <span class="badge text-dark border">Digital design</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio d-flex flex-column gap-6">
                <div class="portfolio-img position-relative overflow-hidden">
                  <img src="../assets/images/portfolio/portfolio-img-3.jpg" alt="" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="projects-detail.html"
                      class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                      <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                    </a>
                  </div>
                </div>
                <div class="portfolio-details d-flex flex-column gap-3">
                  <h3 class="mb-0">Pixelforge</h3>
                  <div class="hstack gap-2">
                    <span class="badge text-dark border">UI/UX design</span>
                    <span class="badge text-dark border">Web development</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio d-flex flex-column gap-6">
                <div class="portfolio-img position-relative overflow-hidden">
                  <img src="../assets/images/portfolio/portfolio-img-4.jpg" alt="" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="projects-detail.html"
                      class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                      <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                    </a>
                  </div>
                </div>
                <div class="portfolio-details d-flex flex-column gap-3">
                  <h3 class="mb-0">BioTrack LIMS</h3>
                  <div class="hstack gap-2">
                    <span class="badge text-dark border">Brand identity</span>
                    <span class="badge text-dark border">Digital design</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio d-flex flex-column gap-6">
                <div class="portfolio-img position-relative overflow-hidden">
                  <img src="../assets/images/portfolio/portfolio-img-5.jpg" alt="" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="projects-detail.html"
                      class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                      <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                    </a>
                  </div>
                </div>
                <div class="portfolio-details d-flex flex-column gap-3">
                  <h3 class="mb-0">Amber Bottle</h3>
                  <div class="hstack gap-2">
                    <span class="badge text-dark border">Photography</span>
                    <span class="badge text-dark border">Studio</span>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="portfolio d-flex flex-column gap-6">
                <div class="portfolio-img position-relative overflow-hidden">
                  <img src="../assets/images/portfolio/portfolio-img-6.jpg" alt="" class="img-fluid">
                  <div class="portfolio-overlay">
                    <a href="projects-detail.html"
                      class="position-absolute top-50 start-50 translate-middle bg-primary round-64 rounded-circle hstack justify-content-center">
                      <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
                    </a>
                  </div>
                </div>
                <div class="portfolio-details d-flex flex-column gap-3">
                  <h3 class="mb-0">Digital Magazine</h3>
                  <div class="hstack gap-2">
                    <span class="badge text-dark border">Digital design</span>
                    <span class="badge text-dark border">Web development</span>
                  </div>
                </div>
              </div>
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
                    <p class="fs-5 mb-0 text-white text-opacity-70">A glimpse into our creativity—exploring innovative
                      designs, successful collaborations, and transformative digital experiences.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="services-tab">
            <div class="row gap-5 gap-xl-0">
              <div class="col-xl-4">
                <div class="tab-content" data-aos="zoom-in" data-aos-delay="100" data-aos-duration="1000">
                  <div class="tab-pane active" id="one" role="tabpanel" aria-labelledby="one-tab" tabindex="0">
                    <img src="../assets/images/services/services-img-1.jpg" alt="services" class="img-fluid">
                  </div>
                  <div class="tab-pane" id="two" role="tabpanel" aria-labelledby="two-tab" tabindex="0">
                    <img src="../assets/images/services/services-img-2.jpg" alt="services" class="img-fluid">
                  </div>
                  <div class="tab-pane" id="three" role="tabpanel" aria-labelledby="three-tab" tabindex="0">
                    <img src="../assets/images/services/services-img-3.jpg" alt="services" class="img-fluid">
                  </div>
                  <div class="tab-pane" id="four" role="tabpanel" aria-labelledby="four-tab" tabindex="0">
                    <img src="../assets/images/services/services-img-4.jpg" alt="services" class="img-fluid">
                  </div>
                </div>
              </div>
              <div class="col-xl-8">
                <div class="d-flex flex-column gap-5">
                  <ul class="nav nav-tabs" id="myTab" role="tablist" data-aos="fade-up" data-aos-delay="200"
                    data-aos-duration="1000">
                    <li
                      class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                      role="presentation">
                      <div class="row w-100 align-items-center gx-3">
                        <div class="col-lg-6 col-xxl-5">
                          <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0 active"
                            id="one-tab" data-bs-toggle="tab" data-bs-target="#one" type="button" role="tab"
                            aria-controls="one" aria-selected="true">Brand identity</button>
                        </div>
                        <div class="col-lg-6 col-xxl-7">
                          <p class="text-white text-opacity-70 mb-0">
                            When selecting a web design agency, it's essential to consider its reputation, experience,
                            and
                            the
                            specific needs of your project.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li
                      class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                      role="presentation">
                      <div class="row w-100 align-items-center gx-3">
                        <div class="col-lg-6 col-xxl-5">
                          <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0" id="two-tab"
                            data-bs-toggle="tab" data-bs-target="#two" type="button" role="tab" aria-controls="two"
                            aria-selected="false">Web development</button>
                        </div>
                        <div class="col-lg-6 col-xxl-7">
                          <p class="text-white text-opacity-70 mb-0">
                            When selecting a web design agency, it's essential to consider its reputation, experience,
                            and
                            the
                            specific needs of your project.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li
                      class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                      role="presentation">
                      <div class="row w-100 align-items-center gx-3">
                        <div class="col-lg-6 col-xxl-5">
                          <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                            id="three-tab" data-bs-toggle="tab" data-bs-target="#three" type="button" role="tab"
                            aria-controls="three" aria-selected="false">Content creation</button>
                        </div>
                        <div class="col-lg-6 col-xxl-7">
                          <p class="text-white text-opacity-70 mb-0">
                            When selecting a web design agency, it's essential to consider its reputation, experience,
                            and
                            the
                            specific needs of your project.
                          </p>
                        </div>
                      </div>
                    </li>
                    <li
                      class="nav-item py-4 py-lg-8 border-top border-white border-opacity-10 d-flex align-items-center w-100"
                      role="presentation">
                      <div class="row w-100 align-items-center gx-3">
                        <div class="col-lg-6 col-xxl-5">
                          <button class="nav-link fs-10 fw-bold py-1 px-0 border-0 rounded-0 flex-shrink-0"
                            id="four-tab" data-bs-toggle="tab" data-bs-target="#four" type="button" role="tab"
                            aria-controls="four" aria-selected="false">Motion & 3d modeling</button>
                        </div>
                        <div class="col-lg-6 col-xxl-7">
                          <p class="text-white text-opacity-70 mb-0">
                            When selecting a web design agency, it's essential to consider its reputation, experience,
                            and
                            the
                            specific needs of your project.
                          </p>
                        </div>
                      </div>
                    </li>
                  </ul>
                  <a href="projects.html" class="btn border border-white border-opacity-25" data-aos="fade-up"
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
                <span
                  class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">06</span>
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
                    <p class="fs-5 mb-0 text-opacity-70">Our team is committed to redefining digital experiences through
                      innovative web solutions while fostering a diverse and collaborative environment.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
              <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <div class="meet-team-img position-relative overflow-hidden">
                  <img src="../assets/images/team/team-img-1.jpg" alt="team-img" class="img-fluid w-100">
                  <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                    <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-twitter.svg" alt="twitter"></a></li>
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-be.svg" alt="be"></a></li>
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-linkedin.svg" alt="linkedin"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="meet-team-details">
                  <h4 class="mb-0">Martha Finley</h4>
                  <p class="mb-0">Creative Director</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
              <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="200"
                data-aos-duration="1000">
                <div class="meet-team-img position-relative overflow-hidden">
                  <img src="../assets/images/team/team-img-2.jpg" alt="team-img" class="img-fluid w-100">
                  <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                    <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-twitter.svg" alt="twitter"></a></li>
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-be.svg" alt="be"></a></li>
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-linkedin.svg" alt="linkedin"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="meet-team-details">
                  <h4 class="mb-0">Floyd Miles</h4>
                  <p class="mb-0">Marketing Strategist</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
              <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="300"
                data-aos-duration="1000">
                <div class="meet-team-img position-relative overflow-hidden">
                  <img src="../assets/images/team/team-img-3.jpg" alt="team-img" class="img-fluid w-100">
                  <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                    <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-twitter.svg" alt="twitter"></a></li>
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-be.svg" alt="be"></a></li>
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-linkedin.svg" alt="linkedin"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="meet-team-details">
                  <h4 class="mb-0">Glenna Snyder</h4>
                  <p class="mb-0">Lead Designer</p>
                </div>
              </div>
            </div>
            <div class="col-md-6 col-xl-3 mb-7 mb-xl-0">
              <div class="meet-team d-flex flex-column gap-4" data-aos="fade-up" data-aos-delay="400"
                data-aos-duration="1000">
                <div class="meet-team-img position-relative overflow-hidden">
                  <img src="../assets/images/team/team-img-4.jpg" alt="team-img" class="img-fluid w-100">
                  <div class="meet-team-overlay p-7 d-flex flex-column justify-content-end">
                    <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-end">
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-twitter.svg" alt="twitter"></a></li>
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-be.svg" alt="be"></a></li>
                      <li><a href="#!"
                          class="btn bg-white p-2 round-45 rounded-circle hstack justify-content-center"><img
                            src="../assets/images/svgs/icon-linkedin.svg" alt="linkedin"></a></li>
                    </ul>
                  </div>
                </div>
                <div class="meet-team-details">
                  <h4 class="mb-0">Albert Flores</h4>
                  <p class="mb-0">UX/UI Developer</p>
                </div>
              </div>
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
                  data-aos-duration="1000">
                  <span
                    class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">07</span>
                  <hr class="border-line bg-white">
                  <span class="badge text-bg-dark">Pricing</span>
                </div>
              </div>
              <div class="col-xl-8 col-xxl-7">
                <div class="row">
                  <div class="col-xxl-8">
                    <div class="d-flex flex-column gap-6" data-aos="fade-up" data-aos-delay="100"
                      data-aos-duration="1000">
                      <h2 class="mb-0">Affordable pricing</h2>
                      <p class="fs-5 mb-0 text-opacity-70">A glimpse into our creativity—exploring innovative designs,
                        successful collaborations, and transformative digital experiences.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-6 col-xl-4 mb-7 mb-xl-0 d-flex align-items-stretch">
                <div class="card w-100" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
                  <div class="card-body p-7 p-xxl-5 d-flex flex-column gap-8">
                    <div class="d-flex flex-column gap-6">
                      <h5 class="mb-0 fw-medium">Launch</h5>
                      <div class="hstack gap-2">
                        <h3 class="mb-0">$699</h3>
                        <p class="mb-0">/month</p>
                      </div>
                      <p class="mb-0">Ideal for startups and small businesses taking their first steps online.</p>
                    </div>
                    <div class="pt-8 border-top d-flex flex-column gap-6">
                      <h6 class="mb-0 fw-normal">What’s Included:</h6>
                      <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Competitive research & insights</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Wireframing and prototyping</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Basic tracking setup (Google Analytics, etc.)</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Standard contact form integration</h6>
                        </li>
                      </ul>
                    </div>
                    <a href="" class="btn w-100 justify-content-center">
                      <span class="btn-text">Subscribe now</span>
                      <iconify-icon icon="lucide:arrow-up-right"
                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4 mb-7 mb-xl-0 d-flex align-items-stretch">
                <div class="card w-100" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
                  <div class="card-body p-7 p-xxl-5 d-flex flex-column gap-8">
                    <div class="d-flex flex-column gap-6">
                      <div class="hstack gap-3">
                        <h5 class="mb-0 fw-medium">Scale</h5>
                        <span class="badge text-bg-dark hstack gap-2"><iconify-icon icon="lucide:flame"
                            class="fs-5"></iconify-icon>Most popular</span>
                      </div>
                      <div class="hstack gap-2">
                        <h3 class="mb-0 text-opacity-50 text-dark"><del>$2,199</del></h3>
                        <h3 class="mb-0">$1,699</h3>
                        <p class="mb-0">/month</p>
                      </div>
                      <p class="mb-0">Perfect for growing brands needing more customization and flexibility.</p>
                    </div>
                    <div class="pt-8 border-top d-flex flex-column gap-6">
                      <h6 class="mb-0 fw-normal">What’s Included:</h6>
                      <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Everything in the Launch Plan</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Custom design for up to 10 pages</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Seamless social media integration</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">SEO enhancements for key pages</h6>
                        </li>
                      </ul>
                    </div>
                    <a href="" class="btn w-100 justify-content-center">
                      <span class="btn-text">Subscribe now</span>
                      <iconify-icon icon="lucide:arrow-up-right"
                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                    </a>
                  </div>
                </div>
              </div>
              <div class="col-lg-6 col-xl-4 mb-7 mb-xl-0 d-flex align-items-stretch">
                <div class="card w-100" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
                  <div class="card-body p-7 p-xxl-5 d-flex flex-column gap-8">
                    <div class="d-flex flex-column gap-6">
                      <h5 class="mb-0 fw-medium">Elevate</h5>
                      <div class="hstack gap-2">
                        <h3 class="mb-0">$3,499</h3>
                        <p class="mb-0">/month</p>
                      </div>
                      <p class="mb-0">Best suited for established businesses wanting a fully tailored experience.</p>
                    </div>
                    <div class="pt-8 border-top d-flex flex-column gap-6">
                      <h6 class="mb-0 fw-normal">What’s Included:</h6>
                      <ul class="list-unstyled d-flex flex-column gap-3 mb-0">
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Everything in the Scale Plan</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">E-commerce functionality (if needed)</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Branded email template design</h6>
                        </li>
                        <li class="hstack gap-3">
                          <span
                            class="round-32 rounded-circle bg-primary flex-shrink-0 hstack justify-content-center"><iconify-icon
                              icon="lucide:check" class="fs-6 text-dark"></iconify-icon></span>
                          <h6 class="mb-0 fw-normal">Priority support for six months after launch</h6>
                        </li>
                      </ul>
                    </div>
                    <a href="" class="btn w-100 justify-content-center">
                      <span class="btn-text">Subscribe now</span>
                      <iconify-icon icon="lucide:arrow-up-right"
                        class="btn-icon bg-white text-dark round-52 rounded-circle hstack justify-content-center fs-7 shadow-sm"></iconify-icon>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="d-flex flex-column gap-8" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <p class="fs-5 mb-0 text-center text-dark">More than 320 trusted partners & clients</p>
            <div class="marquee w-100 d-flex align-items-center overflow-hidden">
              <div class="marquee-content d-flex align-items-center gap-8">
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-1.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-2.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-3.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-4.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-5.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-1.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-2.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-3.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-4.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-5.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-1.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-2.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-3.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-4.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-5.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-1.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-2.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-3.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-4.svg" alt="partners" class="img-fluid">
                </div>
                <div class="marquee-tag hstack justify-content-center">
                  <img src="../assets/images/pricing/partners-5.svg" alt="partners" class="img-fluid">
                </div>
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
                                <span class="round-36 flex-shrink-0 text-dark rounded-circle bg-primary hstack justify-content-center fw-medium">08</span>
                                <hr class="border-line">
                                <span class="badge text-bg-dark">Contact</span>
                            </div>
                            <h2 class="mb-0">Let's get in touch</h2>
                            <p class="mb-0 fs-5 text-dark">
                                Ready to start your project? We're here to help. Reach out to us through our social channels or email.
                            </p>
                            <ul class="social list-unstyled mb-0 hstack gap-2 justify-content-center">
                                <li><a href="https://www.facebook.com" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:facebook" class="fs-7 text-white"></iconify-icon></a></li>
                                <li><a href="https://www.twitter.com" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:twitter" class="fs-7 text-white"></iconify-icon></a></li>
                                <li><a href="https://www.instagram.com" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:instagram" class="fs-7 text-white"></iconify-icon></a></li>
                                <li><a href="mailto:contact@studiova.com" class="btn bg-dark-gray p-2 round-45 rounded-circle hstack justify-content-center"><iconify-icon icon="lucide:mail" class="fs-7 text-white"></iconify-icon></a></li>
                            </ul>
                            <a href="mailto:contact@studiova.com" class="btn btn-primary w-100 justify-content-center mt-3">
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

