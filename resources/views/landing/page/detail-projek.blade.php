@extends('landing.layouts.main')

@section('title', 'Detail Projek')

@section('content')

    <!--  Banner Section -->
    <section class="banner-section banner-inner-section position-relative overflow-hidden d-flex align-items-end"
      style="background-image: url('{{ asset('storage/'.$projek->thumbnail) }}'); background-size: cover; background-position: center;">
      <div class="container">
        <div class="d-flex flex-column gap-4 pb-5 pb-xl-10 position-relative z-1">
          <div class="row align-items-center">
            <div class="col-xl-4">
              <div class="d-flex align-items-center gap-4" data-aos="fade-up" data-aos-delay="100"
                data-aos-duration="1000">
                <img src="../assets/images/svgs/secondary-leaf.svg" alt="" class="img-fluid animate-spin">
                <p class="mb-0 text-white fs-5 text-opacity-70"> <span class="text-primary">{{ $projek->kategori->nama_kategori ?? 'Tanpa Kategori' }}</span></p>
              </div>
            </div>
          </div>
          <div class="d-flex align-items-end gap-3" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <h1 class="mb-0 fs-16 text-white lh-1">{{ $projek->name_projek }}</h1>
            <a href="javascript:void(0)" class="p-1 ps-7 bg-primary rounded-pill">
              <span class="bg-white round-52 rounded-circle d-flex align-items-center justify-content-center">
                <iconify-icon icon="lucide:arrow-up-right" class="fs-8 text-dark"></iconify-icon>
              </span>
            </a>
          </div>
        </div>
      </div>
    </section>


    <!--  Project Detail Section -->
<section class="project-detail py-5 py-lg-11 py-xl-12">
  <div class="container">
    <div class="d-flex flex-column gap-5 gap-xl-11">

      <!-- Info Ringkas -->
      <div class="d-flex flex-column gap-8">
        <a href="{{ route('projek.index') }}" class="btn py-2 ps-3 pe-5" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
          <span class="btn-text pe-1">Back</span>
          <iconify-icon icon="lucide:arrow-up-right" class="btn-icon bg-white text-dark round-36 rounded-circle hstack justify-content-center fs-5 shadow-sm"></iconify-icon>
        </a>

        <div class="d-md-flex align-items-center gap-4 gap-lg-8" data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
          <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
            <p class="mb-0">Kategori</p>
            <p class="mb-0 text-dark fs-5 fw-medium">{{ $projek->kategori->nama_kategori ?? '-' }}</p>
          </div>
          <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
            <p class="mb-0">Client</p>
            <p class="mb-0 text-dark fs-5 fw-medium">{{ $projek->client ?? '-' }}</p>
          </div>
          <div class="d-flex flex-column gap-2 py-2 pe-4 pe-lg-8 border-end">
            <p class="mb-0">Status</p>
            <p class="mb-0 text-dark fs-5 fw-medium">{{ ucfirst($projek->status) }}</p>
          </div>
          <div class="d-flex flex-column gap-2 py-2">
            <p class="mb-0">Deadline</p>
            <p class="mb-0 text-dark fs-5 fw-medium">{{ \Carbon\Carbon::parse($projek->deadline)->format('d M Y') }}</p>
          </div>
        </div>
      </div>

      <!-- Deskripsi -->
      <div class="row gap-4 gap-lg-0">
        <div class="col-lg-4">
          <h2 class="fs-13 mb-0" data-aos="fade-right" data-aos-delay="200" data-aos-duration="1000">Deskripsi</h2>
        </div>
        <div class="col-lg-8">
          <div data-aos="fade-up" data-aos-delay="200" data-aos-duration="1000">
            <p class="fs-5 mb-6">{{ $projek->deskripsi ?? '-' }}</p>

            {{-- <h4>Progress Tasks</h4>
            <ul class="list-unstyled fs-5 mb-6">
              @forelse($projek->tasks as $task)
                <li class="mb-2">
                  <i class="bi {{ $task->status == 'selesai' ? 'bi-check-circle-fill text-success' : 'bi-clock text-warning' }}"></i>
                  {{ $task->task }} — <small>{{ ucfirst($task->status) }}</small>
                </li>
              @empty
                <li class="text-muted">Belum ada task untuk projek ini.</li>
              @endforelse
            </ul> --}}
          </div>
        </div>
      </div>

      <!-- Dokumentasi -->
      {{-- <div class="row">
        @forelse($projek->dokumentasi as $doc)
          <div class="col-lg-6 mb-7" data-aos="fade-up" data-aos-delay="100" data-aos-duration="1000">
            <img src="{{ asset('storage/'.$doc->gambar) }}" alt="dokumentasi" class="w-100 object-fit-cover rounded-3 shadow-sm">
            @if($doc->deskripsi)
              <p class="mt-2 text-muted">{{ $doc->deskripsi }}</p>
            @endif
          </div>
        @empty
          <div class="col-12 text-center text-muted py-5">Belum ada dokumentasi untuk projek ini.</div>
        @endforelse
      </div> --}}

    </div>
  </div>
</section>

  </div>

@endsection
