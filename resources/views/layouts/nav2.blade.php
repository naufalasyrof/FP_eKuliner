@php
    $currentRouteName = Route::currentRouteName();
@endphp
<nav class="navbar navbar-expand-md navbar-light shadow sticky-top blurry">
    <div class="container">
        <a href="{{ route('beranda') }}" class="navbar-brand mb-0 h1 pr-5"><i
                class="bi bi-hexagon-half me-2"></i><b>eKuliner</b></a>
        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <hr class="d-md-none text-white-50">
            <ul class="navbar-nav flex-row flex-wrap">
                <li class="nav-item col-2 col-md-auto nav-link">|</li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('beranda') }}"
                        class="nav-link @if ($currentRouteName == 'beranda') active fw-bold @endif">Beranda</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('tentangkami') }}"
                        class="nav-link @if ($currentRouteName == 'tentangkami') active fw-bold @endif">Tentang Kami</a></li>
                <li class="nav-item col-2 col-md-auto"><a href="{{ route('katalog') }}"
                        class="nav-link @if ($currentRouteName == 'katalog') active fw-bold @endif">Katalog</a></li>
            </ul>
            <hr class="d-md-none text-white-50">
            <div class="dropdown my-2 ms-md-auto">
                <a class="btn btn-warning mx-2" href="{{ route('pesanan') }}"><i class="bi bi-cart3"></i></a>
                <a class="btn btn-outline-dark dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                    aria-expanded="false"><i class="bi bi-person-circle me-1"></i>Nama Akun</a>
                <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="{{ route('profile') }}"><i class="bi-person-circle me-2"></i>My Profile</a></li>
                    <a class="dropdown-item text-danger" href=""
                        onclick="event.preventDefault();
                                           document.getElementById('logout-form').submit();"><i class="bi bi-box-arrow-in-left me-2"></i>
                        {{ __('Logout') }}
                    </a>

                    <form id="logout-form" action="" method="POST" class="d-none">
                        @csrf
                    </form>
                </ul>
            </div>
        </div>
    </div>
</nav>
