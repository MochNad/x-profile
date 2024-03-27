<x-layouts.pages.app title="{{ $title }}">
    <div class="card bg-light-info shadow-none position-relative overflow-hidden">
        <div class="card-body px-4 py-3">
            <div class="row align-items-center">
                <div class="col-9">
                    <h4 class="fw-semibold mb-8">{{ $title }}</h4>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            @foreach ($breadcrumbs as $url => $name)
                            @if ($loop->last)
                            <li class="breadcrumb-item active" aria-current="page">{{ $name }}</li>
                            @else
                            <li class="breadcrumb-item"><a class="text-muted" href="{{ $url }}">{{ $name }}</a></li>
                            @endif
                            @endforeach
                        </ol>
                    </nav>
                </div>
                <div class="col-3">
                    <div class="text-center mb-n5">
                        <img src="{{ asset('dist/images/breadcrumb/ChatBc.png') }}" alt="" class="img-fluid mb-n4">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card">
        <ul class="nav nav-pills user-profile-tab" id="pills-tab" role="tablist">
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link position-relative rounded-0 active d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                    id="pills-all-tab" data-bs-toggle="pill" data-bs-target="#pills-all" type="button" role="tab"
                    aria-controls="pills-all" aria-selected="true">
                    <i class="ti ti-moneybag me-2 fs-6"></i>
                    <span class="d-none d-md-block">Semua</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                    id="pills-cash-tab" data-bs-toggle="pill" data-bs-target="#pills-cash" type="button" role="tab"
                    aria-controls="pills-cash" aria-selected="false">
                    <i class="ti ti-cash me-2 fs-6"></i>
                    <span class="d-none d-md-block">Tunai</span>
                </button>
            </li>
            <li class="nav-item" role="presentation">
                <button
                    class="nav-link position-relative rounded-0 d-flex align-items-center justify-content-center bg-transparent fs-3 py-4"
                    id="pills-credit-tab" data-bs-toggle="pill" data-bs-target="#pills-credit" type="button" role="tab"
                    aria-controls="pills-credit" aria-selected="false">
                    <i class="ti ti-credit me-2 fs-6"></i>
                    <span class="d-none d-md-block">Kredit</span>
                </button>
            </li>
        </ul>
        <div class="card-body">
            <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-all" role="tabpanel" aria-labelledby="pills-all-tab"
                    tabindex="0">
                    <div class="card">
                        <div class="card-body">
                            <h5>Spline Area Chart</h5>
                            <div id="chart-area-spline"></div>
                        </div>
                    </div>
                </div>
                <div class="tab-pane fade" id="pills-cash" role="tabpanel" aria-labelledby="pills-cash-tab"
                    tabindex="0">
                    <h1>Ini adalah tab tunai</h1>
                </div>
                <div class="tab-pane fade" id="pills-credit" role="tabpanel" aria-labelledby="pills-credit-tab"
                    tabindex="0">
                    <h1>Ini adalah tab kredit</h1>
                </div>
            </div>
        </div>
    </div>
    @push('scripts')
    <script src="{{ asset('dist/libs/apexcharts/dist/apexcharts.min.js') }}"></script>
    <script src="{{ asset('dist/js/apex-chart/apex.area.init.js') }}"></script>
    @endpush
</x-layouts.pages.app>