<x-admin.includes.head.index title="{{ isset($title) ? $title . ' | ' . 'Abaya' : 'Abaya' }}" />
<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class='sidebar-brand' href="{{ route('orders') }}">
            <span class="sidebar-brand-text align-middle">Abaya</span>
        </a>

        <ul class="sidebar-nav">
            <li class="sidebar-item{{ request()->routeIs('orders')?' active':null }}">
                <a href="{{ route('orders') }}" class="sidebar-link">
                    <i class="align-middle" data-feather="database"></i> <span class="align-middle">Orders</span>
                </a>
            </li>
            <li class="sidebar-item{{ request()->routeIs('auth.info')?' active':null }}">
                <a href="{{ route('auth.info') }}" class="sidebar-link">
                    <i class="align-middle" data-feather="key"></i> <span class="align-middle">Auth</span>
                </a>
            </li>
            <li class="sidebar-item">
                <a href="{{ route('logout') }}" class="sidebar-link">
                    <i class="align-middle" data-feather="log-out"></i> <span class="align-middle">Logout</span>
                </a>
            </li>
        </ul>
    </div>
</nav>

<div class="main">
    <nav class="navbar navbar-expand navbar-light navbar-bg">
        <span class="sidebar-toggle js-sidebar-toggle">
            <i class="hamburger align-self-center"></i>
        </span>
    </nav>

    <main class="content">
        <div class="container-fluid p-0">

            @if (isset($title))
                <h1 class="h3 mb-3">{{ $title }}</h1>
            @endif

            {{ $slot }}

        </div>
    </main>
</div>
</div>
<x-admin.includes.footer.index />
