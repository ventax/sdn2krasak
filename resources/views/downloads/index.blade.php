@extends('layouts.public')

@section('title', 'Download - ' . ($profil->nama_sekolah ?? 'Sekolah'))

@section('content')
    <div class="bg-gray-50 min-h-screen py-12">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <!-- Header -->
            <div class="text-center mb-12">
                <h1 class="text-4xl font-bold text-gray-900 mb-4">Download</h1>
                <p class="text-lg text-gray-600">Dokumen dan file yang dapat diunduh</p>
            </div>

            <!-- Filter Kategori -->
            <div class="bg-white rounded-lg shadow p-6 mb-8">
                <div class="flex flex-wrap gap-2">
                    <a href="{{ route('downloads.index') }}"
                        class="px-4 py-2 rounded-lg font-medium transition duration-200
                    {{ !request('kategori') ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        Semua
                    </a>
                    <a href="{{ route('downloads.index', ['kategori' => 'formulir']) }}"
                        class="px-4 py-2 rounded-lg font-medium transition duration-200
                    {{ request('kategori') == 'formulir' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        Formulir
                    </a>
                    <a href="{{ route('downloads.index', ['kategori' => 'dokumen']) }}"
                        class="px-4 py-2 rounded-lg font-medium transition duration-200
                    {{ request('kategori') == 'dokumen' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        Dokumen
                    </a>
                    <a href="{{ route('downloads.index', ['kategori' => 'silabus']) }}"
                        class="px-4 py-2 rounded-lg font-medium transition duration-200
                    {{ request('kategori') == 'silabus' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        Silabus
                    </a>
                    <a href="{{ route('downloads.index', ['kategori' => 'panduan']) }}"
                        class="px-4 py-2 rounded-lg font-medium transition duration-200
                    {{ request('kategori') == 'panduan' ? 'bg-blue-600 text-white' : 'bg-gray-200 text-gray-700 hover:bg-gray-300' }}">
                        Panduan
                    </a>
                </div>
            </div>

            @if ($downloads->count() > 0)
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6">
                    @foreach ($downloads as $item)
                        <div class="bg-white rounded-lg shadow-lg hover:shadow-xl transition duration-200 overflow-hidden">
                            <!-- Icon Header -->
                            <div class="bg-gradient-to-br from-blue-500 to-indigo-600 p-6 text-center">
                                <div
                                    class="inline-flex items-center justify-center w-16 h-16 bg-white bg-opacity-20 rounded-full mb-3">
                                    @php
                                        $ext = strtolower(pathinfo($item->file, PATHINFO_EXTENSION));
                                    @endphp
                                    @if ($ext == 'pdf')
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    @elseif(in_array($ext, ['doc', 'docx']))
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4zm2 6a1 1 0 011-1h6a1 1 0 110 2H7a1 1 0 01-1-1zm1 3a1 1 0 100 2h6a1 1 0 100-2H7z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    @elseif(in_array($ext, ['xls', 'xlsx']))
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path
                                                d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11 4a1 1 0 10-2 0v4a1 1 0 102 0V7zm-3 1a1 1 0 10-2 0v3a1 1 0 102 0V8zM8 9a1 1 0 00-2 0v2a1 1 0 102 0V9z" />
                                        </svg>
                                    @else
                                        <svg class="w-8 h-8 text-white" fill="currentColor" viewBox="0 0 20 20">
                                            <path fill-rule="evenodd"
                                                d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    @endif
                                </div>
                                <div class="text-white text-sm font-semibold uppercase">
                                    {{ strtoupper($ext) }}
                                </div>
                            </div>

                            <!-- Content -->
                            <div class="p-6">
                                <div class="mb-3">
                                    <span
                                        class="inline-block px-3 py-1 text-xs font-semibold rounded-full
                                    {{ $item->kategori == 'formulir'
                                        ? 'bg-blue-100 text-blue-800'
                                        : ($item->kategori == 'dokumen'
                                            ? 'bg-green-100 text-green-800'
                                            : ($item->kategori == 'silabus'
                                                ? 'bg-purple-100 text-purple-800'
                                                : 'bg-yellow-100 text-yellow-800')) }}">
                                        {{ ucfirst($item->kategori) }}
                                    </span>
                                </div>

                                <h3 class="text-lg font-bold text-gray-900 mb-2 line-clamp-2">{{ $item->judul }}</h3>
                                <p class="text-gray-600 text-sm mb-4 line-clamp-2">{{ $item->deskripsi }}</p>

                                <div class="flex items-center justify-between text-xs text-gray-500 mb-4">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 mr-1" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                        </svg>
                                        {{ $item->downloads ?? 0 }}x
                                    </div>
                                    <div>
                                        {{ $item->created_at->format('d M Y') }}
                                    </div>
                                </div>

                                <a href="{{ route('downloads.download', $item->id) }}"
                                    class="block w-full bg-blue-600 hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg transition duration-200 text-center">
                                    <svg class="w-4 h-4 inline-block mr-2" fill="none" stroke="currentColor"
                                        viewBox="0 0 24 24">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M4 16v1a3 3 0 003 3h10a3 3 0 003-3v-1m-4-4l-4 4m0 0l-4-4m4 4V4" />
                                    </svg>
                                    Download
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>

                <!-- Pagination -->
                <div class="mt-8">
                    {{ $downloads->links() }}
                </div>
            @else
                <div class="bg-white rounded-lg shadow-lg p-12 text-center">
                    <svg class="w-16 h-16 text-gray-400 mx-auto mb-4" fill="none" stroke="currentColor"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M7 21h10a2 2 0 002-2V9.414a1 1 0 00-.293-.707l-5.414-5.414A1 1 0 0012.586 3H7a2 2 0 00-2 2v14a2 2 0 002 2z" />
                    </svg>
                    <h3 class="text-xl font-semibold text-gray-900 mb-2">Belum Ada File</h3>
                    <p class="text-gray-600">Tidak ada file yang tersedia untuk diunduh</p>
                </div>
            @endif

            <!-- Info Box -->
            <div class="mt-12 bg-blue-50 border-l-4 border-blue-400 p-6 rounded-lg">
                <div class="flex">
                    <div class="flex-shrink-0">
                        <svg class="h-6 w-6 text-blue-400" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="ml-3">
                        <h3 class="text-sm font-medium text-blue-800">Informasi Download</h3>
                        <div class="mt-2 text-sm text-blue-700">
                            <ul class="list-disc list-inside space-y-1">
                                <li>Semua file dapat diunduh secara GRATIS</li>
                                <li>Pastikan perangkat Anda memiliki aplikasi pembaca file (PDF Reader, MS Office, dll)</li>
                                <li>Jika mengalami kesulitan, silakan hubungi bagian Tata Usaha</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

