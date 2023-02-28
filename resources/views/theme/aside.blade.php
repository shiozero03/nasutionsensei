<div class="sidenav-header">
  <i class="fas fa-times p-3 cursor-pointer text-dark opacity-5 position-absolute end-0 top-0 d-none d-xl-none" aria-hidden="true" id="iconSidenav"></i>
  <a class="navbar-brand m-0" href="#">
    <img src="{{ asset('assets/images/logo.png') }}" class="navbar-brand-img h-100" alt="main_logo">
    <span class="ms-1 font-weight-bold">SHIOTA ZERO</span>
  </a>
</div>
<hr class="horizontal dark mt-0">
<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Dashboard</h6>
    </li>
    <li class="nav-item">
      <a class="nav-link" id="dashboard" href="{{ route('admin.dashboard') }}">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-tv-2 text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Account Pages</h6>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ route('admin.profile') }}" id="profile">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-single-02 text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Profile</span>
      </a>
    </li>

    <!-- Content -->
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Content</h6>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ route('admin.article') }}" id="article">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-book-bookmark text-danger text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Article</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ route('admin.message') }}" id="message">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-archive-2 text-success text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Message</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ route('admin.subscribe') }}" id="subscribe">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-email-83 text-primary text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Subscriber</span>
      </a>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ route('admin.orders') }}" id="order">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-credit-card text-dark text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Orders</span>
      </a>
    </li>
    <!-- End Content -->

    <!-- Portfolio -->
    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">Portfolio</h6>
    </li>
    <li class="nav-item">
      <a class="nav-link " href="{{ route('admin.portfolio') }}" id="portfolio">
        <div class="icon icon-shape icon-sm border-radius-md text-center me-2 d-flex align-items-center justify-content-center">
          <i class="ni ni-world-2 text-success text-sm opacity-10"></i>
        </div>
        <span class="nav-link-text ms-1">Portfolio</span>
      </a>
    </li>
    <!-- End Portolio -->

    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6"><br></h6>
    </li>
  </ul>
</div>