@props(['avatar', 'name'])
<ul class="nav navbar-nav navbar-right">
    <li class="dropdown">
        <a href="javascript:void(0)" data-toggle="dropdown" class="dropdown-toggle clear">
            <span class="thumb-sm avatar pull-right m-t-n-sm m-b-n-sm m-l-sm">
                <img src="{{ $avatar }}" alt="...">
                <i class="on md b-white bottom"></i>
            </span>
            <span class="hidden-sm hidden-md">{{ $name }}</span> <b class="caret"></b>
        </a>
        <ul class="dropdown-menu animated fadeInRight w">
            {{ $slot }}
        </ul>
    </li>
</ul>
