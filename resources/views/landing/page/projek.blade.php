@extends('landing.layouts.main')

@section('title', 'Tentang')

@section('content')

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
      style="background-image: url(../assets/images/backgrounds/projek.jpg);">
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="../assets/images/svgs/secondary-leaf.svg" alt="" class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70">A <span class="text-primary">showcase of
                    creativity</span>, strategy, and results explore the projects that define us.</p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">Projects</h1>
            <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>

    <!--  Project Section -->
    <section class="project py-5 py-lg-11 py-xl-12">
  <div class="container">
    <div class="row">
      @foreach($projek as $key => $item)
        <div class="col-lg-6 mb-7">
          <div class="portfolio d-flex flex-column gap-6"
               data-aos="fade-up"
               data-aos-delay="{{ ($key+1) * 100 }}"
               data-aos-duration="1000">

            <!-- Thumbnail -->
<div class="portfolio-img position-relative overflow-hidden" style="height: 300px;">
  @if($item->thumbnail)
    <img src="{{ asset('storage/'.$item->thumbnail) }}"
         alt="{{ $item->name_projek }}"
         class="img-fluid w-100 h-100"
         style="object-fit: cover; background: #f8f9fa;">
  @else
    <img src="{{ asset('assets/images/no-image.png') }}"
         alt="no image"
         class="img-fluid w-100 h-100"
         style="object-fit: cover; background: #f8f9fa;">
  @endif

  <!-- Overlay Slide Down -->
  <div class="portfolio-overlay d-flex flex-column justify-content-center align-items-center text-center px-3">
    <a href="{{ route('detailProjek', $item->id) }}" class="btn btn-light btn-sm">
      View Detail</a>
  </div>
</div>


            <!-- Detail Projek -->
            <div class="portfolio-details d-flex flex-column gap-3">
              <h3 class="mb-0">{{ $item->name_projek }}</h3>
              <div class="hstack gap-2">
                @if($item->kategori)
                  <span class="badge text-dark border">{{ $item->kategori->nama_kategori }}</span>
                @endif
                <span class="badge text-dark border">{{ ucfirst($item->client) }}</span>
              </div>
            </div>
          </div>
        </div>
      @endforeach
    </div>
  </div>
</section>


  </div>

@endsection
