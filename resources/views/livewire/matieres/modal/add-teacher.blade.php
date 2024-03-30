<div wire:ignore class="flex items-center justify-center h-screen">
    <!-- Modal -->
    <div id="modal" class="fixed inset-0 z-50 hidden overflow-y-auto bg-white bg-opacity-50">
        <div class="flex items-center justify-center h-full">
            <div class="p-8 bg-white rounded-lg mini-w-full">
                <!-- En-tête du modal -->
                <div class="flex items-center justify-between mb-4">
                    <button class="text-gray-500 hover:text-gray-700 focus:outline-none" onclick="toggleModal()">
                        <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <!-- Formulaire du modal -->
                <form wire:submit.prevent="updateTeacher">
                    <div class="mb-4">
                        <label for="teacherCurrent" class="block mb-2 font-bold text-gray-700">Enseignant actuel:</label>
                        <input type="text" id="teacherCurrent" readonly wire:model="teacherCurrent"
                            class="w-full px-3 py-2 leading-tight text-gray-700 border rounded shadow appearance-none focus:outline-none focus:shadow-outline">
                    </div>
                    <div class="mb-4">
                        <label for="teacher_id" class="block mb-2 font-bold text-gray-700">Enseignant:</label>
                       <select id="teacher_id" wire:model="teacher_id"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected>--select--</option>
                        @foreach(App\Models\Teacher::all() as $teacher)
                        <option value="{{ $teacher->id }}">{{ $teacher->fullname }}</option>
                        @endforeach
                    </select>
                    </div>
                    <div class="flex justify-end">
                        <button type="submit"
                            class="px-4 py-2 font-bold text-white bg-gray-800 rounded hover:bg-blue-700 focus:outline-none focus:shadow-outline">
                           Confirmer
                        </button>
                    </div>
                </form>
        </div>
    </div>
</div>

<script>
    function toggleModal() {
            const modal = document.getElementById('modal');
            modal.classList.toggle('hidden');
        }
</script>