@extends('layouts.admin')

@section('page-title', 'Kelola Download')

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Kelola Download</h2>
        <a href="{{ route('admin.downloads.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
            + Tambah File
        </a>
    </div>

    @if (session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kategori</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">File</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Download</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Tanggal Upload</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($downloads as $item)
                    <tr>
                        <td class="px-6 py-4">{{ $item->judul }}</td>
                        <td class="px-6 py-4">
                            <span class="px-2 py-1 text-xs rounded bg-green-100 text-green-800">
                                {{ $item->kategori }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <a href="{{ asset('storage/' . $item->file_path) }}" target="_blank"
                                class="text-blue-600 hover:text-blue-800 flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20">
                                    <path
                                        d="M4 4a2 2 0 012-2h4.586A2 2 0 0112 2.586L15.414 6A2 2 0 0116 7.414V16a2 2 0 01-2 2H6a2 2 0 01-2-2V4z" />
                                </svg>
                                Lihat File
                            </a>
                        </td>
                        <td class="px-6 py-4">{{ $item->downloads_count ?? 0 }}x</td>
                        <td class="px-6 py-4">{{ $item->created_at->format('d/m/Y') }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('admin.downloads.edit', $item) }}"
                                class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('admin.downloads.destroy', $item) }}" method="POST"
                                onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="6" class="px-6 py-4 text-center text-gray-500">Belum ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $downloads->links() }}
    </div>
@endsection
