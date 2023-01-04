<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <ul class="nav">
    <li class="nav-item">
      <a class="nav-link" href="/admin/dashboard">
        <i class="mdi mdi-home menu-icon"></i>
        <span class="menu-title">Dashboard</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/orders') }}">
        <i class="mdi mdi-sale menu-icon"></i>
        <span class="menu-title">Orders</span>
      </a>
    </li>
    
    <li class="nav-item">
      <a class="nav-link" href="/admin/category">
        <i class="mdi mdi-circle-outline menu-icon"></i>
        <span class="menu-title">Category</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/admin/products">
          <i class="mdi mdi-grid-large menu-icon"></i>
        <span class="menu-title">Product</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="/admin/colors">
        <i class="mdi mdi-view-headline menu-icon"></i>
        <span class="menu-title">Colors</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/users')}}">
        <i class="mdi mdi-account menu-icon"></i>
        <span class="menu-title">Users</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/sliders')}}">
        <i class="mdi mdi-view-carousel menu-icon"></i>
        <span class="menu-title">Home Slider</span>
      </a>
    </li>

    <li class="nav-item">
      <a class="nav-link" href="{{ url('admin/settings')}}">
        <i class="mdi mdi-settings menu-icon"></i>
        <span class="menu-title">Site Setting</span>
      </a>
    </li>
  </ul>
</nav>
