<div>
    <div class="py-12">
        <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="px-4 py-8 mb-4 bg-white shadow sm:rounded-lg sm:px-10">
                    <form method="POST" wire:submit.prevent="save">
                        <div>
                            <label for="email" class="block text-sm font-medium leading-5 text-gray-700">Parcour</label>
                            <div class="relative mt-1 rounded-md shadow-sm">
                                <input id="name" wire:model="name" placeholder="Nom de parcour" type="text"
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
                            <span class="block w-full rounded-md shadow-sm">
                                <button type="submit"
                                    class="flex justify-center w-full px-4 py-2 text-sm font-medium text-white transition duration-150 ease-in-out bg-gray-800 border border-transparent rounded-md hover:bg-blue-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700">
                                    Ajouter
                                </button>
                            </span>
                        </div>
                    </form>
                </div>

                @if($parcours->count() > 0)
                <table class="w-full overflow-x-auto divide-y divide-gray-200">
                    <thead class="bg-gray-50">
                        <tr>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Parcours
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Sigle
                            </th>
                            <th scope="col"
                                class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                                Actions
                            </th>
                        </tr>
                    </thead>
                    <tbody class="bg-white divide-y divide-gray-200">
                        @foreach($parcours as $parcour)
                        <tr>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="inline-flex px-2 text-xs font-semibold leading-5 text-green-800 bg-green-100 rounded-full">
                                    {{ $parcour->name }}
                                </span>
                            </td>
                            <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                                {{ $parcour->sigle }}
                            </td>
                            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                                <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                                <button wire:click="destroy({{$parcour->id}})"
                                    class="ml-2 text-red-600 hover:text-red-900">Delete</button>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <div>
                    {{ $parcours->links() }}
                </div>
                @else
                <p class="text-center text-red-600">Aucun parcour</p>
                @endif
            </div>
        </div>
    </div>
</div>