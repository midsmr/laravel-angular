@props(['href', 'isActive'])
<li class="{{ $isActive ? 'active' : '' }}">
    <a href="{{ $href }}">
        <span>{{ $slot }}</span>
    </a>
</li>
