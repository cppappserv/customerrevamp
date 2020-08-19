<!-- Brand Logo -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Sidebar -->
    <div class="sidebar">
        <a href="{{url('/home')}}" class="brand-link">
          <img src="/dist/img/AdminLTELogo.png"
               alt="AdminLTE Logo"
               class="brand-image img-circle elevation-3"
               style="opacity: .8">
               <meta name="csrf-token" content="{{ csrf_token() }}">
          <span class="brand-text font-weight-light">{{env('APP_NAME', 'Laravel')}}</span>
        </a>
      <!-- Sidebar user (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">{{{ isset(Auth::user()->name) ? Auth::user()->name : Auth::user()->email }}}</a>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <?php $akses = session('__ADMINSESSION__'); ?>
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" 
          data-widget="treeview" 
          role="menu" 
          data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            
               <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="fas fa-landmark nav-icon"></i>
              
              <p>
                Master
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/company" class="nav-link">
                  <i class="fas fa-book-reader nav-icon"></i>
                  <p>Company</p>
                </a>
              </li>
              
              <li class="nav-item">
                <a href="/plant" class="nav-link">
                  <i class="fas fa-book-reader nav-icon"></i>
                  <p>Plant</p>
                </a>
              </li>
            </ul>
          </li>


          <!-- <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Transaksi
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="#" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Level 2</p>
                </a>
              </li>
            </ul>
          </li> -->

          <li class="nav-item has-treeview">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Administrator
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="/setuser" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Receiver</p>
                </a>
              </li>
             
              <li class="nav-item">
                <a href="/otorisasiweb" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User Akses Web</p>
                </a>
              </li>




        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>