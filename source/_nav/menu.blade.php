<nav class="hidden lg:flex items-center justify-end text-lg">
    <a title="{{ $page->siteName }} Home" href="/"
        class="ml-6 text-blue-400 hover:text-blue-800 {{ $page->isActive('/') ? 'active text-blue-800' : '' }}">
        Início
    </a>

    <a title="{{ $page->siteName }} About" href="https://about.me/mirandafialho" target="_blank" rel="nofollow"
        class="ml-6 text-blue-400 hover:text-blue-800">
        Sobre mim
    </a>

    <a title="Gerador de Senhas" href="https://geradoresdesenha.com.br" target="_blank"
       class="ml-6 text-blue-400 hover:text-blue-800">
        Gerador de Senha
    </a>

    <a title="{{ $page->siteName }} YouTube channel" href="https://www.youtube.com/@mirandafialho" target="_blank" rel="nofollow"
        class="ml-6 text-blue-400 hover:text-blue-800">
        YouTube
    </a>
</nav>
