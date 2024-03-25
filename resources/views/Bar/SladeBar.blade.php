<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        {{-- Logo CMC --}}
        <div class="app-brand-link">
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

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Dashboard</span>
        </li>
        <li class="menu-item{{ Request::is('/') ? ' active' : '' }}">
            <a href={{ url('/') }} class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li class="menu-header small text-uppercase">
            <span class="menu-header-text"></span>
        </li>
        <li class="menu-item{{ Request::is('stagiaire*', 'beneficiaire*') ? ' active' : '' }}">
            <a href="{{ url('/stagiaire') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-table"></i>
                <div data-i18n="Analytics">Stagiaire</div>
            </a>
        </li>


        <li class="menu-header small text-uppercase">
            <span class="menu-header-text">Settings</span>
        </li>
        <li class="menu-item{{ Request::is('profile*') ? ' active' : '' }}">
            <a href={{ url('/profile/edit') }} class="menu-link">
                <i class="bx bx-cog me-2"></i>
                <span class="align-middle">Settings</span>
            </a>
        </li>
    </ul>
</aside>
