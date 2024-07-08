<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Bobot') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 border-b border-gray-200 dark:bg-gray-800 dark:text-gray-100">
                    <p>*Total bobot harus 100!</p>
                    <form method="POST" action="{{ route('update-bobot', $bobot -> id) }}">
                        @csrf
                        @method('PUT')

                        {{-- Luas Bangunan --}}
                        <div class="mb-4">
                            <label for="luas_bangunan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Luas Bangunan</label>
                            <input type="text" name="w1" id="w1" value="{{ old('w1', $bobot -> w1) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('w1')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Jumlah Penerangan --}}
                        <div class="mb-4">
                            <label for="jumlah_penerangan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah Lampu</label>
                            <input type="text" name="w2" id="w2" value="{{ old('w2', $bobot -> w2) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('w2')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Pendapatan --}}
                        <div class="mb-4">
                            <label for="pendapatan" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Pendapatan</label>
                            <input type="text" name="w3" id="w3" value="{{ old('w3', $bobot -> w3) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('w3')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Jumlah Anggota Keluarga --}}
                        <div class="mb-4">
                            <label for="jumlah_anggota_keluarga" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Jumlah Anggota Keluarga</label>
                            <input type="text" name="w4" id="w4" value="{{ old('w4', $bobot -> w4) }}" class="mt-1 block w-full border-gray-300 dark:bg-gray-700 dark:border-gray-600 dark:text-gray-100 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                            @error('w4')
                                <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                            @enderror
                        </div>
                        @if (session('error'))
                            <div class="bg-red-500 text-white p-4 rounded mb-4">
                                {{ session('error') }}
                                @if (session('total'))
                                    <div>Total Bobot : {{ session('total') }}</div>
                                @endif
                            </div>
                        @endif
                        @if (session('success'))
                            <div class="bg-green-500 text-white p-4 rounded mb-4">
                                {{ session('success') }}
                            </div>
                        @endif

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