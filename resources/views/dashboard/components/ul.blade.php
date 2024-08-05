<li class="menu-item @if (str_contains(Route::currentRouteName(), $routeName)) open @endIf">
    <a href="javascript:void(0);" class="menu-link menu-toggle">
        <i class="menu-icon tf-icons {{ $icon }}"></i>
        <div data-i18n="Account Settings">{{ $label }}</div>
    </a>
    <ul class="menu-sub">
        @foreach ($lis as $li)
            <li class="menu-item">
                <a href="{{ $li['routeName'] }}" class="menu-link @if (Route::currentRouteName() === $li['routeName']) active @endif">
                    <div data-i18n="Account">{{ $li['lable'] }}</div>
                </a>
            </li>
        @endforeach
    </ul>
</li>
