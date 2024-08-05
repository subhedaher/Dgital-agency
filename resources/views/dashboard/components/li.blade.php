<li class="menu-item @if (Route::currentRouteName() === $routeName) active @endif">
    <a href="{{ route($routeName) }}" class="menu-link">
        <i class="menu-icon tf-icons {{ $icon }}"></i>
        <div data-i18n="Analytics">{{ $lable }}</div>
    </a>
</li>
