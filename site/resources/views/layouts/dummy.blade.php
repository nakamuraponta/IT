<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Compilling Assets -->
        <link rel="stylesheet" href="{{asset('css/app.css')}}">


</head>
    <body>
        @include('inc.navbar')
        <div class="container mt-3">
            @include('inc.messages')
        @yield('content')
        </div>
        <script src="{{URL::asset('../vendor/unisharp/laravel-ckeditor/ckeditor.js')}}"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
        
    </body>
</html>