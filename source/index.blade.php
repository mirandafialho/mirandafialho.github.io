---
title: Início
description: A lista de postagens para o blog de tecnologia
pagination:
    collection: posts
    perPage: 4
---
@extends('_layouts.main')

@section('body')
    @foreach ($pagination->items as $post)
        @include('_components.post-preview-inline')

        @if ($post != $pagination->items->last())
            <hr class="border-b my-6">
        @endif
    @endforeach

    @if ($pagination->pages->count() > 1)
        <nav class="flex text-base my-8">
            @if ($previous = $pagination->previous)
                <a
                    href="{{ $previous }}"
                    title="Página anterior"
                    class="bg-blue-400 hover:bg-blue-800 text-gray-100 hover:text-gray-200 rounded mr-3 px-5 py-3"
                >&LeftArrow;</a>
            @endif

            @foreach ($pagination->pages as $pageNumber => $path)
                <a
                    href="{{ $path }}"
                    title="Vá para a página {{ $pageNumber }}"
                    class="bg-blue-400 hover:bg-blue-800 text-gray-100 hover:text-gray-200 rounded mr-3 px-5 py-3 {{ $pagination->currentPage == $pageNumber ? 'text-blue-600' : 'text-blue-700' }}"
                >{{ $pageNumber }}</a>
            @endforeach

            @if ($next = $pagination->next)
                <a
                    href="{{ $next }}"
                    title="Próxima página"
                    class="bg-blue-400 hover:bg-blue-800 text-gray-100 hover:text-gray-200 rounded mr-3 px-5 py-3"
                >&RightArrow;</a>
            @endif
        </nav>
    @endif
@stop
