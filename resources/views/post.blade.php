@php
use Illuminate\Support\Str;
@endphp

@extends('layouts.main')

@section('content')
<section class="mt-6 md:mt-8 max-w-80 md:max-w-4xl mx-auto">

    <div class="mt-4 bg-white rounded-md shadow-md p-4 outline">
        @foreach ($post->categories as $category)
        <span class="px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase">{{ $category->name }}</span>
        @endforeach
        <h2 class="mt-1 mb-4 text-2xl font-bold">{{ $post->title }}</h2>
        <div class="mb-2">
            @foreach ($post->authors as $author)
            <div class="flex flex-row gap-2 items-center">
                <div>
                    <img class="h-16 rounded-full shadow-md" src="{{ asset('storage/'.$author->photo) }}" />
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
<title>{{ $post->meta_title ?? $post->title }}</title>
<meta name="description" content="{{ $post->description ?? Str::limit($post->content, 150) }}" />
<meta property="og:type" content="article" />
<meta property="og:site_name" content="{{ env('APP_NAME') ?? 'Cloud Native Chapter of Mauritius' }}" />
<meta property="og:title" content="{{ $post->meta_title ?? $post->title }}" />
<meta property="og:description" content="{{ $post->meta_description ?? $post->description }}" />
<meta property="og:url" content="{{ route('post.show', $post) }}" />
<meta property="og:image" content="{{ $post->image ?? env('APP_URL') . '/images/cloud_native_mauritius_cover.png' }}" />
<meta property="article:published_time" content="{{ $post->created_at }}" />
<meta property="article:modified_time" content="{{ $post->updated_at }}" />
@endsection