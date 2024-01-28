<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <div class="app-brand-link">
            {{-- Logo CMC --}}
            <span class="app-brand-logo demo">
                <img src="https://emploi24.ma/wp-content/uploads/2023/05/Inscription-CMC-Cites-des-Metiers-et-des-Competences-2023-2024.webp"
                    style="width:150px; height:50px" alt="logo" class="demo">
            </span>
        </div>
        <span class="app-brand-text demo menu-text fw-bolder ms-2"></span>

        <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
            <i class="bx bx-chevron-left bx-sm align-middle"></i>
        </a>
    </div>
    <ul class="menu-inner py-1">
        <li class="menu-item{{ Request::is('/') ? ' active open' : '' }}">
            <a href="{{ url('/') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Pages</span>
        </li>

        <li class="menu-item{{ Request::is('Dashboard') ? ' active open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-dock-top"></i>
                <div data-i18n="Account Settings">Account Settings</div>
            </a>
            <ul class="menu-sub">
                <li class="menu-item{{ Request::is('/') ? ' active' : '' }}">
                    <a href="{{ url('/') }}" class="menu-link">
                        <div data-i18n="Dashboard">Les Poles</div>
                    </a>
                </li>
            </ul>
        </li>
    </ul>
</aside>
