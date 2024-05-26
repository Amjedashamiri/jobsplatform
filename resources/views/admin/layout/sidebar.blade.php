<aside class="main-sidebar sidebar-dark-primary elevation-3">
    <!-- Brand Logo -->
    <div class=" brand-bg-success">
    <a href="" class="brand-link bg-success ">
      <img src="admin/images/log.png" alt="" class="brand-image img-circle elevation-2" height="120" width="90" style="opacity: .8">
      <span class="brand-text font-weight-bold ">WAZIFATI HUNA</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar bg-success">
      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>
      <!-- Sidebar Menu -->
<nav class="mt-2">
  <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Contact Messages -->
      <li class="nav-item">
          <a href="{{ route('messages.index') }}" class="nav-link">
              <i class="nav-icon fas fa-envelope"></i>
              <p>Contact Messages</p>
          </a>
      </li>
      <!-- Job Requests -->
      <li class="nav-item">
          <a href="{{ route('job-requests.index') }}" class="nav-link">
              <i class="nav-icon fas fa-file-alt"></i>
              <p>Job Requests</p>
          </a>
      </li>
      <!-- Jobs -->
      <li class="nav-item">
          <a href="{{ route('JobReview') }}" class="nav-link">
              <i class="nav-icon fas fa-briefcase"></i>
              <p>Jobs</p>
          </a>
      </li>
      <!-- Companies -->
      <li class="nav-item">
          <a href="{{ route('companies.index') }}" class="nav-link">
              <i class="nav-icon fas fa-building"></i>
              <p>Companies</p>
          </a>
      </li>
      <!-- Recommendation Courses -->
      <li class="nav-item">
          <a href="" class="nav-link">
              <i class="nav-icon fas fa-graduation-cap"></i>
              <p class="text-sm">Recommendation Courses</p>
          </a>
      </li>
      <!-- Improve Your CV -->
      <li class="nav-item">
          <a href="{{ route('showimprove') }}" class="nav-link">
              <i class="nav-icon fas fa-user-edit"></i>
              <p>Improve Your CV</p>
          </a>
      </li>
       <!-- Improve Your CV -->
       <li class="nav-item">
        <a href="{{ route('cv-requests') }}" class="nav-link">
            <i class="fa fa-briefcase"></i>
            <p> Improve CV Requests</p>
        </a>
    </li>
      <!-- CV Settings -->
      <li class="nav-item">
          <a href="{{ route('cv-requests') }}" class="nav-link">
              <i class="nav-icon fas fa-cog"></i>
              <p>Settings</p>
          </a>
      </li>
      <!-- Users -->
      <li class="nav-item">
          <a href="{{ route('cv-requests') }}" class="nav-link">
              <i class="nav-icon fas fa-users"></i>
              <p>Users</p>
          </a>
      </li>
  </ul>
</nav>
<!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>