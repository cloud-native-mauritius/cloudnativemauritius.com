@extends('layouts.main')

@section('content')
<section class="mt-6 md:mt-8 max-w-80 md:max-w-4xl mx-auto">

    <h2 class="ml-6 text-md text-slate-700 font-bold uppercase">Blog</h2>

    <div class="grid md:grid-cols-2 gap-6">
        @foreach ($posts as $post)
        <div class="mt-4 p-6 bg-white flex justify-between rounded-md shadow-md outline md:hover:scale-105 transition ease-in-out duration-300 relative">
            <a href="{{ route('post.show', $post) }}" class="absolute inset-0"></a>
            <div>
                @foreach ($post->categories as $category)
                <span class="px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase">{{ $category->name }}</span>
                @endforeach
                <div class="mt-1 text-black text-2xl font-bold">{{ $post->title }}</div>
                <div class="mt-3 text-black">
                    {{ $post->meta_description }}
                </div>

                @foreach ($post->authors as $author)
                <div class="mt-4 flex flex-row gap-2 items-center">
                    <div>
                        <img class="h-10 rounded-full shadow-md" src="{{ asset('storage/'.$author->photo) }}" />
                    </div>
                    <div>
                        <p class="text-xs uppercase font-semibold">By {{ $author->name }}</p>
                        <p class="mt-0.5 text-xs font-light">{{ $post->published_at->format('d M Y') }}</p>
                    </div>
                </div>
                @endforeach

                <!-- <div class="mt-4">
                        <a href="#" class="relative px-3 py-1 rounded-full bg-gray-100 text-[11px] font-bold uppercase hover:bg-[#D62293] transition ease-in-out duration-300">
                            Find us on Google Maps
                        </a>
                    </div> -->

            </div>
        </div>
        @endforeach
    </div>
</section>
<div class="mt-8 max-w-4xl mx-auto">
    {{ $posts->links() }}
</div>
@endsection

@section('head')
<title>Blog | Cloud Native Chapter of Mauritius</title>
@endsection