@extends('layout')

@section('icerik')
    <h1>Yeni Yazı</h1>

    @if($errors->any())
        <p class="hata">Başlık ve içerik boş bırakılamaz.</p>
    @endif

    <form method="POST" action="/yeni">
        @csrf
        <input type="text" name="baslik" placeholder="Başlık">
        <textarea name="icerik" rows="8" placeholder="İçerik"></textarea>
        <button type="submit">Kaydet</button>
    </form>
@endsection
