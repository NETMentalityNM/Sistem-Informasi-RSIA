<nav class="topnav navbar navbar-light">
    <button type="button" class="navbar-toggler text-muted mt-2 p-0 mr-3 collapseSidebar">
      <i class="fe fe-menu navbar-toggler-icon"></i>
    </button>
    <form class="form-inline mr-auto searchform text-muted">
      <input class="form-control mr-sm-2 bg-transparent border-0 pl-4 text-muted" type="search" placeholder="Type something..." aria-label="Search">
    </form>
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link text-muted my-2" href="#" id="modeSwitcher" data-mode="dark">
          <i class="fe fe-sun fe-16"></i>
        </a>
      </li>
      <li class="nav-item">
        <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-shortcut">
          <span class="fe fe-grid fe-16"></span>
        </a>
      </li>
      <li class="nav-item nav-notif">
        <a class="nav-link text-muted my-2" href="./#" data-toggle="modal" data-target=".modal-notif">
          <span class="fe fe-bell fe-16"></span>
          <span class="dot dot-md bg-success"></span>
        </a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle text-muted pr-0" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <span class="avatar avatar-sm mt-2">
            <img src="{{asset('tinydash-master/dark/assets/avatars/face-1.jpg')}}" alt="..." class="avatar-img rounded-circle">
          </span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Profile</a>
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activities</a>
          <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Logout</a>
          <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
          </form>
        </div>
      </li>
    </ul>
  </nav>
