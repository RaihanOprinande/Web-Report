<header class="header border-4 border-primary border-top position-fixed start-0 top-0 w-100">
    <div class="container">
      <div class="header-wrapper d-flex align-items-center justify-content-between">
        <div class="logo d-flex align-items-center gap-2">
    <img src="/assets/images/logos/logo-remove.png" alt="Hydtech" class="logo-icon">

    <a href="{{ route('home') }}" class="logo-white">
        <span class="logo-text">Hydtech</span>
    </a>

    <a href="{{ route('home') }}" class="logo-dark">
        <span class="logo-text">Hydtech</span>
    </a>
</div>


        <div class="d-flex align-items-center gap-4">

        <div class="btn-group">
  <button
    class="btn btn-secondary toggle-menu round-45 p-2 d-flex align-items-center justify-content-center bg-white rounded-circle"
    type="button" data-bs-toggle="dropdown" data-bs-auto-close="true" aria-expanded="false">
    <iconify-icon icon="solar:hamburger-menu-line-duotone" class="menu-icon fs-8 text-dark"></iconify-icon>
  </button>
  <ul class="dropdown-menu dropdown-menu-end p-4">
    <div class="d-flex flex-column gap-6">
      <div class="hstack justify-content-between border-bottom pb-6">
        <p class="mb-0 fs-5 text-dark">Menu</p>
        <button type="button" class="btn-close opacity-75" aria-label="Close"></button>
      </div>
      <div class="d-flex flex-column gap-3">
        <ul class="header-menu list-unstyled mb-0 d-flex flex-column gap-2">
          <li class="header-item">
            <a href="{{ route('home') }}"
              class="header-link hstack gap-2 fs-7 fw-bold text-dark {{ request()->routeIs('home') ? 'active' : '' }}">
              <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                class="img-fluid animate-spin">Home
            </a>
          </li>
          <li class="header-item">
            <a href="{{ route('tentang') }}"
              class="header-link hstack gap-2 fs-7 fw-bold text-dark {{ request()->routeIs('tentang') ? 'active' : '' }}">
              <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                class="img-fluid animate-spin">About
            </a>
          </li>
          <li class="header-item">
            <a href="{{ route('projek') }}"
              class="header-link hstack gap-2 fs-7 fw-bold text-dark {{ request()->routeIs('projek') ? 'active' : '' }}">
              <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                class="img-fluid animate-spin">Projects
            </a>
          </li>
          <li class="header-item">
            <a href="{{ route('kontak') }}"
              class="header-link hstack gap-2 fs-7 fw-bold text-dark {{ request()->routeIs('kontak') ? 'active' : '' }}">
              <img src="../assets/images/svgs/secondary-leaf.svg" alt="" width="20" height="20"
                class="img-fluid animate-spin">Contact
            </a>
          </li>
        </ul>
        <div class="hstack gap-3 justify-content-center">
          <a href="{{ route('login') }}"
            class="btn btn-dark text-white fs-6 bg-dark px-3 py-2 w-50 hstack justify-content-center">Login</a>
        </div>
      </div>
      {{-- <div>
        <a class="text-dark" href=""https://www.instagram.com/hydtech.official/">@hydtech.official</a>
        <a class="fs-8 text-dark fw-bold" href="mailto:teamhydtech@gmail.com">teamhydtech@gmail.com</a>
      </div> --}}
    </div>
  </ul>
</div>

        </div>
      </div>
    </div>
  </header>
