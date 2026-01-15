@extends('layouts.public')
@section('title', $berita->judul)
@section('content')
    <div class="bg-gray-100 py-8">
        <div class="container mx-auto px-4">
            <nav class="text-sm text-gray-600 mb-4">
                <a href="{{ route('home') }}" class="hover:text-blue-600">Beranda</a> /
                <a href="{{ route('berita.index') }}" class="hover:text-blue-600">Berita</a> /
                <span class="text-gray-800">{{ Str::limit($berita->judul, 50) }}</span>
            </nav>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2">
                <article class="bg-white rounded-lg shadow p-8">
                    @if ($berita->kategori)
                        <span
                            class="inline-block bg-blue-100 text-blue-800 text-sm px-3 py-1 rounded mb-4">{{ $berita->kategori }}</span>
                    @endif

                    <h1 class="text-4xl font-bold text-gray-800 mb-4">{{ $berita->judul }}</h1>

                    <div class="flex items-center text-gray-600 text-sm mb-6 space-x-4">
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                            </svg>
                            {{ $berita->user->name }}
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                            </svg>
                            {{ $berita->created_at->format('d F Y') }}
                        </div>
                        <div class="flex items-center">
                            <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                            </svg>
                            {{ $berita->views }} views
                        </div>
                    </div>

                    @if ($berita->gambar)
                        <img src="{{ asset('storage/' . $berita->gambar) }}" alt="{{ $berita->judul }}"
                            class="w-full rounded-lg mb-6">
                    @endif

                    <div class="prose max-w-none text-gray-700 leading-relaxed">
                        {!! nl2br(e($berita->konten)) !!}
                    </div>

                    <div class="mt-8 pt-6 border-t border-gray-200">
                        <div class="flex items-center justify-between">
                            <a href="{{ route('berita.index') }}" class="text-blue-600 hover:text-blue-800 font-semibold">
                                ← Kembali ke Berita
                            </a>
                            <div class="flex space-x-2">
                                <button class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Share</button>
                            </div>
                        </div>
                    </div>
                </article>
            </div>

            <div>
                <div class="bg-white rounded-lg shadow p-6 mb-6">
                    <h3 class="text-xl font-bold text-gray-800 mb-4">Berita Lainnya</h3>
                    <div class="space-y-4">
                        @foreach ($beritaLainnya as $item)
                            <a href="{{ route('berita.show', $item->slug) }}"
                                class="block hover:bg-gray-50 p-2 rounded transition">
                                <h4 class="font-semibold text-gray-800 mb-1 line-clamp-2">{{ $item->judul }}</h4>
                                <p class="text-sm text-gray-500">{{ $item->created_at->format('d M Y') }}</p>
                            </a>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

