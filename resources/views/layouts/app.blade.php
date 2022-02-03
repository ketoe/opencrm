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
        </section>
    </header>

    <nav>
        <ul>
            <li><a href="/" class="icon home" click="true"></a></li>
            <li><a href="clients" class="icon clients" click="true"></a></li>
            <li><a href="orders" class="icon orders" click="true"></a></li>
            <li><a href="calender" class="icon calender" click="true"></a></li>
            <li><a href="messages" class="icon messages" click="true"></a></li>
            <li><a href="settings" class="icon settings" click="true"></a></li>
            <li><a href="notes" class="icon notes" click="true"></a></li>
            <li><a href="admin" class="icon admin" click="true"></a></li>
            <li><a href="logout" class="icon logout" click="true"></a></li>
        </ul>
    </nav>

    <main>
        <h3>@yield('title')</h3>
        <section>
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