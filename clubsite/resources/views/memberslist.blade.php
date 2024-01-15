<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Book Lover Club!</title>
    <style>
        body {
            
        }
        nav ul {
            display: flex;
            list-style: none;
        }
        nav ul li {
            margin-left: 10px;
        }

    </style>
</head>
<body>
    <header>
        <div class="home_title">
            Welcome to Book Lover Club!
        </div>
        <nav>
            <ul>
                <li><a href="#">About this club</a></li>
                <li><a href="#">Join our club</a></li>
                <li><a href="#">Membership board</a></li>
                <li><a href="#">Stack your books up</a></li>
                <li><a href="#">Contact us</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('body')
    </main>
</body>
</html>