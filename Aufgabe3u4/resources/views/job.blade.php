<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text--100">
                    <form action="/dein-endpunkt" method="post">
                        <label for="job-title" class="block text-gray-700 dark:text-gray-200">Job Titel</label>
                        <input type="text" id="job-title" name="Job Titel" class="w-full px-3 py-2 mb-4 border rounded-md" placeholder="Job Titel eingeben">

                        <label for="job-description" class="block text-gray-700 dark:text-gray-200">Job Beschreibung</label>
                        <input type="text" id="job-description" name="Job Beschreibung" class="w-full px-3 py-2 mb-4 border rounded-md" placeholder="Job Beschreibung eingeben">

                        <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-md">Speichern</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>