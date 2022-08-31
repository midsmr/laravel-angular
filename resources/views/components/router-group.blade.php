@props(['class', 'name', 'isActive'])
<li class="{{ $isActive ? 'active' : '' }}">
    <a href class="auto">
        <span class="pull-right text-muted">
            <i class="fa fa-fw fa-angle-right text"></i>
            <i class="fa fa-fw fa-angle-down text-active"></i>
        </span>
        <i class="{{ $class }}"></i>
        <span class="font-bold">{{ $name}}</span>
    </a>
    <ul class="nav nav-sub dk" style="">
        <li class="nav-sub-header">
            <a href="javascript:void(0);">
                <span>{{ $name }}</span>
            </a>
        </li>
        {{ $slot }}
    </ul>
</li>
