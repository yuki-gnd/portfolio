<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Welcome to Book Lover Club!</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>

    <style>
        body {}

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
        <div class="site_title">Welcome to Book Lover Club!</div>
        <nav>
            <ul>
                <li><a href="/home">Home</a></li>
                <li><a href="/about">About this club</a></li>
                <li><a href="/member/addmember">Join our club</a></li>
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
