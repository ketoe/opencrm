<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Open Crm</title>
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link href='http://fonts.googleapis.com/css?family=Alata&subset=latin,latin-ext' rel='stylesheet' type='text/css'>
</head>
<body>
    <header>
        <section>
            <div class="logo"></div>
            @if (Auth::check())
                <div class="user">Zalogowany: {{ Auth::user()->name. ' '.Auth::user()->surname}}</div>
            @endif
        </section>
    </header>

    <nav>  
        @if (Auth::check())
        <ul>
            <li><a href="/" class="icon home" click="true"></a></li>
            <li><a href="/clients" class="icon clients" click="true"></a></li>
            @if (Auth::user()->admin == 1)
                <li><a href="/admins" class="icon admin" click="true"></a></li>
            @endif
            <li><a href="user/logout" class="icon logout" click="true"></a></li>
        </ul>
        @endif
    </nav>

    <main>
        <h3>@yield('title')</h3>
        <section>
            @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">{{ Session::get('error') }}</div>
            @endif
            @if(Session::has('success'))
                <div class="alert alert-success" role="alert">{{ Session::get('success') }}</div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            @yield('main')
        </section>
    </main>

    <footer>
        <section>
            &copy; Open Crm 2022 | www.webkey.pl | Wszelkie prawa zastrzeżone
        </section>
    </footer>
</body>
</html>