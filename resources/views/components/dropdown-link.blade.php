@props(['href'])
<li>
    <a href="{{ $href }}">
        <span>{{ $slot }}</span>
    </a>
</li>
