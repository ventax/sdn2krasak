@extends('layouts.public')
@section('title', 'Ekstrakurikuler')
@section('content')
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Ekstrakurikuler</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
            @forelse($ekstrakurikuler as $item)
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                    <div class="flex flex-col md:flex-row">
                        @if ($item->gambar)
                            <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama }}"
                                class="w-full md:w-48 h-48 object-cover">
                        @else
                            <div
                                class="w-full md:w-48 h-48 bg-gradient-to-br from-purple-400 to-pink-600 flex items-center justify-center">
                                <span class="text-white text-6xl">⭐</span>
                            </div>
                        @endif
                        <div class="p-6 flex-1">
                            <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->nama }}</h3>
                            @if ($item->deskripsi)
                                <p class="text-gray-600 mb-4">{{ $item->deskripsi }}</p>
                            @endif
                            <div class="space-y-2 text-sm text-gray-700">
                                @if ($item->pembina)
                                    <p><span class="font-semibold">Pembina:</span> {{ $item->pembina }}</p>
                                @endif
                                @if ($item->hari)
                                    <p><span class="font-semibold">Jadwal:</span> {{ $item->hari }}
                                        {{ $item->waktu ? ', ' . $item->waktu : '' }}</p>
                                @endif
                                @if ($item->tempat)
                                    <p><span class="font-semibold">Tempat:</span> {{ $item->tempat }}</p>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @empty
                <div class="col-span-2 text-center py-12 text-gray-500">Belum ada data ekstrakurikuler</div>
            @endforelse
        </div>
    </div>
@endsection

