    <link href="img/logo.png" rel="shortcut icon">
 <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column" style="font-size: 18px">
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard') ? 'active ' : '' }}" aria-current="page" href="/dashboard">
              <span data-feather="home" class="align-text-bottom mb-1"></span>
              Dashboard
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('dashboard/posts*') ? 'active ' : '' }}" href="/dashboard/posts">
              <span data-feather="file-text" class="align-text-bottom mb-1"></span>
              My Posts
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link {{ Request::is('blog*') ? 'active ' : '' }}" href="/blog">
              <span data-feather="menu" class="align-text-bottom mb-1"></span>
              Back to All Posts
            </a>
          </li>
        </ul>

      </div>
    </nav>