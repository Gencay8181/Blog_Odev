<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Blogum</title>
    <style>
        body{
            font-family: Arial, sans-serif;
            max-width: 700px;
            margin: 30px auto;
            padding: 0 15px;
        }
        nav{
            border-bottom: 1px solid #ccc;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        nav a{
            margin-right: 15px;
        }
        input, textarea{
            width: 100%;
            margin-bottom: 10px;
            padding: 6px;
            box-sizing: border-box;
        }
        .hata{
            color: red;
        }
    </style>
</head>
<body>
<nav>
    <a href="/">Ana Sayfa</a>
    @if(session('giris_yapti'))
        <a href="/yeni">Yeni Yazı</a>
        <a href="/cikis">Çıkış</a>
    @else
        <a href="/login">Giriş</a>
    @endif
</nav>

@yield('icerik')
</body>
</html>
