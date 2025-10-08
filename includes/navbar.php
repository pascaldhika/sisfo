<!-- HEADER -->
<header id="header" class="fixed top-0 left-0 w-full z-50 bg-blue-900 text-white transition-all duration-300">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
        <div class="flex items-center space-x-3">
            <img src="admin/assets/img/logo.png" alt="Logo Sekolah" class="rounded-full h-10">
            <h1 class="text-xl sm:text-2xl font-bold">SMA Negeri Nusantara</h1>
        </div>

        <!-- Desktop Menu -->
        <nav class="hidden md:flex space-x-6">
            <a href="home.php" class="hover:text-yellow-300">Beranda</a>
            <a href="agenda.php" class="hover:text-yellow-300">Agenda</a>
            <a href="berita.php" class="hover:text-yellow-300">Berita</a>
        </nav>

        <!-- Mobile Menu Button -->
        <button id="menu-btn" class="md:hidden flex items-center focus:outline-none">
            <svg class="w-6 h-6" fill="none" stroke="white" stroke-width="2" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>

    <div id="mobile-menu" class="hidden md:hidden bg-blue-600">
        <a href="home.php" class="block px-4 py-2 hover:bg-blue-500">Beranda</a>
        <a href="agenda.php" class="block px-4 py-2 hover:bg-blue-500">Agenda</a>
        <a href="berita.php" class="block px-4 py-2 hover:bg-blue-500">Berita</a>
    </div>
</header>