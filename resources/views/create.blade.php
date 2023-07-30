<x-app-layout>
    <div class="bg-white rounded-lg shadow-lg mx-10 my-10">
        <form class="p-10 space-y-4" method="POST" action="{{ route('create') }}">
            @csrf

            <div class="flex space-x-4">
                <!-- nom -->
                <div class="w-full">
                    <x-input-label for="nom" :value="__('Nom')" />
                    <x-text-input id="nom" class="block mt-1 w-full" type="text" name="nom" :value="old('nom')" required autofocus autocomplete="nom" />
                    <x-input-error :messages="$errors->get('nom')" class="mt-2" />
                </div>
                <!-- prenom -->
                <div class="w-full">
                    <x-input-label for="prenom" :value="__('Prénom')" />
                    <x-text-input id="prenom" class="block mt-1 w-full" type="text" name="prenom" :value="old('prenom')" required autofocus autocomplete="prenom" />
                    <x-input-error :messages="$errors->get('prenom')" class="mt-2" />
                </div>
            </div>
            <!-- Probleme -->
            <div>
                <x-input-label for="problem" :value="__('problem')" />
                <x-text-input id="problem" class="block mt-1 w-full" type="text" name="problem" :value="old('problem')" required autofocus autocomplete="problem" />
                <x-input-error :messages="$errors->get('problem')" class="mt-2" />
            </div>



            <x-primary-button class="mt-6">
                {{ __('Register') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
