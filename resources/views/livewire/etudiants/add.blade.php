<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 py-8 mb-4 bg-white shadow sm:rounded-lg sm:px-10">
                    <form method="POST" wire:submit.prevent="save">
                        <div>
                            <label for="fname" class="block text-sm font-medium leading-5 text-gray-700">Nom</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="fname" wire:model="fname" placeholder="Nom" type="text"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="lname" class="block text-sm font-medium leading-5 text-gray-700">Prénom</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="lname" wire:model="lname" placeholder="Prénom" type="text"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Sexe
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <select id="sexe" wire:model="sexe"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">--select--</option>
                                    <option value="H">Homme</option>
                                    <option value="F">Femme</option>
                                </select>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="birth" class="block text-sm font-medium leading-5 text-gray-700">Date de naissance</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="birth" wire:model="birth" placeholder="Date de naissance" type="date"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="birthLocation" class="block text-sm font-medium leading-5 text-gray-700">Lieu de naissance</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="birthLocation" wire:model="birthLocation" placeholder="Lieu de naissance" type="text"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Niveau
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <select id="grade" wire:model="classeId"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">--Select--</option>
                                    @foreach(App\Models\Classe::all() as $classe)
                                    <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Parcours
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <select id="grade" wire:model="parcourId"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">--Select--</option>
                                    @foreach(App\Models\Parcour::all() as $parcour)
                                    <option value="{{ $parcour->id }}">{{ $parcour->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Email
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="email" wire:model="email" placeholder="Email" type="email"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 ">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Phone
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="phoneStudent" wire:model="phoneStudent" placeholder="Téléphone" type="text"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 ">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="country" class="block text-sm font-medium leading-5 text-gray-700">Pays</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="country" wire:model="country" placeholder="Pays" type="text"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="adresse" class="block text-sm font-medium leading-5 text-gray-700">Adresses</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                            <textarea id="adresse" wire:model="adresse" placeholder="Adresses" type="text"
                            class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5"></textarea>
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <input id="default-checkbox" type="checkbox" wire:model="typeFormation"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Formation online?</label>
                        </div>
                        <div class="mt-6">
                            <span class="block w-full rounded-md shadow-sm">
                                <button type="submit"
                                    class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                                    Ajouter
                                </button>
                            </span>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>