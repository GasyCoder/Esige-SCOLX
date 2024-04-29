<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 py-8 mb-4 bg-white shadow sm:rounded-lg sm:px-10">
                    <form method="POST" wire:submit.prevent="save">
                        <div>
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Nom de matière</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="name" wire:model="name" placeholder="Nom de matiere" type="text"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5">
                            </div>
                        </div>
                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Sigle
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="sigle" wire:model="sigle" placeholder="Abreviation" type="text"
                                    class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 ">
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Classe
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <select id="classe_id" wire:model="classe_id"
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                    <option value="">--select--</option>
                                    @foreach(App\Models\Classe::all() as $classe)
                                    <option value="{{ $classe->id }}">{{ $classe->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                         <div class="flex items-center mt-4">
                            <input id="default-checkbox" type="checkbox" wire:model="commun"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Tron commun?</label>
                        </div>
                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Parcour
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <select id="parcour_id" wire:model="parcour_id" multiple
                                    class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                @foreach(App\Models\Parcour::all() as $parcour)
                                <option value="{{ $parcour['id'] }}">{{ $parcour['name'] }}</option>
                                @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="mt-6">
                            <label for="sigle" class="block text-sm font-medium leading-5 text-gray-700">
                                Note
                            </label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <textarea id="note" wire:model="note" class="block w-full px-3 py-2 placeholder-gray-400 transition duration-150 ease-in-out border border-gray-300 rounded-md appearance-none focus:outline-none focus:shadow-outline-blue focus:border-blue-300 sm:text-sm sm:leading-5 "></textarea>
                            </div>
                        </div>
                        <div class="flex items-center mt-4">
                            <input id="default-checkbox" type="checkbox" wire:model="is_active"
                                class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                            <label for="default-checkbox" class="text-sm font-medium text-gray-900 ms-2 dark:text-gray-300">Activer</label>
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
        <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
                @if($matieres->count() > 0)
                <table class="w-full overflow-x-auto divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Matiere
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Tronc commun
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Classe
                            </th>
                            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Parcours
                            </th>
                            <th></th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($matieres as $matiere)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                    {{ $matiere->name }}
                                </span><br>
                                @if($matiere->teacher)
                                <small>{{ $matiere->teacher->fullname }}</small>
                                @else
                                <!-- Affichez un message d'erreur ou de remplacement ici -->
                                <small class="text-red-600">Aucun professeur assigné</small>
                                @endif
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                @if($matiere->commun == true ) Oui @else Non @endif
                            </td>
                            <td>{{ $classe['sigle'] }}</td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                @foreach($matiere->parcours as $parcour)
                                <li>{{ $parcour['name'] }}</li>
                                @endforeach
                            </td>
                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                <button type="button" wire:click="edit({{ $matiere->id }})" onclick="toggleModal()" class="text-indigo-600 hover:text-indigo-900">
                                    Add teacher
                                </button>
                            </td>
                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <button wire:click="destroy({{$matiere->id}})" class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $matieres->links() }}
                </div>
                @else
                <p class="text-center text-red-600">Aucun matieres</p>
                @endif
        </div>
    </div>            
    @include('livewire.matieres.modal.add-teacher')
</div>