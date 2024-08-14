@extends('layouts.main')

@section('content')
    <section class="mt-8 max-w-4xl mx-auto">

        <h2 class="ml-6 text-md text-slate-700 font-bold uppercase">Upcoming Event</h2>

        @foreach ($events as $event)

        @php
            $eventDate = \Carbon\Carbon::parse($event->start_date);
        @endphp

        @if ($eventDate->isFuture())
        <div class="mt-4 p-6 bg-[#0086FF] flex justify-between rounded-md shadow-md outline hover:scale-105 transition ease-in-out duration-300 relative">
            <a href="{{ $event->cncf_url }}" target="_blank" class="absolute inset-0"></a>
            <div>
                <span class="px-3 py-1 rounded-full bg-gray-100 text-[11px] font-bold uppercase">{{ $event->type }}</span>
                <div class="mt-1 text-white text-2xl font-bold">{{ $event->title }}</div>
                <div class="mt-3">
                    <span class="px-3 py-1 rounded-full bg-gray-100 text-[11px] font-bold uppercase">Location</span>
                    <h3 class="mt-1 text-white text-lg font-bold">{{ $event->location }}</h3>
                </div>
                @if ($event->google_map_url)
                <div class="mt-4">
                    <a href="{{ $event->google_map_url }}" class="relative px-3 py-1 rounded-full bg-gray-100 text-[11px] font-bold uppercase hover:bg-[#D62293] transition ease-in-out duration-300">
                        Find us on Google Maps
                    </a>
                </div>
                @endif
            </div>

            <div class="bg-[#D62293] rounded-md p-4 outline h-[130px]">
                <div class="text-[16px] text-center font-bold uppercase text-white">
                    {{ \Carbon\Carbon::parse($event->start_date)->format('F') }}
                </div>
                <div class="grid place-items-center">
                    <div class="text-7xl text-white">
                        {{ \Carbon\Carbon::parse($event->start_date)->format('d') }}
                    </div>
                </div>
            </div>
        </div>
        @endif

        @endforeach

        <h2 class="mt-16 ml-6 text-md text-slate-700 font-bold uppercase">Past Events</h2>

        @foreach ($events as $event)

        @php
            $eventDate = \Carbon\Carbon::parse($event->start_date);
        @endphp

        @if ($eventDate->isPast())
        <div class="mt-4 p-6 bg-gray-200 flex justify-between rounded-md shadow-md outline hover:scale-105 transition ease-in-out duration-300 relative">
            <a href="{{ $event->cncf_url }}" target="_blank" class="absolute inset-0"></a>
            <div>
                <span class="px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase">{{ $event->type }}</span>
                <div class="mt-1 text-gray-800 text-2xl font-bold">{{ $event->title }}</div>
                <div class="mt-3">
                    <span class="px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase">Location</span>
                    <h3 class="mt-1 text-gray-800 text-lg font-bold">{{ $event->location }}</h3>
                </div>
                @if ($event->google_map_url)
                <div class="mt-4">
                    <a href="{{ $event->google_map_url }}" class="relative px-3 py-1 rounded-full bg-gray-800 text-white text-[11px] font-bold uppercase hover:bg-[#D62293] transition ease-in-out duration-300">
                        Find us on Google Maps
                    </a>
                </div>
                @endif
            </div>

            <div class="bg-[#0086FF] rounded-md p-4 outline h-[130px]">
                <div class="text-[16px] text-center font-bold uppercase text-white">
                    {{ \Carbon\Carbon::parse($event->start_date)->format('F') }}
                </div>
                <div class="grid place-items-center">
                    <div class="text-7xl text-white">
                        {{ \Carbon\Carbon::parse($event->start_date)->format('d') }}
                    </div>
                </div>
            </div>
        </div>
        @endif
        @endforeach
    </section>
@endsection

@section('head')
    <title>Cloud Native Mauritius</title>
@endsection
