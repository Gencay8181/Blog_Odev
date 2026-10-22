@extends('layout')

@section('icerik')
    <h1>Blog Yazıları</h1>

    @forelse($postlar as $post)
        <h3><a href="/yazi/{{ $post->id }}">{{ $post->baslik }}</a></h3>
        <small>{{ $post->created_at->format('d.m.Y') }}</small>
        <p>{{ \Illuminate\Support\Str::limit($post->icerik, 100) }}</p>
        <hr>
    @empty
        <p>Henüz yazı yok.</p>
    @endforelse
@endsection
