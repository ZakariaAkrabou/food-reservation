<div class="leftside-menu">

  <!-- Brand Logo Light -->
  <a href="index.html" class="logo logo-light">
      <span class="logo-lg">
          <img src="{{ asset('admin/assets/images/logo.png') }}" alt="logo">
      </span>
      <span class="logo-sm">
          <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo">
      </span>
  </a>

  <!-- Brand Logo Dark -->
  <a href="index.html" class="logo logo-dark">
      <span class="logo-lg">
          <img src="{{ asset('admin/assets/images/logo-dark.png') }}" alt="dark logo">
      </span>
      <span class="logo-sm">
          <img src="{{ asset('admin/assets/images/logo-sm.png') }}" alt="small logo">
      </span>
  </a>

  <!-- Sidebar -left -->
  <div class="h-100" id="leftside-menu-container" data-simplebar>
      <!--- Sidemenu -->
      <ul class="side-nav">

          <li class="side-nav-title">Home</li>

            <li class="side-nav-item">
                <a href="{{ route('dashboard.index') }}" class="side-nav-link">
                    <i class="ri-dashboard-3-line"></i>
                    <span class="badge bg-success float-end">9+</span>
                    <span> Dashboard </span>
                </a>
            </li>

            <li class="side-nav-item">
              <a data-bs-toggle="collapse" href="#sidebarPages" aria-expanded="false" aria-controls="sidebarPages" class="side-nav-link">
                  <i class="ri-pages-line"></i>
                  <span> Categories </span>
                  <span class="menu-arrow"></span>
              </a>
              <div class="collapse" id="sidebarPages">
                  <ul class="side-nav-second-level">
                      <li>
                          <a href="{{ route('category.index') }}">Category list</a>
                      </li>
                  </ul>
              </div>
            </li>

          
            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarIcons" aria-expanded="false" aria-controls="sidebarIcons" class="side-nav-link">
                    <i class="ri-pencil-ruler-2-line"></i>
                    <span>Pivot Tables </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarIcons">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('tables.index') }}">Tables List</a>
                        </li>
                        
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarExtendedUI" aria-expanded="false" aria-controls="sidebarExtendedUI" class="side-nav-link">
                    <i class="ri-compasses-2-line"></i>
                    <span> Reservation </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarExtendedUI">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('reservation.index') }}">List of Reservations</a>
                        </li>
                       
                    </ul>
                </div>
            </li>

            <li class="side-nav-item">
                <a data-bs-toggle="collapse" href="#sidebarCharts" aria-expanded="false" aria-controls="sidebarCharts" class="side-nav-link">
                    <i class="ri-donut-chart-fill"></i>
                    <span> Menus </span>
                    <span class="menu-arrow"></span>
                </a>
                <div class="collapse" id="sidebarCharts">
                    <ul class="side-nav-second-level">
                        <li>
                            <a href="{{ route('menus.index') }}">Menus List</a>
                        </li>
                       
                    </ul>
                </div>
            </li>


      </ul>
      <!--- End Sidemenu -->

      <div class="clearfix"></div>
  </div>
</div>