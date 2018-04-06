<head>
    <link rel="stylesheet" href="{{asset('css/app.css')}}"></link>
</head>

<body>
    <div class="container">
    @include('inc.nav')
    <div>
    <div class="container">
    @include('inc.message')
    @yield('mycontents')
    </div>
    <script src="/vendor/unisharp/laravel-ckeditor/ckeditor.js"></script>
    <script>
        CKEDITOR.replace( 'article-ckeditor' );
    </script>
</body>
