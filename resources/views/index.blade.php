<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Explaining</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/water.css@2/out/light.css">
</head>
<body>
    <header class="header" style="background-image: url('{{ asset('resources/views/assets/servers.jpg')}}')">
        <h1>EduardocTips</h1>
        <nav class="nav">
            <button onclick="location.href='https://eduardocdev.000webhostapp.com/'">About Me</button>
        </nav>
    </header>
    @foreach ($post as $post)
    <main class="main">
        <h2>{{($post->title)}}</h2>
        <p>{{($post->post)}}</p>
        <a href="https:{{($post->youtube)}}">Youtube</a> - <a href="http:{{($post->pinterest)}}">Pinterest</a>
    </main>
    @endforeach
    <footer class="Contact">
        <p>Copyright &copy; 2023 Eduardo Carmo</p>
    </footer>
</body>
</html>