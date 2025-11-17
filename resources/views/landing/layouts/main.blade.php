<!doctype html>
<html lang="en">

<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>@yield('title', 'Hydtech')</title>

{{-- Link CSS dari template Anda --}}
<link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-remove.png" />
<link rel="stylesheet" href="{{ asset('assets/libs/owl.carousel/dist/assets/owl.carousel.min.css') }}">
<link rel="stylesheet" href="{{ asset('assets/libs/aos-master/dist/aos.css') }}">
<link rel="stylesheet" href="{{ asset('assets/css/styles.css') }}" />

<style>
    .logo-icon {
    max-width: 100%;
    height: auto;
    object-fit: contain;
    /* batas ukuran maksimum (agar tidak terlalu besar) */
    max-height: 40px;
}

    .logo .logo-white .logo-text {
      color: white;
      font-size: 36px;
      font-weight: bold;
      font-family: "Poppins", sans-serif;
    }

    .logo .logo-dark .logo-text {
      color: #212529;
      font-size: 36px;
      font-weight: bold;
      font-family: "Poppins", sans-serif;
    }



  </style>
{{-- Ini adalah tempat untuk CSS khusus halaman --}}
@stack('styles')
</head>

<body>
@include('landing.layouts.header')
<div class="page-wrapper overflow-hidden">
{{-- Masukkan konten halaman di sini --}}
@yield('content')
</div>
@include('landing.layouts.footer')


<div class="get-template hstack gap-2">
    <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
      id="scrollToTopBtn">
      <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
    </button>
</div>

{{-- Masukkan semua library JavaScript di sini --}}
<script src="{{ asset('assets/libs/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js') }}"></script>
<script src="{{ asset('assets/libs/owl.carousel/dist/owl.carousel.min.js') }}"></script>
<script src="{{ asset('assets/libs/aos-master/dist/aos.js') }}"></script>
<script src="{{ asset('assets/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>


{{-- Ini adalah tempat untuk skrip khusus halaman --}}
@stack('scripts')
<script>
    $('.owl-carousel').owlCarousel({
  loop: true,
  margin: 30,
  nav: false,
  dots: true, // Anda bisa ubah ke false jika tidak ingin ada titik navigasi
  autoplay: true,
  autoplayTimeout: 5000,
  responsive: {
    0: {
      items: 1 // Tampilkan 1 item di layar sangat kecil
    },
    768: {
      items: 2 // Tampilkan 2 item di layar tablet
    },
    992: {
      items: 4 // Tampilkan 4 item di layar yang lebih besar
    }
  }
});

  $(document).ready(function(){
    $(".owl-carousel").owlCarousel({
      loop:true,
      margin:20,
      autoplay:true,
      autoplayTimeout:2000,
      autoplayHoverPause:true,
      responsive:{
        0:{ items:2 },
        576:{ items:3 },
        768:{ items:4 },
        1200:{ items:6 }
      }
    });
    });



</script>

</body>
</html>
