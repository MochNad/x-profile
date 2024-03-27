<nav class="navbar navbar-expand-lg navbar-light justify-content-between">
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link sidebartoggler nav-icon-hover ms-n3" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-align-justified fs-7"></i>
            </a>
        </li>
    </ul>
    <div class="d-block d-lg-none">
        <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" class="dark-logo" width="180" alt="" />
    </div>
    <ul class="navbar-nav flex-row align-items-center justify-content-center">
        <li class="nav-item dropdown">
            <a class="nav-link pe-0" href="javascript:void(0)" id="drop1" data-bs-toggle="dropdown"
                aria-expanded="false">
                <div class="d-flex align-items-center">
                    <div class="user-profile-img">
                        <img src="{{ asset('dist/images/profile/user-1.jpg') }}" class="rounded-circle"
                            width="35" height="35" alt="" />
                    </div>
                </div>
            </a>
            <div class="dropdown-menu content-dd dropdown-menu-end dropdown-menu-animate-up"
                aria-labelledby="drop1">
                <div class="profile-dropdown position-relative" data-simplebar>
                    <div class="py-3 px-7 pb-0">
                        <h5 class="mb-0 fs-5 fw-semibold">Profil Pengguna</h5>
                    </div>
                    <div class="d-flex align-items-center py-9 mx-7 border-bottom">
                        <img src="{{ asset('dist/images/profile/user-1.jpg') }}" class="rounded-circle"
                            width="80" height="80" alt="" />
                        <div class="ms-3">
                            <h5 class="mb-1 fs-3">{{ Auth::user()->name }}</h5>
                            <span class="mb-1 d-block text-dark">Administrator</span>
                            <p class="mb-0 d-flex text-dark align-items-center gap-2">
                                <i class="ti ti-mail fs-4"></i> {{ Auth::user()->email }}
                            </p>
                        </div>
                    </div>
                    <div class="message-body">
                        <a href="./page-user-profile.html" class="py-8 px-7 mt-8 d-flex align-items-center">
                            <span
                                class="d-flex align-items-center justify-content-center bg-light rounded-1 p-6">
                                <img src="{{ asset('dist/images/svgs/icon-account.svg') }}" alt="" width="24"
                                    height="24">
                            </span>
                            <div class="w-75 d-inline-block v-middle ps-3">
                                <h6 class="mb-1 bg-hover-primary fw-semibold">Profil Saya</h6>
                                <span class="d-block text-dark">Pengaturan Akun</span>
                            </div>
                        </a>
                    </div>
                    <div class="d-grid py-4 px-7 pt-8">
                        <a href="{{ route('logout') }}" class="btn btn-outline-primary">Keluar</a>
                    </div>
                </div>
            </div>
        </li>
    </ul>
</nav>