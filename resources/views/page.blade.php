@extends('layouts.main')

@section('content')
    <section class="mt-8 max-w-4xl mx-auto">

        <h2 class="ml-6 text-md text-slate-700 font-bold uppercase">{{ $page->title }}</h2>

        <div class="mt-4 bg-white lg:rounded-md lg:shadow-md p-4 lg:outline">
            <div class="prose max-w-full">
                <div>{{ \Illuminate\Mail\Markdown::parse($page->content) }}</div>
            </div>
        </div>

    </section>
@endsection

@section('head')
    <title>{{ $page->title }}</title>
@endsection
