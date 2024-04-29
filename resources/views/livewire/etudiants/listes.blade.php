<div class="py-12">
      <div class="py-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <table class="w-full divide-gray-200">
                <thead class="bg-gray-50">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Nom complet
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Date et lieu de naissance
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Status
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Formation
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Phone
                        </th>
                        <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                            Actions
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach($students as $student)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="flex items-center">
                                <div class="flex-shrink-0 w-10 h-10">
                                    @if($student->getFirstMedia('pre_inscriptions_files'))
                                    <img src="{{ $student->getFirstMedia('pre_inscriptions_files')->getUrl('pre_inscriptions_files') }}"
                                        class="w-10 h-10 rounded-full" alt="{{ $student->fname }} {{ $student->lname }}">
                                    @else
                                    <!-- Affichez une image par défaut ou un message d'erreur ici -->
                                    <img src="/default-avatar.png" class="w-10 h-10 rounded-full" alt="{{ $student->fname }} {{ $student->lname }}">
                                    @endif
                                </div>
                                <div class="ml-4">
                                    <div class="text-sm font-medium text-gray-900">
                                        {{ $student->fname }} {{ $student->lname }}
                                    </div>
                                    <div class="text-sm text-gray-500">
                                        {{ $student->classe->sigle }} {{ $student->parcour->sigle }}
                                    </div>
                                    <div class="text-sm text-gray-500">N°: {{ $student->number }}</div>
                                </div>
                            </div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div class="text-sm text-gray-900">{{ $student->birth }}</div>
                            <div class="text-sm text-gray-500">{{ $student->birthLocation }}</div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <span
                                class="inline-flex px-2 text-xs font-semibold leading-5 rounded-full @if($student->isActive) text-green-800 bg-green-200 @else text-red-800 bg-red-200 @endif">
                                @if($student->isActive) Actif @else Inactif @endif
                            </span>
                            <div class="mt-2">
                                @if($student->isActive)
                                <button wire:click="desactive({{ $student->id }})"
                                    class="px-4 py-2 text-red-600 bg-red-800 border border-red-500 rounded-md hover:bg-red-600 focus:outline-none focus:shadow-outline">
                                    Désactiver
                                </button>
                                @else
                                <button wire:click="active({{ $student->id }})"
                                    class="px-4 py-2 text-blue-600 bg-blue-800 border border-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:shadow-outline">
                                    Activer
                                </button>
                                @endif
                            </div>
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            @if($student->typeFormation) <span class="text-green-400">En ligne</span> @else En salle @endif
                        </td>
                        <td class="px-6 py-4 text-sm text-gray-500 whitespace-nowrap">
                            {{ $student->phoneStudent }}
                        </td>
                        <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                            <a href="#" class="text-indigo-600 hover:text-indigo-900">Edit</a>
                            <button class="ml-2 text-red-600 hover:text-red-900" wire:click="delete({{ $student->id }})">Delete</button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <div class="w-full">
            {{ $students->links() }}
        </div>
</div>