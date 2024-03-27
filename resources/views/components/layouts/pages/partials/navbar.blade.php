<ul id="sidebarnav">
    @foreach ($menus as $menu)
    <li class="nav-small-cap">
        <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
        <span class="hide-menu">{{ $menu['menu-title'] }}</span>
    </li>
    @foreach ($menu['menu-items'] as $item)
    <li class="sidebar-item">
        <a class="sidebar-link {{ isset($item['menu-items']) ? 'has-arrow' : '' }}" href="{{ $item['url'] }}"
            aria-expanded="false">
            <span>
                <i class="{{ $item['icon'] }}"></i>
            </span>
            <span class="hide-menu">{{ $item['title'] }}</span>
        </a>
        @if (isset($item['menu-items']))
        <ul aria-expanded="false" class="collapse first-level">
            <li class="sidebar-item">
                <a href="{{ $item['menu-items']['url'] }}" class="sidebar-link">
                    <div class="round-16 d-flex align-items-center justify-content-center">
                        <i class="{{ $item['menu-items']['icon'] }}"></i>
                    </div>
                    <span class="hide-menu">{{ $item['menu-items']['title'] }}</span>
                </a>
            </li>
        </ul>
        @endif
    </li>
    @endforeach
    @endforeach
</ul>