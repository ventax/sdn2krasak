@extends('layouts.admin')

@section('page-title', 'Manajemen Pengumuman')

@section('content')
    <div class="mb-6 flex justify-between items-center">
        <h2 class="text-2xl font-bold text-gray-800">Daftar Pengumuman</h2>
        <a href="{{ route('admin.pengumuman.create') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded-lg hover:bg-blue-700">
            + Tambah Pengumuman
        </a>
    </div>

    <div class="bg-white rounded-lg shadow overflow-hidden">
        <table class="min-w-full divide-y divide-gray-200">
            <thead class="bg-gray-50">
                <tr>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Judul</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Prioritas</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Periode</th>
                    <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Aksi</th>
                </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200">
                @forelse($pengumuman as $item)
                    <tr>
                        <td class="px-6 py-4">
                            <div class="text-sm font-medium text-gray-900">{{ $item->judul }}</div>
                            <div class="text-sm text-gray-500">{{ Str::limit($item->konten, 50) }}</div>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full
                        @if ($item->prioritas == 'urgent') bg-red-100 text-red-800
                        @elseif($item->prioritas == 'normal') bg-blue-100 text-blue-800
                        @else bg-gray-100 text-gray-800 @endif">
                                {{ ucfirst($item->prioritas) }}
                            </span>
                        </td>
                        <td class="px-6 py-4">
                            <span
                                class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $item->is_active ? 'bg-green-100 text-green-800' : 'bg-gray-100 text-gray-800' }}">
                                {{ $item->is_active ? 'Aktif' : 'Nonaktif' }}
                            </span>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500">
                            {{ $item->tanggal_mulai ? $item->tanggal_mulai->format('d M Y') : '-' }}
                            @if ($item->tanggal_selesai)
                                - {{ $item->tanggal_selesai->format('d M Y') }}
                            @endif
                        </td>
                        <td class="px-6 py-4 text-sm font-medium">
                            <a href="{{ route('admin.pengumuman.edit', $item) }}"
                                class="text-blue-600 hover:text-blue-900 mr-3">Edit</a>
                            <form action="{{ route('admin.pengumuman.destroy', $item) }}" method="POST" class="inline"
                                onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="5" class="px-6 py-4 text-center text-gray-500">Belum ada pengumuman</td>
                    </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $pengumuman->links() }}
    </div>
@endsection

