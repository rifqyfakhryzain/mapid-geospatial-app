<nav class="max-w-6xl mx-auto px-6 py-6">
    <div class="flex items-center justify-between border border-slate-300 rounded-2xl px-6 py-4">

        <a href="/" class="font-bold text-xl">
            MY PORTFOLIO
        </a>

        <div class="flex items-center gap-6 text-sm font-medium">

            <a href="/#about" class="hover:text-slate-500 transition">
                About
            </a>

            <a href="/#projects" class="hover:text-slate-500 transition">
                Projects
            </a>

            <a href="/map" class="{{ request()->is('map') ? 'font-bold' : '' }} hover:text-slate-500 transition">
                Map
            </a>

        </div>

    </div>
</nav>
