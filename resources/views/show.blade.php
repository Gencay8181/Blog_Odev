@extends('layout')

@section('icerik')
    <h1>{{ $post->baslik }}</h1>
    <small>{{ $post->created_at->format('d.m.Y') }}</small>
    <p>{{ $post->icerik }}</p>

    @if(session('giris_yapti'))
        <form method="POST" action="/yazi/{{ $post->id }}">
            @csrf
            @method('DELETE')
            <button type="submit">Sil</button>
        </form>
    @endif
@endsection
