<!-- HEADER -->
<header id="header" class="fixed top-0 left-0 w-full z-50 bg-blue-900 text-white transition-all duration-300">
    <div class="max-w-7xl mx-auto flex justify-between items-center p-4">
        <div class="flex items-center space-x-3">
            <a href="home.php">
                <img src="admin/assets/img/logo.png" alt="Logo Sekolah" class="rounded-full h-10">
            </a>
            <h1 class="text-xl sm:text-2xl font-bold"><a href="home.php">SMA Negeri Nusantara</a></h1>
        </div>

        <!-- Navbar -->
        <nav>
            <div class="container mx-auto flex justify-between items-center">
            <!-- Menu Utama (Desktop) -->
            <div class="hidden md:flex space-x-6 items-center">
                <a href="home.php" class="hover:text-yellow-300 transition-colors duration-200">Home</a>

                <!-- Dropdown dengan Animasi -->
                <div class="relative group">
                    <button class="hover:text-yellow-300 flex items-center transition-colors duration-200">
                        Profil
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                            fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-44 bg-white text-gray-800 rounded-lg shadow-lg 
                                opacity-0 translate-y-2 invisible group-hover:visible group-hover:opacity-100 
                                group-hover:translate-y-0 transition-all duration-300 ease-out">
                        <a href="visi-misi.php" class="block px-4 py-2 hover:bg-yellow-300 hover:text-black transition-colors duration-200">Visi, Misi dan Tujuan Sekolah</a>
                        <a href="data-guru.php" class="block px-4 py-2 hover:bg-yellow-300 hover:text-black transition-colors duration-200">Data Guru</a>
                        <a href="data-siswa.php" class="block px-4 py-2 hover:bg-yellow-300 hover:text-black transition-colors duration-200">Data Peserta Didik</a>
                        <a href="data-kelas.php" class="block px-4 py-2 hover:bg-yellow-300 hover:text-black transition-colors duration-200">Data Kelas</a>
                        <a href="struktur-organisasi.php" class="block px-4 py-2 hover:bg-yellow-300 hover:text-black transition-colors duration-200">Struktur Organisasi</a>
                    </div>
                </div>

                <div class="relative group">
                    <button class="hover:text-yellow-300 flex items-center transition-colors duration-200">
                        Kesiswaan
                        <svg class="w-4 h-4 ml-1 transition-transform duration-200 group-hover:rotate-180"
                            fill="none" stroke="currentColor" stroke-width="2"
                            viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                                d="M19 9l-7 7-7-7" />
                        </svg>
                    </button>

                    <!-- Dropdown Menu -->
                    <div class="absolute left-0 mt-2 w-44 bg-white text-gray-800 rounded-lg shadow-lg 
                                opacity-0 translate-y-2 invisible group-hover:visible group-hover:opacity-100 
                                group-hover:translate-y-0 transition-all duration-300 ease-out">
                        <a href="pendaftaran.php" class="block px-4 py-2 hover:bg-yellow-300 hover:text-black transition-colors duration-200">Pendaftaran Peserta Didik Baru</a>
                        <a href="tata-tertib.php" class="block px-4 py-2 hover:bg-yellow-300 hover:text-black transition-colors duration-200">Tata Tertib Sekolah</a>
                    </div>
                </div>

                <a href="berita.php" class="hover:text-yellow-300 transition-colors duration-200">Berita</a>
                <a href="agenda.php" class="hover:text-yellow-300 transition-colors duration-200">Agenda</a>
            </div>
            </div>
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