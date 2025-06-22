<nav id="js-nav-menu" class="w-auto px-2 pt-6 pb-2 bg-gray-800 shadow hidden lg:hidden">
    <ul class="my-0">
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} Home"
                href="/"
                class="block mt-0 mb-4 text-sm no-underline {{ $page->isActive('/') ? 'active text-blue-800' : 'text-blue-400 hover:text-blue-800' }}"
            >
                Início
            </a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} About"
                href="https://about.me/mirandafialho"
                target="_blank"
                rel="nofollow"
                class="block mt-0 mb-4 text-sm no-underline text-blue-400 hover:text-blue-800"
            >
                Sobre mim
            </a>
        </li>
        <li class="pl-4">
            <a
               title="Gerador de Senha Online"
               href="https://geradoresdesenha.com.br"
               target="_blank"
               class="block mt-0 mb-4 text-sm no-underline text-blue-400 hover:text-blue-800"
            >
                Gerador de Senha
            </a>
        </li>
        <li class="pl-4">
            <a
                title="{{ $page->siteName }} YouTube channel"
                href="https://www.youtube.com/@mirandafialho"
                target="_blank"
                rel="nofollow"
                class="block mt-0 mb-4 text-sm no-underline text-blue-400 hover:text-blue-800"
            >
                YouTube
            </a>
        </li>
    </ul>
</nav>
