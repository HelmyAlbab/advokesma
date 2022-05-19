  <div class="offcanvas offcanvas-start bg-dark text-white sidebar-nav" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
    <div class="offcanvas-body p-0">
      <nav class="navbar-dark">
        <ul class="navbar-nav mt-2">
          <li>
            <div class="text-muted small fw-bold text-uppercase px-3">Interface</div>
          </li>
          <li class="mt-2">
            <a class="nav-link px-3 mb-3 sidebar-link" href="/dashboard/aspirasi">
              <span class="me-3"><i class="bi bi-layout-split"></i></span>
              <span>Aspirasi</span>
            </a>
            <a class="nav-link px-3 mb-3 sidebar-link" href="/dashboard/jawaban">
              <span class="me-3"><i class="bi bi-question-circle"></i></span>
              <span>Pertanyaan</span>
            </a>
            <a class="nav-link px-3 mb-3 sidebar-link" href="/dashboard/topnews">
              <span class="me-3"><i class="bi bi-newspaper"></i></span>
              <span>Top News</span>
            </a>
          </li>
        </ul>
        <div class="position-absolute bottom-0 start-0 my-4 mx-3">
          <div class="small">Logged in as:</div>
          {{ auth()->user()->username }}
        </div>
      </nav>
    </div>
  </div>