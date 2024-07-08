<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Bobot') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">ID</th>
                                <th class="border px-4 py-2">Luas Bangunan</th>
                                <th class="border px-4 py-2">Jumlah Lampu</th>
                                <th class="border px-4 py-2">Pendapatan</th>
                                <th class="border px-4 py-2">Jumlah Anggota Keluarga</th>
                                <th class="border px-4 py-2">Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($bobot as $w)
                            <tr>
                                <td class="border px-4 py-2">{{ $w -> id }}</td>
                                <td class="border px-4 py-2">{{ $w -> w1 }}</td>
                                <td class="border px-4 py-2">{{ $w -> w2 }}</td>
                                <td class="border px-4 py-2">{{ $w -> w3 }}</td>
                                <td class="border px-4 py-2">{{ $w -> w4 }}</td>
                                <td class="border px-4 py-2">
                                    <a href="{{ route('edit-bobot', $w -> id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
