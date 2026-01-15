@extends('layouts.public')

@section('title', 'Kalender Akademik - ' . ($profil->nama_sekolah ?? 'Sekolah'))

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Kalender Akademik</h1>
                <p class="text-lg text-gray-600">Jadwal kegiatan dan agenda sekolah</p>
            </div>

            <!-- Filter Bulan -->
            <div class="bg-white rounded-lg shadow p-6 mb-8">
                <form method="GET" class="flex flex-wrap items-end gap-4">
                    <div class="flex-1 min-w-[200px]">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Bulan</label>
                        <select name="bulan"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                            @for ($m = 1; $m <= 12; $m++)
                                <option value="{{ $m }}"
                                    {{ request('bulan', date('n')) == $m ? 'selected' : '' }}>
                                    {{ \Carbon\Carbon::create()->month($m)->format('F') }}
                                </option>
                            @endfor
                        </select>
                    </div>
                    <div class="flex-1 min-w-[200px]">
                        <label class="block text-sm font-medium text-gray-700 mb-2">Tahun</label>
                        <select name="tahun"
                            class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500">
                            @for ($y = date('Y') - 1; $y <= date('Y') + 1; $y++)
                                <option value="{{ $y }}"
                                    {{ request('tahun', date('Y')) == $y ? 'selected' : '' }}>{{ $y }}</option>
                            @endfor
                        </select>
                    </div>
                    <button type="submit"
                        class="bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-6 rounded-lg transition duration-200">
                        Filter
                    </button>
                    <a href="{{ route('kalender.index') }}"
                        class="bg-gray-200 hover:bg-gray-300 text-gray-800 font-semibold py-2 px-6 rounded-lg transition duration-200">
                        Reset
                    </a>
                </form>
            </div>

            @if ($kalender->count() > 0)
                <!-- List Kegiatan -->
                <div class="space-y-6">
                    @foreach ($kalender as $item)
                        <div class="bg-white rounded-lg shadow-lg overflow-hidden hover:shadow-xl transition duration-200">
                            <div class="md:flex">
                                <!-- Date Box -->
                                <div
                                    class="md:flex-shrink-0 bg-gradient-to-br from-blue-500 to-indigo-600 p-6 md:w-48 flex md:flex-col items-center justify-center text-white">
                                    <div class="text-center">
                                        <div class="text-4xl font-bold">
                                            {{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('d') }}</div>
                                        <div class="text-lg font-semibold mt-1">
                                            {{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('F') }}</div>
                                        <div class="text-sm opacity-90">
                                            {{ \Carbon\Carbon::parse($item->tanggal_mulai)->format('Y') }}</div>
                                        @if ($item->tanggal_selesai && $item->tanggal_mulai != $item->tanggal_selesai)
                                            <div class="text-xs mt-2 opacity-75">s/d</div>
                                            <div class="text-2xl font-bold mt-1">
                                                {{ \Carbon\Carbon::parse($item->tanggal_selesai)->format('d M') }}</div>
                                        @endif
                                    </div>
                                </div>

                                <!-- Content -->
                                <div class="p-6 flex-1">
                                    <div class="flex items-start justify-between">
                                        <div class="flex-1">
                                            <div class="flex items-center gap-2 mb-2">
                                                <span
                                                    class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold
                                                {{ $item->jenis == 'libur'
                                                    ? 'bg-red-100 text-red-800'
                                                    : ($item->jenis == 'ujian'
                                                        ? 'bg-yellow-100 text-yellow-800'
                                                        : ($item->jenis == 'kegiatan'
                                                            ? 'bg-green-100 text-green-800'
                                                            : 'bg-blue-100 text-blue-800')) }}">
                                                    @if ($item->jenis == 'libur')
                                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M5 2a1 1 0 011 1v1h1a1 1 0 010 2H6v1a1 1 0 01-2 0V6H3a1 1 0 010-2h1V3a1 1 0 011-1zm0 10a1 1 0 011 1v1h1a1 1 0 110 2H6v1a1 1 0 11-2 0v-1H3a1 1 0 110-2h1v-1a1 1 0 011-1zM12 2a1 1 0 01.967.744L14.146 7.2 17.5 9.134a1 1 0 010 1.732l-3.354 1.935-1.18 4.455a1 1 0 01-1.933 0L9.854 12.8 6.5 10.866a1 1 0 010-1.732l3.354-1.935 1.18-4.455A1 1 0 0112 2z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    @elseif($item->jenis == 'ujian')
                                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M9 2a1 1 0 000 2h2a1 1 0 100-2H9z" />
                                                            <path fill-rule="evenodd"
                                                                d="M4 5a2 2 0 012-2 3 3 0 003 3h2a3 3 0 003-3 2 2 0 012 2v11a2 2 0 01-2 2H6a2 2 0 01-2-2V5zm9.707 5.707a1 1 0 00-1.414-1.414L9 12.586l-1.293-1.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    @else
                                                        <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                                            <path fill-rule="evenodd"
                                                                d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z"
                                                                clip-rule="evenodd" />
                                                        </svg>
                                                    @endif
                                                    {{ ucfirst($item->jenis) }}
                                                </span>
                                            </div>
                                            <h2 class="text-2xl font-bold text-gray-900 mb-2">{{ $item->judul }}</h2>
                                            <p class="text-gray-600 mb-3">{{ $item->deskripsi }}</p>

                                            @if ($item->lokasi)
                                                <div class="flex items-center text-sm text-gray-500 mb-2">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                                                    </svg>
                                                    {{ $item->lokasi }}
                                                </div>
                                            @endif

                                            @if ($item->waktu)
                                                <div class="flex items-center text-sm text-gray-500">
                                                    <svg class="w-4 h-4 mr-2" fill="none" stroke="currentColor"
                                                        viewBox="0 0 24 24">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            stroke-width="2"
                                                            d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                    </svg>
                                                    {{ $item->waktu }}
                                                </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    {{ $kalender->links() }}
                </div>
            @else
                <div class="bg-white rounded-lg shadow-lg p-12 text-center">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada Kegiatan</h3>
                    <p class="text-gray-600">Tidak ada kegiatan terjadwal untuk periode yang dipilih</p>
                </div>
            @endif
        </div>
    </div>
@endsection

