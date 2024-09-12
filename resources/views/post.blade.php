@php
use Illuminate\Support\Str;
use Spatie\CommonMarkShikiHighlighter\HighlightCodeExtension;
@endphp

@extends('layouts.main')

@section('content')
<section class="mt-6 md:mt-8 max-w-80 md:max-w-4xl mx-auto">
<div class="mt-4 bg-white rounded-md shadow-md p-4 outline">
    <div class="mb-2 ml-2">
        @foreach ($post->categories as $category)
            <span class="px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase">{{ $category->name }}</span>
        @endforeach
    </div>
    <h2 class="mt-1 mb-1 ml-2 text-2xl font-bold">{{ $post->title }}</h2>
    <p class="mt-1 mb-6 ml-2 text-xs font-light">{{ \Carbon\Carbon::parse($post->created_at)->format('d M Y') }}</p>
    <div class="mb-2">
        @foreach ($post->authors as $author)
        <div class="flex gap-2 items-center">
            <img class="size-16 rounded-full shadow-md" src="{{ asset('storage/'.$author->photo) }}" />
            <div class="flex flex-col gap-2">
                <p class="text-sm uppercase font-semibold">By {{ $author->name }}</p>
                @if($author->bio)
                    <p class="text-xs font-normal text-wrap">{{ $author->bio }}</p>
                @endif

                @if($author->socialMedias->count())
                    <x-socials class="mt-2" :socials="$author->socialMedias" />
                @endif
            </div>
        </div>
        @endforeach
    </div>
    <div class="prose max-w-full">
        <div>{!! Str::markdown($post->content, [], [new HighlightCodeExtension(theme: 'github-dark')]) !!}</div>
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