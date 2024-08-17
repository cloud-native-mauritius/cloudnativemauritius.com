@extends('layouts.main')

@section('content')
    <section class="mt-8 max-w-4xl mx-auto">

        <h2 class="ml-6 text-md text-slate-700 font-bold uppercase">{{ $post->title }}</h2>

        <div class="mt-4 bg-white lg:rounded-md lg:shadow-md p-4 lg:outline">
            <div class="mb-2">
                @foreach ($post->authors as $author)
                <div class="flex flex-row gap-2 items-center">
                    <div>
                        <img class="h-10 rounded-full shadow-md" src="/storage/{{ $author->photo }}" />
                    </div>
                    <div>
                        <p class="text-xs uppercase font-semibold">By {{ $author->name }}</p>
                        <p class="mt-0.5 text-xs font-light">{{ \Carbon\Carbon::parse($post->published_at)->format('d M Y') }}</p>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="prose max-w-full">
                <div>{{ \Illuminate\Mail\Markdown::parse($post->content) }}</div>
            </div>
        </div>

    </section>
@endsection

@section('head')
    <title>{{ $post->meta_title }}</title>
@endsection
