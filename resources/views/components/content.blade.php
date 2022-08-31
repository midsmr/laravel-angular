@props(['title', 'description'])
<div id="content" class="app-content" role="main">
    <div class="app-content-body ">
        <div class="hbox hbox-auto-xs hbox-auto-sm">
            <div class="col">
                <div class="bg-light lter b-b wrapper-md">
                    <div class="row">
                        <div class="col-sm-6 col-xs-12">
                            <h1 class="m-n font-thin h3 text-black">{{ $title }}</h1>
                            <small class="text-muted">{{ $description }}</small>
                        </div>
                    </div>
                </div>
                <div class="wrapper-md" >
                    {{ $slot }}
                </div>
            </div>
        </div>
    </div>
</div>
