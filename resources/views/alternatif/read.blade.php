<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Alternatif') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <a href="{{ route('create-alternatif') }}" class="ms-0">Tambah Alternatif</a>
                    <br>
                    <br>
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Nama</th>
                                <th class="border px-4 py-2">Luas Bangunan</th>
                                <th class="border px-4 py-2">Jumlah Lampu</th>
                                <th class="border px-4 py-2">Pendapatan</th>
                                <th class="border px-4 py-2"> Jumlah Anggota Keluarga</th>
                                <th class="border px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($alternatif as $a)
                            <tr>
                                <td class="border px-4 py-2">{{ $a -> id }}</td>
                                <td class="border px-4 py-2">{{ $a -> nama }}</td>
                                <td class="border px-4 py-2">{{ $a -> luas_bangunan }}</td>
                                <td class="border px-4 py-2">{{ $a -> jumlah_penerangan }}</td>
                                <td class="border px-4 py-2">Rp. {{ $a -> pendapatan }}</td>
                                <td class="border px-4 py-2">{{ $a -> jumlah_anggota_keluarga }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('edit-alternatif', $a -> id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                    <form action="{{ route('destroy', $a->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <br>
                    <br>
                    <table class="table-auto w-full">
                        <h1>Min Max</h1>
                        <br>
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Luas Bangunan</th>
                                <th class="border px-4 py-2">Jumlah Lampu</th>
                                <th class="border px-4 py-2">Pendapatan</th>
                                <th class="border px-4 py-2"> Jumlah Anggota Keluarga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($minmax as $mm)
                            <tr>
                                <td class="border px-4 py-2">{{ $mm -> M1 }}</td>
                                <td class="border px-4 py-2">{{ $mm -> M2 }}</td>
                                <td class="border px-4 py-2">{{ $mm -> M3 }}</td>
                                <td class="border px-4 py-2">{{ $mm -> M4 }}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>