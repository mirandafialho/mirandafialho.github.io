@php
    $formatter = new IntlDateFormatter(
        'pt_BR',
        IntlDateFormatter::LONG,
        IntlDateFormatter::NONE,
        'America/Sao_Paulo',
        IntlDateFormatter::GREGORIAN,
        'dd \'de\' MMMM \'de\' yyyy'
    );
@endphp

<div class="flex flex-col mb-4">
    <p class="text-gray-400 font-medium my-2">
        {{ $formatter->format($post->getDate()) }}
    </p>

    <h2 class="text-3xl mt-0">
        <a
            href="{{ $post->getUrl() }}"
            title="Read more - {{ $post->title }}"
            class="text-blue-400 font-extrabold"
        >
            {{ $post->title }}
        </a>
    </h2>

    <p class="mb-4 mt-0">{!! $post->getExcerpt(200) !!}</p>

    <a
        href="{{ $post->getUrl() }}"
        title="Leia mais - {{ $post->title }}"
        class="uppercase font-semibold tracking-wide mb-2"
    >
        Leia Mais
    </a>
</div>
