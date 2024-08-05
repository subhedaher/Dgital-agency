<div class="nav-item dropdown">
    <a href="#" class="nav-link dropdown-toggle @if (str_contains(Route::currentRouteName(), 'page.')) active @endIf"
        data-bs-toggle="dropdown">{{ $lable }}</a>
    <div class="dropdown-menu m-0">
        @foreach ($pages as $page)
            <a href="{{ route($page['routeName']) }}"
                class="dropdown-item @if (Route::currentRouteName() === $page['routeName']) active @endIf">{{ $page['lable'] }}</a>
        @endforeach
    </div>
</div>
