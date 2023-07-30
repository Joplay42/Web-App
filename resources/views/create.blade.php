<x-app-layout>
    <div class="bg-white rounded-lg shadow-lg mx-10 my-10">
        <form class="p-10 space-y-4" method="POST" action="{{ route('Appointment.store') }}" enctype="multipart/form-data">
            @csrf

            <!-- prenom -->
            <div class="w-full">
                <x-input-label for="title" :value="__('Nom et prénom')" />
                <x-text-input id="title" class="block mt-1 w-full" type="text" name="title" :value="old('title')" required autofocus autocomplete="title" />
                <x-input-error :messages="$errors->get('title')" class="mt-2" />
            </div>
            
            <!-- Probleme -->
            <div>
                <x-input-label for="description" :value="__('Probleme')" />
                <x-text-input id="description" class="block mt-1 w-full" type="text" name="description" :value="old('description')" required autofocus autocomplete="description" />
                <x-input-error :messages="$errors->get('description')" class="mt-2" />
            </div>
            <div class="flex space-x-4">
                <!--Date-->
                <div>
                    <x-input-label for="date" :value="__('Date')"/>
                    <input type="date" id="date" name="date" class="mt-2">
                </div>
                <!--Time-->
                <div>
                    <x-input-label for="heure" :value="__('Heure')"/>
                    <input type="time" id="heure" name="heure" class="mt-2">
                </div>
            </div>

            <div>
                <x-input-label for="adresse" :value="__('Adresse')" />
                <x-text-input id="adresse" class="block mt-1 w-full" type="text" name="adresse" :value="old('adresse')" required autofocus autocomplete="adresse" />
                <x-input-error :messages="$errors->get('adresse')" class="mt-2" />
            </div>

            <x-primary-button class="mt-6">
                {{ __('Prendre rendez-vous') }}
            </x-primary-button>
        </form>
    </div>
</x-app-layout>
