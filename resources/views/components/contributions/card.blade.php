<div
  class="overflow-hidden p-4 md:p-6 bg-white flex items-center justify-between focus-visible:ring-2 rounded-md border-2 border-r-4 border-b-4 border-gray-800 md:hover:scale-[1.02] transition ease-in-out duration-200 relative">
  <a href="{{ $contribution->source }}" class="absolute inset-0"></a>
  <div class="grid gap-4 h-full grid-rows-[auto_auto_1fr_auto]">
    <div class="-mt-2 text-black text-lg md:text-xl font-bold">{{ $contribution->name }}</div>
    <div class="text-black flex-grow">
      {{ $contribution->description }}
    </div>
    <div class="grid gap-4">
      <div class="flex flex-row gap-2 items-center">
        <p class="text-xs uppercase font-semibold">By {{ $contribution->author }}</p>
      </div>
    </div>
  </div>
</div>
