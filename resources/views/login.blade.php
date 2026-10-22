@extends('layout')

@section('icerik')
    <h1>Giriş</h1>

    @if(session('hata'))
        <p class="hata">{{ session('hata') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="text" name="kullanici" placeholder="Kullanıcı adı">
        <input type="password" name="sifre" placeholder="Şifre">
        <button type="submit">Giriş Yap</button>
    </form>
@endsection
