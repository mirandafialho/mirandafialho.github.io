<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <meta name="description" content="{{ $page->description ?? $page->siteDescription }}">

        <meta property="og:title" content="{{ $page->title ? $page->title . ' | ' : '' }}{{ $page->siteName }}"/>
        <meta property="og:type" content="{{ $page->type ?? 'website' }}" />
        <meta property="og:url" content="{{ $page->getUrl() }}"/>
        <meta property="og:description" content="{{ $page->description ?? $page->siteDescription }}" />

        <title>{{ $page->title ?  $page->title . ' | ' : '' }}{{ $page->siteName }}</title>

        <link rel="home" href="{{ $page->baseUrl }}">
        <link rel="canonical" href="{{ $page->getUrl() }}">
        <link rel="icon" href="/assets/img/favicon.ico">
        <link href="/blog/feed.atom" type="application/atom+xml" rel="alternate" title="{{ $page->siteName }} Atom Feed">

        @if ($page->production)
            <!-- Insert analytics code here -->
        @endif

        <link href="https://fonts.googleapis.com/css?family=Noto+Sans:300,300i,400,400i,700,700i,800,800i" rel="stylesheet">
        <link rel="stylesheet" href="{{ mix('css/main.css', 'assets/build') }}">
    </head>

    <body class="flex flex-col justify-between min-h-screen bg-gray-900 text-gray-100 leading-normal font-sans">
        <header class="flex items-center shadow bg-gray-800 border-b border-gray-600 h-24 py-4" role="banner">
            <div class="container flex items-center max-w-8xl mx-auto px-4 lg:px-8">
                <div class="flex items-center">
                    <a href="/" title="{{ $page->siteName }} home" class="inline-flex items-center">
                        <img class="h-8 md:h-10 mr-3 rounded-full" src="/assets/img/yuri.jpg" alt="{{ $page->siteName }} logo" />

                        <h1 class="text-lg md:text-2xl text-blue-400 font-semibold hover:text-blue-800 my-0">{{ $page->siteName }}</h1>
                    </a>
                </div>

                <div id="vue-search" class="flex flex-1 justify-end items-center">
                    <search></search>

                    @include('_nav.menu')

                    @include('_nav.menu-toggle')
                </div>
            </div>
        </header>

        @include('_nav.menu-responsive')

        <main role="main" class="flex-auto w-full container max-w-4xl mx-auto py-16 px-6">
            @yield('body')
        </main>

        <footer class="bg-gray-800 text-center text-sm mt-12 py-4" role="contentinfo">
            <ul class="flex flex-col md:flex-row justify-center list-none">
                <li class="md:mr-1">
                    &copy; 2024 - {{ date('Y') }} Yuri Miranda Fialho. All rights reserved.
                </li>

                <li>
                    Built with <a href="http://jigsaw.tighten.co" title="Jigsaw by Tighten">Jigsaw</a>
                    and <a href="https://tailwindcss.com" title="Tailwind CSS, a utility-first CSS framework">Tailwind CSS</a>.
                </li>
            </ul>
        </footer>

        <script src="{{ mix('js/main.js', 'assets/build') }}"></script>

        @stack('scripts')

        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=G-EV0C5MJ02X"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());

          gtag('config', 'G-EV0C5MJ02X');
        </script>

        <script type="text/javascript">window.piperun_data = {"form":{"header":{"text":"Venha bater um papo comigo","background_color":"#075E54","color":"#FFFFFF"},"content":{"fields":[{"field":"name","template":"pessoa.nome","type":"Pessoa","name":"Nome","id":"item_17","required":true},{"field":"email","template":"pessoa.email","type":"Pessoa","name":"E-mail","id":"item_18","required":true},{"field":"mobile_phone","template":"pessoa.telefone","type":"Pessoa","name":"Celular","id":"item_19","required":false},{"field":"notes","template":"oportunidade.mensagem","type":"Oportunidade","name":"Mensagem","id":"item_0","required":false}],"background_color":"#ECE5DD","color":"#2F2F2F"},"button":{"text":"Enviar","background_color":"#4FCE5D","color":"#FFFFFF"},"accept":{"text":"Eu concordo em receber comunicações de ofertas personalizadas de acordo com meus interesses.","color":"#2F2F2F"},"logo":{"color":"#25D366"}},"enterprise":"false","hash":"7339c47b-807b-4726-9981-3e6b6e334e0c","position":"bottom_right","origin":"Formulário Site","tags":["Alakazan","Teste Yuri"],"title":"@{{ pessoa.nome }}: @{{ oportunidade.data }}","contact_phone":"55991637123","success_page_url":"","rules":{"update":"false","filter_status_update":"open","filter_situation_update":"unfreezed","equal_pipeline":true,"status":"open","situation":"unfreezed","validate_cpf":"false","validate_cnpj":"false"}};</script>
        <script src="https://whats.tools.crmpiperun.com/script.min.js" type="text/javascript"></script>
    </body>
</html>
