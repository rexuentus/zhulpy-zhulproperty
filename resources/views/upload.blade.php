<x-app-layout>
    <x-slot name="header">
        <h2 class="text-xl font-semibold leading-tight text-gray-800">
            {{ __('Upload Rumah') }}
        </h2>
    </x-slot>



    <div class="py-12">
        <div class="mx-auto space-y-6 max-w-7xl sm:px-6 lg:px-8">
            <div class="p-4 bg-white shadow sm:p-8 sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900">
                            {{ __('Upload Rumah') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600">
                            {{ __('Pastikan deskripsi rumah dan harga sesuai.') }}
                        </p>
                    </header>
                    <div class="mt-6">
                        <form action="">
                            @csrf
                            <div class="mt-4">
                                <x-input-label for="nama-rumah" :value="__('Nama Pemilik Rumah')" />
                                <x-text-input wire:model="nama-rumah" id="nama-rumah" name="nama-rumah" type="text"
                                    class="block w-full mt-1" required autofocus autocomplete="nama-rumah" />
                                <x-input-error class="mt-2" :messages="$errors->get('nama-rumah')" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="deskripsi-rumah" :value="__('Deskripsi Rumah')" />
                                <x-text-input wire:model="deskripsi-rumah" id="deskripsi-rumah" name="deskripsi-rumah"
                                    type="text" class="block w-full mt-1" required autofocus
                                    autocomplete="deskripsi-rumah" />
                                <x-input-error class="mt-2" :messages="$errors->get('deskripsi-rumah')" />
                            </div>
                            <div class="mt-4">
                                <x-input-label for="harga-rumah" :value="__('Harga Rumah')" />
                                <x-text-input wire:model="harga-rumah" id="harga-rumah" name="harga-rumah"
                                    type="number" class="block w-full mt-1" required autofocus autocomplete="100000" />
                                <x-input-error class="mt-2" :messages="$errors->get('harga-rumah')" />
                            </div>

                            <div class="mt-4">
                                <x-input-label for="foto-rumah" :value="__('Upload Foto')" />
                                <input type="file"
                                    class="w-full max-w-xs bg-transparent file-input file-input-bordered file-input-success" />
                            </div>

                            <div class="mt-8">
                                <x-primary-button class="bg-success">
                                    {{ __('Upload') }}
                                </x-primary-button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
