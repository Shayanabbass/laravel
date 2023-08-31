<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sample HTML Page</title>
    <style>
        /* Reset some default styles */
        body, h1, h2, p {
            margin: 0;
            padding: 0;
        }

        /* Header styles */
        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
        }

        /* Main section styles */
        main {
            max-width: 800px;
            margin: 0 auto;
            padding: 2rem;
        }

        /* Footer styles */
        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1rem;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
    @stack('css')
</head>
<body>
    <header>
        @section('parent')
        <h1>Sample HTML Page</h1>
        <a href="/about">About</a>
        <a href="/post">Post</a>
        @show
    </header>
    @yield('main');

  

    <footer>
        <p>&copy; 2023 Your Name. All rights reserved.</p>
    </footer>
</body>
@stack('scripts')
</html>
