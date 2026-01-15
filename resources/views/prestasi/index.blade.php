@extends('layouts.public')
@section('title', 'Prestasi')
@section('content')
    <div class="bg-gradient-to-r from-purple-600 to-pink-600 text-white py-12">
        <div class="container mx-auto px-4">
            <h1 class="text-4xl font-bold">Prestasi Sekolah</h1>
            <p class="mt-2 text-lg">Kebanggaan kami, inspirasi generasi masa depan</p>
        </div>
    </div>

    <div class="container mx-auto px-4 py-12">
        <div class="mb-6 flex flex-wrap gap-2">
            <a href="{{ route('prestasi.index') }}"
                class="px-4 py-2 {{ !request('tingkat') ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg">Semua</a>
            <a href="{{ route('prestasi.index', ['tingkat' => 'internasional']) }}"
                class="px-4 py-2 {{ request('tingkat') == 'internasional' ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg">Internasional</a>
            <a href="{{ route('prestasi.index', ['tingkat' => 'nasional']) }}"
                class="px-4 py-2 {{ request('tingkat') == 'nasional' ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg">Nasional</a>
            <a href="{{ route('prestasi.index', ['tingkat' => 'provinsi']) }}"
                class="px-4 py-2 {{ request('tingkat') == 'provinsi' ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg">Provinsi</a>
            <a href="{{ route('prestasi.index', ['tingkat' => 'kota']) }}"
                class="px-4 py-2 {{ request('tingkat') == 'kota' ? 'bg-purple-600 text-white' : 'bg-gray-200 text-gray-700' }} rounded-lg">Kota</a>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
            @forelse($prestasi as $item)
                <div class="bg-white rounded-lg shadow overflow-hidden hover:shadow-lg transition">
                    @if ($item->gambar)
                        <img src="{{ asset('storage/' . $item->gambar) }}" alt="{{ $item->nama_lomba }}"
                            class="w-full h-48 object-cover">
                    @else
                        <div
                            class="w-full h-48 bg-gradient-to-br from-yellow-400 to-orange-600 flex items-center justify-center">
                            <span class="text-8xl">🏆</span>
                        </div>
                    @endif
                    <div class="p-6">
                        <span
                            class="inline-block bg-purple-100 text-purple-800 text-xs px-2 py-1 rounded mb-2">{{ ucfirst($item->tingkat) }}</span>
                        <h3 class="text-xl font-semibold text-gray-800 mb-2">{{ $item->nama_lomba }}</h3>
                        <div class="text-2xl font-bold text-yellow-600 mb-2">{{ $item->juara }}</div>

                        @if ($item->nama_siswa)
                            <p class="text-gray-700 mb-1"><span class="font-semibold">Siswa:</span> {{ $item->nama_siswa }}
                                {{ $item->kelas ? '(' . $item->kelas . ')' : '' }}</p>
                        @endif

                        @if ($item->pembimbing)
                            <p class="text-gray-600 text-sm mb-1"><span class="font-semibold">Pembimbing:</span>
                                {{ $item->pembimbing }}</p>
                        @endif

                        <p class="text-gray-500 text-sm mb-2">{{ $item->tanggal->format('d F Y') }}</p>

                        @if ($item->penyelenggara)
                            <p class="text-gray-600 text-sm"><span class="font-semibold">Penyelenggara:</span>
                                {{ $item->penyelenggara }}</p>
                        @endif

                        @if ($item->deskripsi)
                            <p class="text-gray-600 mt-3">{{ Str::limit($item->deskripsi, 100) }}</p>
                        @endif
                    </div>
                </div>
            @empty
                <div class="col-span-3 text-center py-12 text-gray-500">Belum ada prestasi</div>
            @endforelse
        </div>

        <div class="mt-8">
            {{ $prestasi->links() }}
        </div>
    </div>
@endsection

