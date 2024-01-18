<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6">
                <div class="grid grid-cols-2 gap-4">
                    <div class="border p-4">
                        <h3 class="text-lg font-semibold mb-4">Jumlah Produk</h3>
                        <p class="text-3xl font-bold">{{ $totalProducts }}</p>
                    </div>
                    <div class="border p-4">
                        <h3 class="text-lg font-semibold mb-4">Jumlah Transaksi</h3>
                        <p class="text-3xl font-bold">{{ $totalTransactions }}</p>
                    </div>
                    <div class="border p-4">
                        <h3 class="text-lg font-semibold mb-4">Jumlah Pengguna</h3>
                        <p class="text-3xl font-bold">{{ $totalUsers }}</p>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
