@extends('layouts.admin')

@section('page-title', 'Kelola Fasilitas')

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Kelola Fasilitas</h2>
        <a href="{{ route('admin.fasilitas.create') }}" class="bg-blue-500 hover:bg-blue-600 text-white px-6 py-2 rounded-lg">
            + Tambah Fasilitas
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
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Jumlah</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Kondisi</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($fasilitas as $item)
                    <tr>
                        <td class="px-6 py-4">
                            @if ($item->gambar)
                                <img src="{{ asset('storage/' . $item->gambar) }}" class="h-12 w-12 object-cover rounded">
                            @else
                                <div class="h-12 w-12 bg-gray-200 rounded"></div>
                            @endif
                        </td>
                        <td class="px-6 py-4">{{ $item->nama }}</td>
                        <td class="px-6 py-4">{{ $item->jumlah }}</td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 py-1 text-xs rounded {{ $item->kondisi == 'baik' ? 'bg-green-100 text-green-800' : 'bg-yellow-100 text-yellow-800' }}">
                                {{ ucfirst($item->kondisi) }}
                            </span>
                        </td>
                        <td class="px-6 py-4 flex space-x-2">
                            <a href="{{ route('admin.fasilitas.edit', $item) }}"
                                class="text-blue-600 hover:text-blue-800">Edit</a>
                            <form action="{{ route('admin.fasilitas.destroy', $item) }}" method="POST"
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
        {{ $fasilitas->links() }}
    </div>
@endsection