<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
    <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
      <i class="fe fe-x"><span class="sr-only"></span></i>
    </a>
    <nav class="vertnav navbar navbar-light">
      <!-- nav bar -->
      <div class="w-100 mb-4 d-flex">
        <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
          <svg version="1.1" id="logo" class="navbar-brand-img brand-sm" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 120 120" xml:space="preserve">
            <g>
              <polygon class="st0" points="78,105 15,105 24,87 87,87 	" />
              <polygon class="st0" points="96,69 33,69 42,51 105,51 	" />
              <polygon class="st0" points="78,33 15,33 24,15 87,15 	" />
            </g>
          </svg>
        </a>
      </div>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item ">
          <a href="{{route('dashboard')}}" data-toggle="" aria-expanded="false" class="toggle nav-link">
            <i class="fe fe-home fe-16"></i>
            <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
          </a>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Informasi Pasien</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="/pasien" data-toggle="" aria-expanded="false" class="toggle nav-link">
            <i class="fe fe-box fe-16"></i>
            <span class="ml-3 item-text">Pasien</span>
          </a>
        </li>
        <li class="nav-item w-100">
          <a class="nav-link" href="widgets.html">
            <i class="fe fe-layers fe-16"></i>
            <span class="ml-3 item-text">Pengambilan Obat</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#forms" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-credit-card fe-16"></i>
            <span class="ml-3 item-text">Forms</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="forms">
            <li class="nav-item">
              <a class="nav-link pl-3" href="./form_elements.html"><span class="ml-1 item-text">Basic Elements</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./form_advanced.html"><span class="ml-1 item-text">Advanced Elements</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./form_validation.html"><span class="ml-1 item-text">Validation</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./form_wizard.html"><span class="ml-1 item-text">Wizard</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./form_layouts.html"><span class="ml-1 item-text">Layouts</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./form_upload.html"><span class="ml-1 item-text">File upload</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#tables" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-grid fe-16"></i>
            <span class="ml-3 item-text">Tables</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="tables">
            <li class="nav-item">
              <a class="nav-link pl-3" href="./table_basic.html"><span class="ml-1 item-text">Basic Tables</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./table_advanced.html"><span class="ml-1 item-text">Advanced Tables</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./table_datatables.html"><span class="ml-1 item-text">Data Tables</span></a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#charts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-pie-chart fe-16"></i>
            <span class="ml-3 item-text">Charts</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="charts">
            <li class="nav-item">
              <a class="nav-link pl-3" href="./chart-inline.html"><span class="ml-1 item-text">Inline Chart</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./chart-chartjs.html"><span class="ml-1 item-text">Chartjs</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./chart-apexcharts.html"><span class="ml-1 item-text">ApexCharts</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./datamaps.html"><span class="ml-1 item-text">Datamaps</span></a>
            </li>
          </ul>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Informasi Pegawai</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item w-100">
          <a class="nav-link" href="calendar.html">
            <i class="fe fe-calendar fe-16"></i>
            <span class="ml-3 item-text">Calendar</span>
          </a>
        </li>
        <li class="nav-item dropdown">
          <a href="#contact" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-book fe-16"></i>
            <span class="ml-3 item-text">Contacts</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="contact">
            <a class="nav-link pl-3" href="./contacts-list.html"><span class="ml-1">Contact List</span></a>
            <a class="nav-link pl-3" href="./contacts-grid.html"><span class="ml-1">Contact Grid</span></a>
            <a class="nav-link pl-3" href="./contacts-new.html"><span class="ml-1">New Contact</span></a>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#profile" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-user fe-16"></i>
            <span class="ml-3 item-text">Profile</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="profile">
            <a class="nav-link pl-3" href="./profile.html"><span class="ml-1">Overview</span></a>
            <a class="nav-link pl-3" href="./profile-settings.html"><span class="ml-1">Settings</span></a>
            <a class="nav-link pl-3" href="./profile-security.html"><span class="ml-1">Security</span></a>
            <a class="nav-link pl-3" href="./profile-notification.html"><span class="ml-1">Notifications</span></a>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#fileman" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-folder fe-16"></i>
            <span class="ml-3 item-text">File Manager</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="fileman">
            <a class="nav-link pl-3" href="./files-list.html"><span class="ml-1">Files List</span></a>
            <a class="nav-link pl-3" href="./files-grid.html"><span class="ml-1">Files Grid</span></a>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#support" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-compass fe-16"></i>
            <span class="ml-3 item-text">Help Desk</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="support">
            <a class="nav-link pl-3" href="./support-center.html"><span class="ml-1">Home</span></a>
            <a class="nav-link pl-3" href="./support-tickets.html"><span class="ml-1">Tickets</span></a>
            <a class="nav-link pl-3" href="./support-ticket-detail.html"><span class="ml-1">Ticket Detail</span></a>
            <a class="nav-link pl-3" href="./support-faqs.html"><span class="ml-1">FAQs</span></a>
          </ul>
        </li>
      </ul>
      <p class="text-muted nav-heading mt-4 mb-1">
        <span>Extra</span>
      </p>
      <ul class="navbar-nav flex-fill w-100 mb-2">
        <li class="nav-item dropdown">
          <a href="#pages" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-file fe-16"></i>
            <span class="ml-3 item-text">Pages</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100 w-100" id="pages">
            <li class="nav-item">
              <a class="nav-link pl-3" href="./page-orders.html">
                <span class="ml-1 item-text">Orders</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./page-timeline.html">
                <span class="ml-1 item-text">Timeline</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./page-invoice.html">
                <span class="ml-1 item-text">Invoice</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./page-404.html">
                <span class="ml-1 item-text">Page 404</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./page-500.html">
                <span class="ml-1 item-text">Page 500</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./page-blank.html">
                <span class="ml-1 item-text">Blank</span>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#auth" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-shield fe-16"></i>
            <span class="ml-3 item-text">Authentication</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="auth">
            <a class="nav-link pl-3" href="./auth-login.html"><span class="ml-1">Login 1</span></a>
            <a class="nav-link pl-3" href="./auth-login-half.html"><span class="ml-1">Login 2</span></a>
            <a class="nav-link pl-3" href="./auth-register.html"><span class="ml-1">Register</span></a>
            <a class="nav-link pl-3" href="./auth-resetpw.html"><span class="ml-1">Reset Password</span></a>
            <a class="nav-link pl-3" href="./auth-confirm.html"><span class="ml-1">Confirm Password</span></a>
          </ul>
        </li>
        <li class="nav-item dropdown">
          <a href="#layouts" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
            <i class="fe fe-layout fe-16"></i>
            <span class="ml-3 item-text">Layout</span>
          </a>
          <ul class="collapse list-unstyled pl-4 w-100" id="layouts">
            <li class="nav-item">
              <a class="nav-link pl-3" href="./index.html"><span class="ml-1 item-text">Default</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./index-horizontal.html"><span class="ml-1 item-text">Top Navigation</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link pl-3" href="./index-boxed.html"><span class="ml-1 item-text">Boxed</span></a>
            </li>
          </ul>
        </li>
      </ul>
    </nav>
  </aside>