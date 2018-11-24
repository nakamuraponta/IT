<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/foundation/6.5.0/css/foundation.css">

@include('inc.topbar')
<br>
<div class="row">
    @include('inc.messages')
</div>

<div class="row">
    @yield('content')
</div>

