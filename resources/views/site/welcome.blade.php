@extends('layouts.site')

@section('title', 'Início')

@section('content')
    @foreach($posts as $post)
        <div class="card bg-base-100 w-96 shadow-md border">
            <figure><img src="{{ $post->image }}" alt="{{ $post->title }}"></figure>
            <div class="card-body">
                <h2 class="card-title">{{ $post->title }}</h2>
                <p>{{ Str::limit($post->content, 100) }}</p>
                <div class="card-actions justify-end">
                    <a href="{{ route('posts.show', $post->slug) }}" class="btn btn-primary">Ler mais</a>
                </div>
            </div>
        </div>
    @endforeach
@endsection
