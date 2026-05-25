@props([
    'status' => 'active',
])

@php
    $labels = [
        'active' => 'Aktif',
        'development' => 'Pengembangan',
        'planned' => 'Direncanakan',
    ];

    $classes = [
        'active' => 'border-emerald-300/35 bg-emerald-400/10 text-emerald-200',
        'development' => 'border-cyan-300/40 bg-cyan-400/10 text-cyan-100',
        'planned' => 'border-fuchsia-300/40 bg-fuchsia-400/10 text-fuchsia-100',
    ];
@endphp

<span class="inline-flex items-center gap-1.5 rounded-md border px-2.5 py-1 text-xs font-semibold {{ $classes[$status] ?? $classes['planned'] }}">
    <span class="h-1.5 w-1.5 rounded-full bg-current"></span>
    {{ $labels[$status] ?? ucfirst($status) }}
</span>
