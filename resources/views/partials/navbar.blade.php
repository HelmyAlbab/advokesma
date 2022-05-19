  <nav class="navbar mt-4 navbar-expand-lg navbar-light bg-white fixed-top" id="navbar">
    <div class="container">
      <a class="navbar-brand" id="nav-brand" href="/">ADVOKESMA</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasWithBothOptions" aria-controls="offcanvasWithBothOptions">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-center nav" id="navbarNav">
        <ul class="navbar-nav gap-2">
          <li class="nav-item">
            <a class="nav-link {{ ($active === "home") ? 'aktif' : '' }}" href="/">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "aspirasi") ? 'aktif' : '' }}" href="/aspirasi">Aspirasi</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "pertanyaan") ? 'aktif' : '' }}" href="/pertanyaan">Pertanyaan</a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ ($active === "about") ? 'aktif' : '' }}" href="/about">About Us</a>
          </li>
        </ul>
      </div>
      <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav gap-2">
          @auth
            <li class="nav-item dropdown">
              <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i> {{ auth()->user()->username }}</a>
              <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                @can('admin')
                  <li>
                    <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>
                  </li>
                  <li><hr class="dropdown-divider" /></li>
                @endcan
                <li>
                  <form action="logout" method="post">
                    @csrf
                    <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                  </form>
                </li>
              </ul>
            </li>
          @else
            <li class="nav-item">
              <a href="/login" class="nav-link {{ ($active === "login") ? 'aktif' : '' }}">Sign In</a>
            </li>
            <li class="nav-item">
              <a href="/registrasi" class="nav-link {{ ($active === "registrasi") ? 'aktif' : '' }}">Sign Up</a>
            </li>
          @endauth
        </ul>
      </div>
    </div>
  </nav>

  <!-- offcanvas -->
  <div class="offcanvas offcanvas-start" data-bs-scroll="true" tabindex="-1" id="offcanvasWithBothOptions" aria-labelledby="offcanvasWithBothOptionsLabel">
    <div class="offcanvas-header">
      <h5 class="offcanvas-title" id="offcanvasWithBothOptionsLabel">Navbar</h5>
      <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
    </div>
    <div class="offcanvas-body px-5">
      <ul class="navbar-nav gap-2">
        <li>
          <a href="/">Home</a>
        </li>
        <li>
          <a href="/aspirasi">Aspirasi</a>
        </li>
        <li>
          <a href="/pertanyaan">Pertanyaan</a>
        </li>
        <li>
          <a href="/about">About Us</a>
        </li>
        @auth
          <li class="nav-item dropdown">
            <a class="dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-person-fill"></i> {{ auth()->user()->username }}</a>
            <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
              <li>
                <a class="dropdown-item" href="/dashboard"><i class="bi bi-layout-text-sidebar-reverse"></i> Dashboard</a>
              </li>
              <li><hr class="dropdown-divider" /></li>
              <li>
                <form action="logout" method="post">
                  @csrf
                  <button type="submit" class="dropdown-item"><i class="bi bi-box-arrow-right"></i> Logout</button>
                </form>
              </li>
            </ul>
          </li>
        @else
          <li>
            <a href="/login">Sign In</a>
          </li>
          <li>
            <a href="/registrasi">Sign Up</a>
          </li>
        @endauth
      </ul>
    </div>
  </div>
  <!-- end offcanvas -->
