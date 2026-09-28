<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Dashboard</h2>
    </x-slot>
 
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <x-card>
                <h3 class="text-lg font-semibold mb-2">Ringkasan Hari Ini</h3>
                <p class="text-gray-600">Selamat datang, {{ auth()->user()->name }}.</p>
                
                <div class="space-y-2 border-t pt-4">
                     <h4 class="font-medium text-sm text-gray-700">Contoh Status Stok Produk:</h4>
                     <div class="flex items-center space-x-3">
                        <span>Indomie:</span>
                        <x-badge status="aman">Aman</x-badge>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span>Gas 3kg:</span>
                        <x-badge status="menipis">Menipis</x-badge>
                    </div>
                    <div class="flex items-center space-x-3">
                        <span>Susu 1L:</span>
                        <x-badge status="habis">Habis</x-badge>
                    </div>
            </x-card>
        </div>
    </div>
</x-app-layout>