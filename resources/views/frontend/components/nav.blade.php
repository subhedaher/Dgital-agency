<a href="{{ route($routeName) }}"
    class="nav-item nav-link @if (Route::currentRouteName() === $routeName) active @endIf">{{ $label }}</a>
