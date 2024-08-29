<div {{ $attributes->merge(['class' => "flex gap-2"]) }} {{ $attributes }}>
    @foreach ($socials as $social)
        <x-dynamic-component :component="'socials.'.$social->platform->value" :url="$social->url" />
    @endforeach
</div>