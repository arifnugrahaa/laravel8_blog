@extends('layout.main')
@section('title', 'BLOG')


@section('container')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h2 class="mb-3">{{ $pos->title }}</h2>
            <p>By. <a href="/blog?author={{ $pos->user->username }}"
                    class="text-decoration-none">{{ $pos->user->name }}</a>
                in <a href="/blog?category={{ $pos->category->slug }}">{{ $pos->category->name }}</a></p>
            @if ($pos->image)
            <div style="max-height: 350px; overflow:hidden">
                <img src="{{ asset('storage/' . $pos->image) }}" alt="{{ $pos->category->name }}"
                    class="img-fluid">
            </div>
            @else
            <img src="https://source.unsplash.com/1200x400?{{ $pos->category->name }}" alt="{{ $pos->category->name }}"
                class="img-fluid">
            @endif

            <article class="my-3 fs-5">
                {!! $pos->body !!}
            </article>
            <a href="/blog">Back</a>
        </div>
    </div>
</div>


@endsection
