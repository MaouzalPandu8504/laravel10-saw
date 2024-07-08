<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Normalisasi') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <table class="table-auto w-full">
                        <thead>
                            <tr>
                                <th class="border px-4 py-2">Nama</th>
                                <th class="border px-4 py-2">Luas Bangunan</th>
                                <th class="border px-4 py-2">Jumlah Lampu</th>
                                <th class="border px-4 py-2">Pendapatan</th>
                                <th class="border px-4 py-2"> Jumlah Anggota Keluarga</th>
                                <!-- Add more headers as needed -->
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($normalisasi as $n)
                            <tr>
                                <td class="border px-4 py-2">{{ $n -> nama }}</td>
                                <td class="border px-4 py-2">{{ $n -> R1 }}</td>
                                <td class="border px-4 py-2">{{ $n -> R2 }}</td>
                                <td class="border px-4 py-2">{{ $n -> R3 }}</td>
                                <td class="border px-4 py-2">{{ $n -> R4 }}</td>
                                {{-- <td class="border px-4 py-2">
                                    <a href="{{ route('alternative.edit', $alternative->id) }}" class="text-blue-600 hover:text-blue-900">Edit</a>
                                    <form action="{{ route('alternative.destroy', $alternative->id) }}" method="POST" class="inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-600 hover:text-red-900 ml-2">Delete</button>
                                    </form>
                                </td> --}}
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>