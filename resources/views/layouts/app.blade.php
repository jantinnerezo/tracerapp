<html>

    <head>
        <title> {{config('app.name', 'LCTRACER')}} </title>
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.css')}}">
        <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    </head>

    <body>
        @include('includes.header')
        <div class="container">
            @include('includes.messages')
            @yield('content')
         <div>
        @include('includes.footer')
    </body>
 
</html>