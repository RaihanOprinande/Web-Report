<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Hydtech</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-remove.png" />
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css">
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <style>
    /* Logo text styling */
    .logo-text {
      font-family: 'Poppins', sans-serif;
      font-weight: 700;
      font-size: 2.2rem;
      color: #222;
      text-decoration: none;
      letter-spacing: 1px;
      transition: all 0.3s ease;
    }

    .logo-text:hover {
      color: #0d6efd; /* biru elegan */
      text-shadow: 0 0 10px rgba(13, 110, 253, 0.2);
    }
  </style>
</head>

<body>

  <!--  Page Wrapper -->
  <div class="page-wrapper overflow-hidden">

    <!--  Get in touch Section -->
    <section class="bg-light-gray border-top border-primary border-4 d-flex align-items-center justify-content-center min-vh-100">
      <div class="container py-3">
        <div class="sign-in card mx-auto shadow-lg">
          <div class="card-body py-8 px-lg-5">
            <!-- Ganti gambar logo jadi teks Hydtech -->
            <a href="index.html" class="mb-8 hstack justify-content-center logo-text">
             Admin Hydtech
            </a>

            <div class="hstack gap-3">
              <a href="javascript:void(0)"
                class="btn btn-outline-light bg-white px-3 py-2 fs-4 text-dark w-50 fw-medium hstack gap-2 lh-lg justify-content-center">
                Sign In <img src="../assets/images/svgs/icon-google.svg" alt="google" class="img-fluid">
              </a>
              <a href="javascript:void(0)"
                class="btn btn-outline-light bg-white px-3 py-2 fs-4 text-dark w-50 fw-medium hstack gap-2 lh-lg justify-content-center">
                Sign In <img src="../assets/images/svgs/icon-github.svg" alt="github" class="img-fluid">
              </a>
            </div>

            <div class="position-relative hstack justify-content-center">
              <hr class="my-8 w-100 d-block">
              <p class="mb-0 fs-3 bg-body px-3 position-absolute top-50 start-50 translate-middle">OR</p>
            </div>

            <form action="/login" method="POST" class="d-flex flex-column gap-4 mt-5">
                @csrf
              <div>
                <input type="email" class="form-control border-bottom"  name="email"
           id="email"
           placeholder="Enter your email"
           required>
              </div>
              <div>
                <input type="password" class="form-control border-bottom"name="password"
           id="password"
           placeholder="••••••••"
           required>

              <button type="submit"
          class="btn btn-dark w-100 justify-content-center py-3 fw-medium my-3 fs-5 lh-lg">
    Sign In
  </button>
</form>



            <a class="text-center mb-1 d-block text-dark fw-medium" href="#">Forget Password?</a>
            <p class="mb-0 fw-medium text-center">
              Not a member yet? <a class="text-dark" href="sign-up.html">Sign Up</a>
            </p>
          </div>
        </div>
      </div>
    </section>
  </div>

  <div class="get-template hstack gap-2">
    <button class="btn bg-primary p-2 round-52 rounded-circle hstack justify-content-center flex-shrink-0"
      id="scrollToTopBtn">
      <iconify-icon icon="lucide:arrow-up" class="fs-7 text-dark"></iconify-icon>
    </button>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../assets/libs/aos-master/dist/aos.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>
</body>

</html>
