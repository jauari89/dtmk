@php
    $brand = $landing['brand'];
    $navigation = $landing['navigation'];
    $stats = $landing['stats'];
    $highlights = $landing['highlights'];
    $programs = $landing['programs'];
    $applications = $landing['applications'];
    $factoryFlow = $landing['factory_flow'];
    $research = $landing['research'];
    $partners = $landing['partners'];
    $socialLinks = $landing['social_links'];
@endphp

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="Portal utama Departemen Teknologi Multimedia Kreatif PENS untuk program studi, portal akademik, teaching factory, riset, mitra, dan kontak.">

        <title>{{ $brand['short_name'] }} PENS | {{ $brand['name'] }}</title>

        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600,700,800" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="overflow-x-hidden bg-slate-950 font-sans text-white antialiased">
        <header class="sticky top-0 z-50 border-b border-white/10 bg-slate-950/85 backdrop-blur-xl">
            <div class="mx-auto max-w-7xl px-4 py-3 sm:px-6 lg:px-8">
                <div class="flex items-center justify-between gap-4">
                    <a href="#beranda" class="flex min-w-0 items-center gap-3">
                        <span class="flex h-11 w-11 shrink-0 items-center justify-center rounded-lg bg-cyan-400 text-sm font-black text-slate-950 shadow-[0_0_35px_rgba(34,211,238,0.28)]">
                            {{ $brand['short_name'] }}
                        </span>
                        <span class="min-w-0">
                            <span class="block truncate text-sm font-bold leading-tight text-white sm:text-base">{{ $brand['name'] }}</span>
                            <span class="block truncate text-xs text-cyan-100/75">{{ $brand['institution'] }}</span>
                        </span>
                    </a>

                    <nav class="hidden items-center gap-1 lg:flex" aria-label="Navigasi utama">
                        @foreach ($navigation as $item)
                            <a href="{{ $item['href'] }}" class="rounded-md px-3 py-2 text-sm font-semibold text-slate-200 transition hover:bg-white/10 hover:text-white focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-300">
                                {{ $item['label'] }}
                            </a>
                        @endforeach
                    </nav>
                </div>

                <nav class="no-scrollbar mt-3 flex gap-2 overflow-x-auto pb-1 lg:hidden" aria-label="Navigasi mobile">
                    @foreach ($navigation as $item)
                        <a href="{{ $item['href'] }}" class="shrink-0 rounded-md border border-white/10 bg-white/[0.06] px-3 py-2 text-sm font-semibold text-slate-100">
                            {{ $item['label'] }}
                        </a>
                    @endforeach
                </nav>
            </div>
        </header>

        <main>
            <section id="beranda" class="relative isolate overflow-hidden bg-[linear-gradient(135deg,#07132a_0%,#0b2451_42%,#351267_100%)]">
                <div class="cyber-grid absolute inset-0 opacity-50"></div>
                <div class="absolute inset-x-0 bottom-0 h-32 bg-gradient-to-t from-slate-950 to-transparent"></div>

                <div class="relative mx-auto grid min-h-[calc(100svh-72px)] max-w-7xl grid-cols-1 items-center gap-10 px-4 py-16 sm:px-6 lg:grid-cols-[1.04fr_0.96fr] lg:px-8 lg:py-20">
                    <div class="min-w-0 w-full max-w-[calc(100vw-2rem)] sm:max-w-none">
                        <p class="inline-flex rounded-md border border-cyan-200/25 bg-cyan-300/10 px-3 py-1.5 text-sm font-semibold text-cyan-100">
                            {{ $brand['short_name'] }} PENS
                        </p>
                        <h1 class="mt-6 max-w-full break-words text-3xl font-black leading-tight text-white sm:max-w-4xl sm:text-5xl lg:text-6xl">
                            {{ $brand['name'] }}
                        </h1>
                        <p class="mt-6 max-w-2xl text-base leading-8 text-slate-200 sm:text-lg">
                            Ekosistem pendidikan vokasi kreatif berbasis multimedia, game, rekayasa media, bisnis digital, OBE, PBL, dan Teaching Factory.
                        </p>

                        <div class="mt-8 flex w-full flex-col gap-3 sm:flex-row">
                            <a href="#program-studi" class="inline-flex items-center justify-center rounded-md bg-cyan-300 px-5 py-3 text-sm font-bold text-slate-950 shadow-[0_18px_55px_rgba(34,211,238,0.25)] transition hover:-translate-y-0.5 hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-white">
                                Jelajahi Program Studi
                            </a>
                            <a href="#portal-aplikasi" class="inline-flex items-center justify-center rounded-md border border-white/20 bg-white/10 px-5 py-3 text-sm font-bold text-white backdrop-blur transition hover:-translate-y-0.5 hover:bg-white/15 focus:outline-none focus-visible:ring-2 focus-visible:ring-cyan-300">
                                Masuk Portal Aplikasi
                            </a>
                        </div>

                        <dl class="mt-10 grid w-full max-w-2xl grid-cols-1 gap-3 sm:grid-cols-3">
                            @foreach ($stats as $stat)
                                <div class="rounded-lg border border-white/10 bg-white/[0.06] p-4 backdrop-blur">
                                    <dt class="text-2xl font-black text-white">{{ $stat['value'] }}</dt>
                                    <dd class="mt-1 text-xs font-medium leading-5 text-slate-300 sm:text-sm">{{ $stat['label'] }}</dd>
                                </div>
                            @endforeach
                        </dl>
                    </div>

                    <div class="relative min-w-0 w-full max-w-[calc(100vw-2rem)] sm:max-w-none">
                        <div class="media-console relative min-h-[390px] min-w-0 overflow-hidden rounded-lg border border-white/15 bg-slate-950/40 p-5 shadow-[0_25px_90px_rgba(0,0,0,0.35)] backdrop-blur-xl">
                            <div class="absolute inset-0 bg-[linear-gradient(120deg,rgba(34,211,238,0.12),transparent_36%,rgba(168,85,247,0.16)_72%,rgba(255,255,255,0.04))]"></div>
                            <div class="relative flex items-center justify-between border-b border-white/10 pb-4">
                                <div>
                                    <p class="text-sm font-semibold text-cyan-100">Creative Technology Matrix</p>
                                    <p class="mt-1 text-xs text-slate-400">OBE . PBL . Teaching Factory</p>
                                </div>
                                <div class="flex gap-1.5">
                                    <span class="h-2.5 w-2.5 rounded-full bg-cyan-300"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-fuchsia-300"></span>
                                    <span class="h-2.5 w-2.5 rounded-full bg-emerald-300"></span>
                                </div>
                            </div>

                            <div class="relative mt-6 grid grid-cols-12 gap-3">
                                <div class="col-span-7 h-40 rounded-lg border border-cyan-200/20 bg-cyan-300/10 p-4">
                                    <div class="flex h-full items-end gap-2">
                                        @foreach ([35, 68, 46, 82, 58, 74, 90, 62] as $height)
                                            <span class="w-full rounded-t-md bg-cyan-200/80" style="height: {{ $height }}%"></span>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="col-span-5 grid gap-3">
                                    <div class="rounded-lg border border-fuchsia-200/20 bg-fuchsia-300/10 p-4">
                                        <div class="h-2 w-16 rounded-full bg-fuchsia-200/80"></div>
                                        <div class="mt-4 h-2 w-full rounded-full bg-white/15"></div>
                                        <div class="mt-2 h-2 w-3/4 rounded-full bg-white/15"></div>
                                    </div>
                                    <div class="rounded-lg border border-emerald-200/20 bg-emerald-300/10 p-4">
                                        <div class="grid grid-cols-4 gap-2">
                                            @foreach (range(1, 8) as $item)
                                                <span class="aspect-square rounded-md bg-emerald-200/25"></span>
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="relative mt-5 grid grid-cols-3 gap-3">
                                @foreach (['Multimedia', 'Game', 'XR'] as $label)
                                    <div class="rounded-lg border border-white/10 bg-white/[0.06] p-4">
                                        <div class="h-2 w-12 rounded-full bg-cyan-200/70"></div>
                                        <p class="mt-3 text-sm font-bold text-white">{{ $label }}</p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="tentang" class="scroll-mt-28 bg-white px-4 py-16 text-slate-950 sm:px-6 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
                    <div class="grid gap-10 lg:grid-cols-[0.9fr_1.1fr] lg:items-start">
                        <x-dtmk.section-heading
                            eyebrow="Profil DTMK"
                            title="Portal departemen untuk pendidikan vokasi multimedia kreatif."
                            description="DTMK PENS menghubungkan pembelajaran berbasis outcome, studio produksi, laboratorium kreatif, riset terapan, dan kolaborasi industri dalam satu ekosistem digital yang siap dikembangkan menjadi layanan berbasis data."
                        />

                        <div class="grid gap-4 sm:grid-cols-2">
                            @foreach ($highlights as $highlight)
                                <x-dtmk.card :item="$highlight" compact />
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>

            <section id="program-studi" class="scroll-mt-28 bg-slate-50 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
                    <x-dtmk.section-heading
                        eyebrow="Program Studi"
                        title="Empat jalur vokasi untuk talenta kreatif digital."
                        description="Setiap program studi diarahkan untuk membangun kompetensi produksi, rekayasa, desain, bisnis, dan hilirisasi karya multimedia."
                    />

                    <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-4">
                        @foreach ($programs as $program)
                            <x-dtmk.card :item="$program" show-meta />
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="portal-aplikasi" class="scroll-mt-28 bg-slate-950 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
                    <div class="grid gap-8 lg:grid-cols-[0.8fr_1.2fr] lg:items-end">
                        <div>
                            <p class="text-sm font-semibold uppercase text-cyan-300">Portal Aplikasi</p>
                            <h2 class="mt-3 text-3xl font-bold leading-tight text-white sm:text-4xl">
                                Layanan akademik dan produksi dalam satu gerbang DTMK.
                            </h2>
                        </div>
                        <p class="text-base leading-7 text-slate-300 sm:text-lg">
                            Data aplikasi disusun sebagai konfigurasi yang mudah dipindahkan ke model database, lengkap dengan judul, deskripsi, ikon, URL, dan status rilis.
                        </p>
                    </div>

                    <div class="mt-10 grid gap-5 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-5">
                        @foreach ($applications as $application)
                            <x-dtmk.card :item="$application" tone="dark" compact />
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="teaching-factory" class="scroll-mt-28 bg-white px-4 py-16 text-slate-950 sm:px-6 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
                    <x-dtmk.section-heading
                        eyebrow="Teaching Factory / PBL"
                        title="Alur kerja produksi dari kebutuhan mitra sampai hilirisasi produk."
                        description="Teaching Factory menjadi ruang temu antara brief industri, proses produksi mahasiswa, asesmen rubrik, portfolio, dan peluang produk nyata."
                        align="center"
                    />

                    <div class="mt-12 grid gap-4 md:grid-cols-2 xl:grid-cols-6">
                        @foreach ($factoryFlow as $index => $step)
                            <div class="relative rounded-lg border border-slate-200 bg-slate-50 p-5 shadow-[0_12px_40px_rgba(15,23,42,0.06)]">
                                @if (! $loop->last)
                                    <span class="pointer-events-none absolute left-1/2 top-full hidden h-4 w-px bg-cyan-200 md:block xl:left-full xl:top-1/2 xl:h-px xl:w-4"></span>
                                @endif

                                <span class="flex h-10 w-10 items-center justify-center rounded-lg bg-slate-950 text-sm font-black text-cyan-200">
                                    {{ str_pad($index + 1, 2, '0', STR_PAD_LEFT) }}
                                </span>
                                <h3 class="mt-5 text-base font-bold leading-snug">{{ $step }}</h3>
                            </div>
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="riset-karya" class="scroll-mt-28 bg-[linear-gradient(180deg,#f8fbff_0%,#eef7ff_100%)] px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
                    <x-dtmk.section-heading
                        eyebrow="Riset & Karya"
                        title="Klaster karya untuk multimedia, game, XR, broadcasting, UI/UX, dan bisnis digital."
                        description="Area ini disiapkan sebagai etalase riset terapan, karya mahasiswa, publikasi, demo produk, dan portfolio kolaborasi."
                    />

                    <div class="mt-10 grid gap-5 md:grid-cols-2 xl:grid-cols-3">
                        @foreach ($research as $item)
                            <x-dtmk.card :item="$item" />
                        @endforeach
                    </div>
                </div>
            </section>

            <section id="mitra" class="scroll-mt-28 bg-slate-950 px-4 py-16 sm:px-6 lg:px-8 lg:py-24">
                <div class="mx-auto max-w-7xl">
                    <div class="grid gap-10 lg:grid-cols-[0.85fr_1.15fr] lg:items-start">
                        <div>
                            <p class="text-sm font-semibold uppercase text-cyan-300">Mitra Industri</p>
                            <h2 class="mt-3 text-3xl font-bold leading-tight text-white sm:text-4xl">
                                Ruang kolaborasi untuk studio, industri kreatif, startup, dan mentor produksi.
                            </h2>
                            <p class="mt-4 text-base leading-7 text-slate-300 sm:text-lg">
                                Placeholder logo mitra dapat diganti dengan data partner resmi, logo, URL, dan kategori kerja sama.
                            </p>
                        </div>

                        <div class="grid gap-4 sm:grid-cols-2 xl:grid-cols-3">
                            @foreach ($partners as $partner)
                                <a href="{{ $partner['url'] }}" class="group flex min-h-36 flex-col justify-between rounded-lg border border-white/10 bg-white/[0.06] p-5 text-white transition hover:-translate-y-1 hover:border-cyan-300/40 hover:bg-white/[0.09]">
                                    <div class="flex items-center justify-between">
                                        <x-dtmk.icon :name="$partner['icon']" class="h-6 w-6 text-cyan-200" />
                                        <span class="h-2 w-12 rounded-full bg-white/20"></span>
                                    </div>
                                    <div>
                                        <p class="text-lg font-black">{{ $partner['title'] }}</p>
                                        <p class="mt-2 text-sm leading-6 text-slate-300">{{ $partner['description'] }}</p>
                                    </div>
                                </a>
                            @endforeach
                        </div>
                    </div>
                </div>
            </section>
        </main>

        <footer id="kontak" class="scroll-mt-28 border-t border-white/10 bg-slate-950 px-4 py-10 text-slate-300 sm:px-6 lg:px-8">
            <div class="mx-auto grid max-w-7xl gap-8 md:grid-cols-[1.1fr_0.9fr_0.7fr]">
                <div>
                    <p class="text-lg font-black text-white">{{ $brand['short_name'] }} PENS</p>
                    <p class="mt-2 max-w-xl text-sm leading-6">{{ $brand['name'] }} adalah portal utama departemen untuk program studi, layanan akademik, teaching factory, riset, karya, mitra, dan kontak.</p>
                </div>

                <div>
                    <p class="font-bold text-white">Kontak</p>
                    <address class="mt-3 not-italic text-sm leading-6">
                        {{ $brand['address'] }}<br>
                        <a class="text-cyan-200 transition hover:text-white" href="mailto:{{ $brand['email'] }}">{{ $brand['email'] }}</a>
                    </address>
                </div>

                <div>
                    <p class="font-bold text-white">Sosial Media</p>
                    <div class="mt-3 flex flex-wrap gap-2">
                        @foreach ($socialLinks as $link)
                            <a href="{{ $link['href'] }}" class="rounded-md border border-white/10 px-3 py-2 text-sm font-semibold text-slate-200 transition hover:border-cyan-300/40 hover:text-white">
                                {{ $link['label'] }}
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>

            <div class="mx-auto mt-8 max-w-7xl border-t border-white/10 pt-6 text-sm text-slate-500">
                &copy; {{ date('Y') }} {{ $brand['name'] }} - {{ $brand['institution'] }}.
            </div>
        </footer>
    </body>
</html>
