<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>
<body>
    <header class="header" style="background-image: url('{{ asset('resources/views/assets/servers.jpg')}}')">
        <h1>My Blog</h1>
        <nav class="nav">
            <button onclick="location.href='/'">Home</button>
            <button onclick="location.href='#About'">About</button>
            <button onclick="location.href='#Contact'">Contact  </button>
        </nav>
    </header>

    <main class="main">
        <h2>Welcome to my blog!</h2>
        <p>Be Happy! this is a part of my blog, today i will show you how to use this blog</p>
    </main>

    <footer class="footer">
        <p>Copyright &copy; 2023 Eduardo Carmo</p>
    </footer>
</body>
</html>
