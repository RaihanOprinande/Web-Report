<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Hydtech</title>
  <link rel="shortcut icon" type="image/png" href="../assets/images/logos/logo-remove.png" />
  <link rel="stylesheet" href="../assets/libs/owl.carousel/dist/assets/owl.carousel.min.css">
  <link rel="stylesheet" href="../assets/libs/aos-master/dist/aos.css">
  <link rel="stylesheet" href="../assets/css/styles.css" />

  <style>
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
      color: #0d6efd;
      text-shadow: 0 0 10px rgba(13, 110, 253, 0.2);
    }

    .password-toggle-btn {
      border: none;
      background: none;
      position: absolute;
      top: 50%;
      right: 10px;
      transform: translateY(-50%);
      cursor: pointer;
      padding: 0;
    }

    .position-relative {
      position: relative;
    }
  </style>
</head>

<body>

  <div class="page-wrapper overflow-hidden">

    <section class="bg-light-gray border-top border-primary border-4 d-flex align-items-center justify-content-center min-vh-100">
      <div class="container py-3">
        <div class="sign-in card mx-auto shadow-lg">
          <div class="card-body py-8 px-lg-5">

            <!-- Logo + Text -->
<a href="{{ route('home') }}" class="mb-4 hstack justify-content-center logo-text gap-2">
  <img src="../assets/images/logos/logo-remove.png"
       alt="Logo Hydtech"
       style="height: 40px; width: auto;">
  <span>Hydtech.</span>
</a>


            <!-- Keterangan login hanya admin -->
            <p class="text-center text-muted mb-4">
              Login khusus untuk Administrator
            </p>

            <!-- Form Login -->
            <form action="/login" method="POST" class="d-flex flex-column gap-4 mt-4">
              @csrf
              <div>
                <input type="email" class="form-control border-bottom" name="email" id="email"
                       placeholder="Enter admin email" required>
              </div>

              <div class="position-relative">
                <input type="password" class="form-control border-bottom" name="password" id="password"
                       placeholder="Enter password" required>

                <!-- Toggle Password -->
                <button type="button" class="password-toggle-btn" id="togglePassword">
                  <iconify-icon icon="mdi:eye-off" id="eyeIcon"></iconify-icon>
                </button>
              </div>

              <button type="submit"
                      class="btn btn-dark w-100 justify-content-center py-3 fw-medium my-3 fs-5 lh-lg">
                Sign In
              </button>
            </form>

          </div>
        </div>
      </div>
    </section>
  </div>

  <script src="../assets/libs/jquery/dist/jquery.min.js"></script>
  <script src="../assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
  <script src="../assets/libs/owl.carousel/dist/owl.carousel.min.js"></script>
  <script src="../assets/libs/aos-master/dist/aos.js"></script>
  <script src="../assets/js/custom.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/iconify-icon@1.0.8/dist/iconify-icon.min.js"></script>

  <script>
    const togglePassword = document.querySelector('#togglePassword');
    const password = document.querySelector('#password');
    const eyeIcon = document.querySelector('#eyeIcon');

    togglePassword.addEventListener('click', function () {
      const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
      password.setAttribute('type', type);
      eyeIcon.setAttribute('icon', type === 'password' ? 'mdi:eye-off' : 'mdi:eye');
    });
  </script>

</body>
</html>
