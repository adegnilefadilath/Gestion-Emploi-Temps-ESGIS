@extends('layouts.app')

@section('title', 'Modifier le cours')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-100">
    <div class="flex items-center mb-6">
        <a href="/mon-planning" class="mr-4 text-indigo-600 hover:text-indigo-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </a>
        <h2 class="text-2xl font-bold text-indigo-900">Modifier le cours</h2>
    </div>
    
    <form action="/mon-planning" method="GET" class="space-y-5">
        @csrf 

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Matière</label>
                <input type="text" name="subject" value="Algorithmique" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none mt-1">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Professeur</label>
                <input type="text" name="teacher" value="M. DOSSOU" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none mt-1">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Niveau d'étude</label>
                <select name="level" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
                    <option value="L1">Licence 1 (Tronc Commun)</option>
                    <option value="L2">Licence 2 (Tronc Commun)</option>
                    <option value="L3" selected>Licence 3</option>
                    <option value="M1">Master 1</option>
                    <option value="M2">Master 2</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Filière</label>
                <select name="major" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
                    <option value="Informatique">Informatique Générale</option>
                    <option value="AL" selected>Architecture et Logiciel (AL)</option>
                    <option value="SI">Sécurité Informatique (SI)</option>
                    <option value="SRC">Système Réseaux et Cloud Computing (SRC)</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Jour</label>
                <select name="day" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
                    <option value="Lundi" selected>Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                    <option value="Samedi">Samedi</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Salle</label>
                <input type="text" name="room" value="Salle 102" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Heure de début</label>
                <input type="time" name="start_time" value="08:00" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Heure de fin</label>
                <input type="time" name="end_time" value="10:00" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
            </div>
        </div>

        <div class="p-3 bg-indigo-50 rounded-lg border border-indigo-100">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Vacation</label>
            <div class="flex gap-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="shift" value="Jour" class="text-indigo-600" checked>
                    <span class="ml-2 text-sm text-gray-700">Cours du Jour</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="shift" value="Soir" class="text-indigo-600">
                    <span class="ml-2 text-sm text-gray-700">Cours du Soir</span>
                </label>
            </div>
        </div>

        <div class="pt-4">
            <button type="submit" class="w-full py-4 bg-green-600 text-white font-bold rounded-lg hover:bg-green-700 shadow-lg transition transform hover:scale-[1.01]">
                Mettre à jour les modifications
            </button>
        </div>
    </form>
</div>
@endsection