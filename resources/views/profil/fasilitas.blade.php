@extends('layouts.public')
@section('title', 'Fasilitas')
@section('content')
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Fasilitas Sekolah</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($fasilitas as $item)
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                            class="w-full h-48 object-cover">
                    @else
                        <div
                            class="w-full h-48 bg-gradient-to-br from-blue-400 to-blue-600 flex items-center justify-center">
                            <span class="text-white text-6xl">🏢</span>
                        </div>
                    @endif
                    <div class="p-6">
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->nama }}</h3>
                        @if ($item->deskripsi)
                            <p class="text-gray-600 mb-4">{{ $item->deskripsi }}</p>
                        @endif
                        <div class="flex justify-between items-center">
                            <span class="text-sm text-gray-500">Jumlah: {{ $item->jumlah }}</span>
                            <span
                                class="px-3 py-1 rounded-full text-sm font-semibold
                        @if ($item->kondisi == 'baik') bg-green-100 text-green-800
                        @elseif($item->kondisi == 'rusak ringan') bg-yellow-100 text-yellow-800
                        @else bg-red-100 text-red-800 @endif">
                                {{ ucfirst($item->kondisi) }}
                            </span>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-gray-500">Belum ada data fasilitas</div>
            @endforelse
        </div>
    </div>
@endsection

