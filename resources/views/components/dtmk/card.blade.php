@props([
    'item',
    'tone' => 'light',
    'compact' => false,
    'showMeta' => false,
])

@php
    $host = parse_url($item['url'] ?? '', PHP_URL_HOST);
    $isDark = $tone === 'dark';
@endphp

<a
    href="{{ $item['url'] }}"
    class="group flex h-full flex-col rounded-lg border p-5 transition duration-300 hover:-translate-y-1 focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-300 {{ $isDark ? 'border-white/10 bg-white/[0.06] text-white shadow-[0_18px_50px_rgba(0,0,0,0.22)] hover:border-cyan-300/45 hover:bg-white/[0.09]' : 'border-slate-200 bg-white text-slate-950 shadow-[0_14px_45px_rgba(15,23,42,0.07)] hover:border-cyan-300 hover:shadow-[0_18px_60px_rgba(8,47,73,0.14)]' }}"
>
    <div class="flex items-start justify-between gap-4">
        <div class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg {{ $isDark ? 'bg-cyan-300/10 text-cyan-200 ring-1 ring-cyan-200/20' : 'bg-cyan-50 text-cyan-700 ring-1 ring-cyan-100' }}">
            <x-dtmk.icon :name="$item['icon']" class="h-5 w-5" />
        </div>

        @if (($item['status'] ?? 'active') !== 'active')
            <x-dtmk.status-badge :status="$item['status']" />
        @endif
    </div>

    <div class="{{ $compact ? 'mt-4' : 'mt-6' }} flex-1">
        @if ($showMeta && ! empty($item['meta']))
            <p class="mb-2 text-sm font-semibold {{ $isDark ? 'text-cyan-200' : 'text-cyan-700' }}">{{ $item['meta'] }}</p>
        @endif

        <h3 class="text-lg font-bold leading-snug {{ $isDark ? 'text-white' : 'text-slate-950' }}">
            {{ $item['title'] }}
        </h3>
        <p class="mt-3 text-sm leading-6 {{ $isDark ? 'text-slate-300' : 'text-slate-600' }}">
            {{ $item['description'] }}
        </p>
    </div>

    <div class="mt-6 flex items-center justify-between gap-3 text-sm font-semibold {{ $isDark ? 'text-cyan-100' : 'text-cyan-700' }}">
        <span class="truncate">{{ $host ?: 'Lihat detail' }}</span>
        <span class="inline-flex h-8 w-8 shrink-0 items-center justify-center rounded-md border transition group-hover:translate-x-1 {{ $isDark ? 'border-white/15 bg-white/5' : 'border-slate-200 bg-slate-50' }}">
            <span aria-hidden="true">-></span>
        </span>
    </div>
</a>
