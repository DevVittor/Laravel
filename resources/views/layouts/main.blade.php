<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
    <link rel="stylesheet" href="/css/home.css">
    <link rel="stylesheet" href="/css/show.css">
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="/css/header.css">
    <link rel="stylesheet" href="/css/footer.css">
    <link rel="stylesheet" href="/css/tailwind.css">
    <link rel="shortcut icon" href="/Faveicon.png" type="image/x-icon">
    <title>@yield('title')</title>
</head>

<body>
    @include('header')
    <main>
        <div class="container-msg">
            @if(session('msg'))
            <p class="msg">{{session('msg')}}</p>
            @endif
        </div>
        @yield('content')
    </main>
    @include('cookie')
    @include('footer')

</body>

</html>