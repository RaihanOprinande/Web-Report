@extends('landing.layouts.main')

@section('title', 'Kontak')

@section('content')

<!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
      style="background-image: url(../assets/images/backgrounds/contact-banner.jpg);">
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="../assets/images/svgs/primary-leaf.svg" alt="" class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70">Ready to <span class="text-primary">start
                    something</span> great? Reach out we’d love to hear from you.</p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">Contact</h1>
            <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
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
