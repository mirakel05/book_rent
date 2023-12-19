 <!-- Sidebar -->
 <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

     <!-- Sidebar - Brand -->
     <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard">
         <div class="sidebar-brand-icon rotate-n-15">
            <img src="/assets/img/bookfull.png" width="75" alt="">
         </div>
         <div class="sidebar-brand-text mx-3">Mild Rent`Book</div>
     </a>

     <!-- Divider -->
     <hr class="sidebar-divider my-0">

     <!-- Nav Item - Dashboard -->
     <!-- Nav Item - Charts -->
     @if (Auth::user())
         @if (Auth::user()->role_id == 1)
             <li class="nav-item @yield('dashboard')">
                 <a class="nav-link" href="dashboard" @if (request()->route()->uri == 'dashboard') class='active' @endif>
                     <i class="fas fa-fw fa-tachometer-alt"></i>
                     <span>Dashboard</span></a>
             </li>
             <hr class="sidebar-divider">
             <li class="nav-item @yield('listbuku')">
                 <a class="nav-link" href="/">
                     <i class="fas fa-fw fa-bookmark"></i>
                     <span>Book List</span></a>
             </li>
             <li class="nav-item @yield('buku')">
                 <a class="nav-link" href="books">
                     <i class="fas fa-fw fa-book"></i>
                     <span>Buku</span></a>
             </li>
             <li class="nav-item @yield('kategori')">
                 <a class="nav-link" href="categories" @if (request()->route()->uri == 'categories') class='active' @endif>
                     <i class="fas fa-fw fa-list"></i>
                     <span>Kategori</span></a>
             </li>
             <li class="nav-item @yield('user')">
                 <a class="nav-link" href="users">
                     <i class="fas fa-fw fa-user"></i>
                     <span>User</span></a>
             </li>
             <hr class="sidebar-divider">
            <div class="sidebar-heading">
                LAPORAN
            </div>
             <li class="nav-item @yield('rentlog')">
                 <a class="nav-link" href="rent-logs">
                     <i class="fas fa-fw fa-file-invoice"></i>
                     <span>Rent Log</span></a>
             </li>
             <li class="nav-item @yield('rentbuku')">
                 <a class="nav-link" href="book-rent">
                     <i class="fas fa-fw fa-file"></i>
                     <span>Book Rent</span></a>
             </li>
             <li class="nav-item @yield('returnbook')">
                 <a class="nav-link" href="book-return">
                     <i class="fas fa-fw fa-folder"></i>
                     <span>Book Return</span></a>
             </li>
             <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link" href="/logout" data-toggle="modal" data-target="#logoutModal">
                     <i class="fas fa-fw fa-sign-out-alt"></i>
                     <span>Logout</span></a>
             </li>
         @else
             <li class="nav-item @yield('profile')">
                 <a class="nav-link" href="profile">
                     <i class="fas fa-fw fa-user"></i>
                     <span>Profile</span></a>
             </li>
             <li class="nav-item @yield('listbuku')">
                 <a class="nav-link" href="/">
                     <i class="fas fa-fw fa-bookmark"></i>
                     <span>Book List</span></a>
             </li>
             <hr class="sidebar-divider">
             <li class="nav-item">
                 <a class="nav-link" href="/logout" data-toggle="modal" data-target="#logoutModal">
                     <i class="fas fa-fw fa-sign-out-alt"></i>
                     <span>Logout</span></a>
             </li>
         @endif
     @else
         <li class="nav-item">
             <a class="nav-link" href="login">
                 <i class="fas fa-fw fa-sign-in-alt"></i>
                 <span>Login</span></a>
         </li>
     @endif
     <!-- Divider -->
     <hr class="sidebar-divider d-none d-md-block">

     <!-- Sidebar Toggler (Sidebar) -->
     <div class="text-center d-none d-md-inline">
         <button class="rounded-circle border-0" id="sidebarToggle"></button>
     </div>
 </ul>
 <!-- End of Sidebar -->
