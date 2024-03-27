<x-layouts.auth.app title="Masuk">
    <div class="col-xl-7 col-xxl-8">
        <a href="./index.html" class="text-nowrap logo-img d-block px-4 py-9 w-100">
            <img src="{{ asset('dist/images/logos/dark-logo.svg') }}" width="180" alt="">
        </a>
        <div class="d-none d-xl-flex align-items-center justify-content-center" style="height: calc(100vh - 80px);">
            <img src="{{ asset('dist/images/backgrounds/login-security.svg') }}" alt="" class="img-fluid"
                width="500">
        </div>
    </div>
    <div class="col-xl-5 col-xxl-4">
        <div class="authentication-login min-vh-100 bg-body row justify-content-center align-items-center p-4">
            <div class="col-sm-8 col-md-6 col-xl-9">
                <h2 class="mb-3 fs-7 fw-bolder text-center">X-Profile 🚀</h2>
                <p class=" mb-9 text-center">Masuk ke Dashboard</p>
                <div class="position-relative text-center my-4">
                    <span class="border-top w-100 position-absolute top-50 start-50 translate-middle"></span>
                </div>
                <form>
                    @csrf
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input id="email" type="email" class="form-control" name="email"
                            aria-describedby="emailHelp">
                        <div class="invalid-feedback">
                            @error('email')
                            {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="mb-4">
                        <label for="password" class="form-label">Kata sandi</label>
                        <input id="password" type="password" class="form-control" name="password">
                    </div>
                    <button type="submit" class="btn btn-primary w-100 py-2 mb-4 rounded-2">Masuk</button>
                </form>
            </div>
        </div>
    </div>

    @push('scripts')
    <script src="{{ asset('dist/js/components/sweet-alert.js') }}"></script>
    <script>
        $(document).ready(function () {
            $('form').submit(function (event) {
                event.preventDefault();

                var formData = new FormData(this);

                fetch('/login', {
                    method: 'POST',
                    body: formData
                })
                .then(response => response.json())
                .then(data => {
                    if (data.success) {
                        window.location.href = data.redirect;
                    } else {
                        sweetAlert('Gagal!', data.message, 'error', true, false);
                    }
                })
                .catch(error => {
                    sweetAlert('Gagal!', 'Terjadi kesalahan saat mengirim data', 'error', true, false);
                });
            });
        });
    //     document.addEventListener('DOMContentLoaded', function () {
    //     var loginForm = document.querySelector('form');

    //     if (loginForm) {
    //         loginForm.addEventListener('submit', function (event) {
    //             event.preventDefault();

    //             var formData = new FormData(loginForm);

    //             fetch('/login', {
    //                 method: 'POST',
    //                 body: formData
    //             })
    //             .then(response => response.json())
    //             .then(data => {
    //                 if (data.success) {
    //                     window.location.href = data.redirect;
    //                 } else {
    //                     sweetAlert('Gagal!', data.message, 'error', true, false);
    //                 }
    //             })
    //             .catch(error => {
    //                 sweetAlert('Gagal!', 'Terjadi kesalahan saat mengirim data', 'error', true, false);
    //             });
    //         });
    //     }
    // });
    </script>
    @endpush
</x-layouts.auth.app>