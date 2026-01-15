@extends('layouts.public')
@section('title', 'Galeri')
@section('content')
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Galeri</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-6 flex space-x-2">
            <a href="{{ route('galeri.index') }}"
                class="px-4 py-2 {{ !request('tipe') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg">Semua</a>
            <a href="{{ route('galeri.index', ['tipe' => 'foto']) }}"
                class="px-4 py-2 {{ request('tipe') == 'foto' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg">Foto</a>
            <a href="{{ route('galeri.index', ['tipe' => 'video']) }}"
                class="px-4 py-2 {{ request('tipe') == 'video' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg">Video</a>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @forelse($galeri as $item)
                <a href="{{ route('galeri.show', $item) }}" class="block group">
                    <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                        @if ($item->tipe == 'foto' && $item->file)
                            <div class="relative overflow-hidden">
                                <img src="{{ asset('storage/' . $item->file) }}" alt="{{ $item->judul }}"
                                    class="w-full h-48 object-cover group-hover:scale-110 transition duration-300">
                                <div
                                    class="absolute inset-0 bg-black bg-opacity-0 group-hover:bg-opacity-30 transition flex items-center justify-center">
                                    <svg class="w-12 h-12 text-white opacity-0 group-hover:opacity-100 transition"
                                        fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                    </svg>
                                </div>
                            </div>
                        @else
                            <div
                                class="relative w-full h-48 bg-gradient-to-br from-red-500 to-pink-600 flex items-center justify-center">
                                <svg class="w-16 h-16 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M14.752 11.168l-3.197-2.132A1 1 0 0010 9.87v4.263a1 1 0 001.555.832l3.197-2.132a1 1 0 000-1.664z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                        d="M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                </svg>
                            </div>
                        @endif
                        <div class="p-4">
                            <h3 class="font-semibold text-gray-800 line-clamp-2">{{ $item->judul }}</h3>
                            @if ($item->kategori)
                                <p class="text-sm text-gray-500 mt-1">{{ $item->kategori }}</p>
                            @endif
                        </div>
                    </div>
                </a>
            @empty
                <div class="col-span-4 text-center py-12 text-gray-500">Belum ada galeri</div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $galeri->links() }}
        </div>
    </div>
@endsection

