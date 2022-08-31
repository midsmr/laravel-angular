@props(['href', 'class', 'isActive'])
<li class="{{ $isActive ? 'active' : '' }}">
    <a href="{{ $href }}">
        <i class="{{ $class }}"></i>
        <span class="font-bold">{{ $slot }}</span>
    </a>
</li>
