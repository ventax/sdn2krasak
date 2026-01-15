@extends('layouts.public')
@section('title', 'Guru & Staff')
@section('content')
    <div class="bg-blue-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Guru & Tenaga Pendidik</h1>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        @if ($kepalaSekolah)
            <div class="mb-12">
                <h2 class="text-2xl font-bold text-gray-800 mb-6">Kepala Sekolah</h2>
                <div class="bg-white rounded-lg shadow p-8 max-w-2xl mx-auto">
                    <div class="flex flex-col md:flex-row items-center">
                        @if ($kepalaSekolah->foto)
                            <img src="{{ asset('storage/' . $kepalaSekolah->foto) }}" alt="{{ $kepalaSekolah->nama }}"
                                class="w-40 h-40 rounded-full object-cover mb-4 md:mb-0 md:mr-8">
                        @else
                            <div
                                class="w-40 h-40 rounded-full bg-blue-100 flex items-center justify-center mb-4 md:mb-0 md:mr-8">
                                <span
                                    class="text-5xl text-blue-600 font-bold">{{ substr($kepalaSekolah->nama, 0, 1) }}</span>
                            </div>
                        @endif
                        <div class="text-center md:text-left">
                            <h3 class="text-2xl font-bold text-gray-800 mb-2">{{ $kepalaSekolah->nama }}</h3>
                            <p class="text-gray-600 mb-2">{{ $kepalaSekolah->jabatan }}</p>
                            <p class="text-sm text-gray-500 mb-2">{{ $kepalaSekolah->pendidikan_terakhir }}</p>
                            @if ($kepalaSekolah->email)
                                <p class="text-sm text-blue-600">📧 {{ $kepalaSekolah->email }}</p>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        @endif

        <div>
            <h2 class="text-2xl font-bold text-gray-800 mb-6">Daftar Guru</h2>
            <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6">
                @forelse($guru as $item)
                    <div class="bg-white rounded-lg shadow p-6 text-center hover:shadow-lg transition">
                        @if ($item->foto)
                            <img src="{{ asset('storage/' . $item->foto) }}" alt="{{ $item->nama }}"
                                class="w-32 h-32 rounded-full object-cover mx-auto mb-4">
                        @else
                            <div class="w-32 h-32 rounded-full bg-gray-200 flex items-center justify-center mx-auto mb-4">
                                <span class="text-3xl text-gray-500 font-bold">{{ substr($item->nama, 0, 1) }}</span>
                            </div>
                        @endif
                        <h3 class="text-lg font-semibold text-gray-800 mb-1">{{ $item->nama }}</h3>
                        <p class="text-sm text-gray-600 mb-1">{{ $item->jabatan }}</p>
                        @if ($item->mata_pelajaran)
                            <p class="text-sm text-blue-600 font-medium">{{ $item->mata_pelajaran }}</p>
                        @endif
                        <p class="text-xs text-gray-500 mt-2">{{ $item->pendidikan_terakhir }}</p>
                    </div>
                @empty
                    <div class="col-span-4 text-center py-12 text-gray-500">Belum ada data guru</div>
                @endforelse
            </div>
        </div>
    </div>
@endsection

