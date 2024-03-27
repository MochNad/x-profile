<x-layouts.auth.app title="Lupa Password">
    <div class="col-lg-6 col-xl-8 col-xxl-9">
        <a href="./index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
            <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" width="180" alt="">
        </a>
        <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
            <img src="{{ asset('dist/images/backgrounds/login-security.svg') }}" alt="" class="img-fluid"
                width="500">
        </div>
    </div>
    <div class="col-lg-6 col-xl-4 col-xxl-3">
        <div class="card mb-0 shadow-none rounded-0 min-vh-100 h-100">
            <div class="d-flex align-items-center w-100 h-100">
                <div class="card-body">
                    <div class="mb-5">
                        <h2 class="fw-bolder fs-7 mb-3">Lupa kata sandi?</h2>
                        <p class="mb-0 ">
                            Tolong berikan alamat email Anda untuk mengatur ulang kata sandi.
                        </p>
                    </div>
                    <form>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email"
                                aria-describedby="emailHelp">
                        </div>
                        <a href="javascript:void(0)" class="btn btn-primary w-100 py-8 mb-3">Lupa Kata Sandi</a>
                        <a href="{{ route('login') }}" class="btn btn-light-primary text-primary w-100 py-8">Kembali Masuk</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layouts.auth.app>