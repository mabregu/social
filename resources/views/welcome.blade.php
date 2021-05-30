<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Publicar estado') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <form action="{{ route('statuses.store') }}" method="post">
                    @csrf
                    <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="flex items-center justify-end mt-4">
                            <textarea name="body"
                                      cols="30"
                                      class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline"
                                      placeholder="Ingresar estado"
                            ></textarea>
                            <x-jet-button class="ml-4" id="create-status">
                                {{ __('Publicar estado') }}
                            </x-jet-button>
                            <x-jet-input-error for="body" class="mt-2" />
                        </div>
                    </div>
                </form>
        </div>
    </div>
</x-app-layout>
