@props([
    'eyebrow',
    'title',
    'description' => null,
    'align' => 'left',
])

<div class="{{ $align === 'center' ? 'mx-auto text-center' : '' }} max-w-3xl">
    <p class="text-sm font-semibold uppercase text-cyan-600">{{ $eyebrow }}</p>
    <h2 class="mt-3 text-3xl font-bold leading-tight text-slate-950 sm:text-4xl">
        {{ $title }}
    </h2>

    @if ($description)
        <p class="mt-4 text-base leading-7 text-slate-600 sm:text-lg">
            {{ $description }}
        </p>
    @endif
</div>
