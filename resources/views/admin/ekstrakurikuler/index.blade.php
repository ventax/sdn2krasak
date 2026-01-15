@extends('layouts.admin')

@section('page-title', 'Kelola Ekstrakurikuler')

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Kelola Ekstrakurikuler</h2>
        <a href="{{ route('admin.ekstrakurikuler.create') }}"
            class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
            + Tambah Ekstrakurikuler
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Gambar</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Nama</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Pembimbing</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jadwal</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($ekstrakurikuler as $item)
                    <tr>
                        <td class="px-6 py-4">
                            @if ($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="h-12 w-12 object-cover rounded">
                            @else
                                <div class="h-12 w-12 bg-gray-200 rounded"></div>
                            @endif
                        </td>
                        <td class="px-6 py-4">{{ $item->nama }}</td>
                        <td class="px-6 py-4">{{ $item->pembimbing }}</td>
                        <td class="px-6 py-4">{{ $item->jadwal }}</td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('admin.ekstrakurikuler.edit', $item) }}"
                                class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('admin.ekstrakurikuler.destroy', $item) }}" method="POST"
                                onsubmit="return confirm('Yakin hapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-800">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada data</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $ekstrakurikuler->links() }}
    </div>
@endsection
