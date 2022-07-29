<header class="navbar navbar-dark sticky-top bg-primary flex-md-nowrap p-0 shadow">
  <link href="img/logo.png" rel="shortcut icon">
  <a class="navbar-brand text-decoration-none bg-primary col-md-3 col-lg-2 me-0 px-3" style="font-size: 20px ; font-weight: bold" href="#">PANEL OPTION</a>
  <button class="navbar-toggler position-absolute d-md-none collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sidebarMenu" aria-controls="sidebarMenu" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="navbar-nav">
    <div class="nav-item text-nowrap">
      <form action="/logout" method="post">
           @csrf
          <button type="submit" class="nav-link px-4 bg-primary border-0" style="font-size: 20px ; font-weight: bold;color: white">Logout <span data-feather="log-out" class="align-text-bottom mb-1"></span></button>
      </form>
    </div>
  </div>
</header>