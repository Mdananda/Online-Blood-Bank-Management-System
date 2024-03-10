<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Blood Bank (Online Blood Management System)</title>
</head>
<body>
  <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo"  href="{{URL::to('/home')}}"><img src="admin/assets/images/logo main.png" alt="logo"/></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="admin/assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item nav-category">
            <h1 class="nav-link" style="font-size: 25px;">Menu</h1>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/users')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Users</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{'/activedonors'}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Active Donors</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link"href="{{url('/registrationdonor')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Donor Registration</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{'/blogs'}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">All Blog</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{'/feedbacks'}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Feedbacks</span>
            </a>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" href="{{'/donations'}}">
              <span class="menu-icon">
                <i class="mdi mdi-contacts"></i>
              </span>
              <span class="menu-title">Donation</span>
            </a>
          </li>

        </ul>
  </nav>
</body>
</html>