@extends('layouts.main')

@section('content')
    <section class="mt-8 max-w-4xl mx-auto">

        <div class="mt-4 bg-white lg:rounded-md lg:shadow-md p-4 lg:outline">
            @foreach ($post->categories as $category)
                <span class="px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase">{{ $category->name }}</span>
            @endforeach
            <h2 class="mt-1 mb-4 text-2xl font-bold">{{ $post->title }}</h2>
            <div class="mb-2">
                @foreach ($post->authors as $author)
                <div class="flex flex-row gap-2 items-center">
                    <div>
                        <img class="h-16 rounded-full shadow-md" src="/storage/{{ $author->photo }}" />
                    </div>
                    <div>
                        <p class="text-sm uppercase font-semibold">By {{ $author->name }}</p>
                        <p class="mt-0.5 text-xs font-light">{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</p>
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
