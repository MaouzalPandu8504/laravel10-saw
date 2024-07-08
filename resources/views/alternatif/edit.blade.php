<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Alternatif') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200 dark:bg-gray-800 dark:text-gray-100">
                    <form method="POST" action="{{ route('update-alternatif', $alternatif -> id) }}">
                        @csrf
                        @method('PUT')

                        {{-- Nama --}}
                        <div class="mb-4">
                            <label for="nama" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Nama</label>
                            <input type="text" name="nama" id="nama" value="{{ old('nama', $alternatif->nama) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('nama')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Luas Bangunan --}}
                        <div class="mb-4">
                            <label for="luas_bangunan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Luas Bangunan</label>
                            <input type="text" name="luas_bangunan" id="luas_bangunan" value="{{ old('luas_bangunan', $alternatif -> luas_bangunan) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('luas_bangunan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Jumlah Penerangan --}}
                        <div class="mb-4">
                            <label for="jumlah_penerangan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Luas Bangunan</label>
                            <input type="text" name="jumlah_penerangan" id="jumlah_penerangan" value="{{ old('jumlah_penerangan', $alternatif -> jumlah_penerangan) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('jumlah_penerangan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pendapatan --}}
                        <div class="mb-4">
                            <label for="pendapatan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Luas Bangunan</label>
                            <input type="text" name="pendapatan" id="pendapatan" value="{{ old('pendapatan', $alternatif -> pendapatan) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('pendapatan')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Jumlah Anggota Keluarga --}}
                        <div class="mb-4">
                            <label for="jumlah_anggota_keluarga" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Luas Bangunan</label>
                            <input type="text" name="jumlah_anggota_keluarga" id="jumlah_anggota_keluarga" value="{{ old('jumlah_anggota_keluarga', $alternatif -> jumlah_anggota_keluarga) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('jumlah_anggota_keluarga')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="flex items-center justify-end">
                            <button type="submit" class="ml-4 inline-flex items-center px-4 py-2 bg-blue-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-blue-700 active:bg-blue-700 focus:outline-none focus:border-blue-700 focus:ring ring-blue-300 disabled:opacity-25 transition ease-in-out duration-150">
                                Update
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>