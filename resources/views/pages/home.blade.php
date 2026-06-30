@extends('layouts.app')

@section('title', 'Rifqy Fakhry Zain | Portfolio')
@section('description', 'Backend Developer Portfolio and Geospatial Web Application built with Laravel and MapLibre.')

@section('content')

    {{-- Navbar --}}
    <x-navbar />

    {{-- Hero --}}
    <section class="max-w-6xl mx-auto px-6 py-20">

        <span class="text-xs tracking-[0.4em] uppercase text-slate-500">
            Available for New Opportunities
        </span>

        <h1 class="mt-6 text-5xl md:text-7xl font-black leading-none">
            Building Digital
            <span class="block text-slate-500">
                Infrastructure.
            </span>
        </h1>

        <p class="mt-8 max-w-3xl text-lg text-slate-600 leading-relaxed">
            Saya <strong>Rifqy Fakhry Zain</strong>, mahasiswa Teknik Informatika
            yang berfokus pada pengembangan backend menggunakan Laravel,
            AdonisJS, PostgreSQL, REST API
        </p>

        <div class="mt-10 flex flex-wrap gap-4">

            <a href="#projects"
                class="px-6 py-3 border border-slate-900 rounded-full font-semibold hover:bg-slate-900 hover:text-white transition">
                View Projects
            </a>

            <a href="/map" class="px-6 py-3 bg-slate-900 text-white rounded-full font-semibold hover:opacity-90">
                Explore Map
            </a>

        </div>

    </section>

    {{-- Skills --}}
    <section id="about" class="max-w-6xl mx-auto px-6 py-10">

        <div class="border rounded-3xl p-8 md:p-12">

            <h2 class="text-4xl font-bold">
                Technical Arsenal
            </h2>

            <p class="mt-4 text-slate-600">
                Berpengalaman membangun backend application yang scalable
                menggunakan Laravel dan AdonisJS serta integrasi REST API.
            </p>

            <div class="mt-8 flex flex-wrap gap-3">

                @foreach (['Laravel', 'AdonisJS', 'PHP', 'PostgreSQL', 'MySQL', 'REST API', 'Git', 'Tailwind CSS', 'MapLibre GL', 'OpenStreetMap'] as $skill)
                    <span class="px-4 py-2 border rounded-xl text-sm">
                        {{ $skill }}
                    </span>
                @endforeach

            </div>

        </div>

    </section>

    {{-- Projects --}}
    <section id="projects" class="max-w-6xl mx-auto px-6 py-20">

        <h2 class="text-5xl font-black mb-12">
            Selected Works
        </h2>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

            <div class="border rounded-3xl p-6">
                <h3 class="text-2xl font-bold">
                    Knowledge Hub
                </h3>

                <p class="mt-4 text-slate-600">
                    Mengembangkan platform knowledge sharing internal yang
                    mendukung publikasi artikel, sistem komentar, likes,
                    attachment management, serta integrasi penyimpanan cloud
                    menggunakan AdonisJS dan PostgreSQL.
                </p>
            </div>

            <div class="border rounded-3xl p-6">
                <h3 class="text-2xl font-bold">
                    Employee Leave Management API
                </h3>

                <p class="mt-4 text-slate-600">
                    RESTful API dengan integrasi Google OAuth dan Sanctum. Mengelola otomatisasi kuota cuti tahunan dengan
                    validasi logic yang ketat dan Role-based Access Control.
                </p>
            </div>

            <div class="border rounded-3xl p-6">
                <h3 class="text-2xl font-bold">
                    Admin Doorprize System
                </h3>

                <p class="mt-4 text-slate-600">
                    Bertanggung jawab pada pengembangan Admin Panel yang aman, manajemen enkripsi data peserta, serta
                    algoritma penentuan pemenang yang adil dan transparan.
                </p>
            </div>

        </div>

    </section>

    {{-- Footer --}}
    <footer class="border-t mt-20">

        <div class="max-w-6xl mx-auto px-6 py-8 text-center text-sm text-slate-500">
            © {{ date('Y') }} Rifqy Fakhry Zain. All Rights Reserved.
        </div>

    </footer>

@endsection
