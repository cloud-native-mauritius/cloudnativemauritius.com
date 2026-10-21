@extends('layouts.main')

@section('content')
<section class="mt-6 md:mt-8 md:max-w-4xl mx-auto px-4 md:px-8 lg:px-0">

  <h2 class="before:content-[''] before:border-[10px] md:before:border-[16px] before:border-transparent before:border-l-gray-800 before:rounded before:mb-[2px] md:before:mb-[4px] before:mr-1
          flex items-center text-xl md:text-3xl text-gray-800 font-bold uppercase mb-6 mt-8 md:mt-10">
    Cloud Native Contributions</h2>

  <div class="flex flex-col gap-12">

    @if($projects->count())
        <div class="pb-8">
            <h3 class="text-xl md:text-2xl text-gray-800 font-bold uppercase mb-4">Projects</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach($projects as $project)
                    <x-contributions.card :contribution="$project" />
                @endforeach
            </div>
        </div>
    @endif

    @if($prs->count())
        <div class="pb-8">
            <h3 class="text-xl md:text-2xl text-gray-800 font-bold uppercase mb-4">Pull/Merge Requests</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach($prs as $pr)
                    <x-contributions.card :contribution="$pr" />
                @endforeach
            </div>
        </div>
    @endif

    @if($issues->count())
        <div class="">
            <h3 class="text-xl md:text-2xl text-gray-800 font-bold uppercase mb-4">Issues</h3>
            <div class="grid md:grid-cols-2 gap-6">
                @foreach($issues as $issue)
                    <x-contributions.card :contribution="$issue" />
                @endforeach
            </div>
        </div>
    @endif

  </div>
</section>
@endsection

@section('head')
<title>Contributions | Cloud Native Chapter of Mauritius</title>
@endsection
