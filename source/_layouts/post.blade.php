@extends('_layouts.main')

@php
    $page->type = 'article';

    $formatter = new IntlDateFormatter(
        'pt_BR',
        IntlDateFormatter::LONG, // For full month name (e.g., "janeiro")
        IntlDateFormatter::NONE,
        'America/Sao_Paulo', // Or your specific timezone if different from server default
        IntlDateFormatter::GREGORIAN,
        'dd \'de\' MMMM \'de\' yyyy' // Custom pattern to match "10 de janeiro de 2025"
    );
@endphp

@section('body')
    @if ($page->cover_image)
        <img src="{{ $page->cover_image }}" alt="{{ $page->title }} cover image" class="mb-2">
    @endif

    <h1 class="leading-none mb-2">{{ $page->title }}</h1>

    <p class="text-gray-200 text-xl md:mt-0">{{ $page->author }}  •  {{ $formatter->format($page->date) }}</p>

    @if ($page->categories)
        @foreach ($page->categories as $i => $category)
            <a
                href="{{ '/categories/' . $category }}"
                title="Veja mais postagens em {{ $category }}"
                class="inline-block bg-blue-200 hover:bg-blue-400 leading-loose tracking-wide text-blue-400 hover:text-blue-200 uppercase text-xs font-semibold rounded mr-4 px-3 pt-px"
            >{{ $category }}</a>
        @endforeach
    @endif

    <div class="border-b border-blue-200 mb-10 pb-4" v-pre>
        @yield('content')
    </div>

    <nav class="flex justify-between text-sm md:text-base">
        <div>
            @if ($next = $page->getNext())
                <a href="{{ $next->getUrl() }}" title="Postagem antiga: {{ $next->title }}">
                    &LeftArrow; {{ $next->title }}
                </a>
            @endif
        </div>

        <div>
            @if ($previous = $page->getPrevious())
                <a href="{{ $previous->getUrl() }}" title="Nova postagem: {{ $previous->title }}">
                    {{ $previous->title }} &RightArrow;
                </a>
            @endif
        </div>
    </nav>

    <script src="https://giscus.app/client.js"
            data-repo="mirandafialho/mirandafialho.github.io"
            data-repo-id="R_kgDOL7KJwg"
            data-category="Announcements"
            data-category-id="DIC_kwDOL7KJws4Cr1H_"
            data-mapping="pathname"
            data-strict="0"
            data-reactions-enabled="1"
            data-emit-metadata="0"
            data-input-position="bottom"
            data-theme="dark_high_contrast"
            data-lang="pt"
            crossorigin="anonymous"
            async>
    </script>
@endsection
