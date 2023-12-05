<link href="{{ asset('css/material-dashboard.css?v=2.1.1') }}" rel="stylesheet" />
<div class="sidebar" data-color="orange" data-background-color="white" data-image="{{ asset('material') }}/img/sidebar-1.jpg">
  <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
  <div class="logo">
    <a href="http://127.0.0.1:8000/" class="simple-text logo-normal">
      {{ __('EMBATE') }}
    </a>
  </div>
  <div class="sidebar-wrapper">
    <ul class="nav">
      <li class="nav-item{{ $activePage == 'dashboard' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('dashboard') }}">
          <i class="material-icons">dashboard</i>
            <p>{{ __('Dashboard') }}</p>
        </a>
      </li>
      @can('user_index')
      <li class="nav-item{{ $activePage == 'users' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('users.index') }}">
          <i class="material-icons">content_paste</i>
            <p>Usuarios</p>
        </a>
      </li>
      @endcan

      @can('permission_index')
      <li class="nav-item{{ $activePage == 'permissions' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('permissions.index') }}">
          <i class="material-icons">bubble_chart</i>
          <p>{{ __('Permisos') }}</p>
        </a>
      </li>
      @endcan
      @can('role_index')
      <li class="nav-item{{ $activePage == 'roles' ? ' active' : '' }}">
        <a class="nav-link" href="{{ route('roles.index') }}">
          <i class="material-icons">location_ons</i>
            <p>{{ __('Roles') }}</p>
        </a>
      </li>
      @endcan

      <li class="nav-item {{ $activePage == 'pagina' ? ' active' : '' }}">
        <a class="nav-link"  href="carousel" aria-expanded="false">
          <i><img style="width:25px" src="{{ asset('img/laravel.svg') }}"></i>
          <p>{{ __('Pagina') }}
            <b class="caret"></b>
          </p>
        </a>
        <div class="collapse show" id="laravelExample">
          <ul class="nav">

            <li class="nav-item{{ $activePage == 'carousel' ? ' active' : '' }}">
              <a class="nav-link" href="/carousel">
                <span class="sidebar-mini"> I </span>
                <span class="sidebar-normal">{{ __('Inicio') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'about_us' ? ' active' : '' }}">
              <a class="nav-link" href="/about_us">
                <span class="sidebar-mini"> N </span>
                <span class="sidebar-normal"> {{ __('Nosotros') }} </span>
              </a>
            </li>
            <li class="nav-item{{ $activePage == 'opinions_carousel' ? ' active' : '' }}">
                <a class="nav-link" href="/opinions_carousel">
                  <span class="sidebar-mini"> P </span>
                  <span class="sidebar-normal"> {{ __('Procesos') }} </span>
                </a>
              </li>
          </ul>
        </div>
      </li>

    </ul>
  </div>
</div>
