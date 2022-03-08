<!DOCTYPE html>
<html lang="en">
@include('layouts.front.head')
    <body>
    @include('layouts.front.header')
    <!-- BEGIN BASE-->
    <div id="base">
        <div id="content">
            @if(session('success'))
                <div class="alert alert-success alert-dismissable">
                    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                    {{ session('success') }}
                </div>
            @endif
            @yield('content')
        </div>
    </div><!--end #base-->
    <!-- END BASE -->
    @include('layouts.front.footer')
    </body>
</html>

