@extends('layouts.app')

@section('title', 'Nouveau cours')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-100">
    <h2 class="text-2xl font-bold text-indigo-900 mb-6 text-center">Nouveau cours</h2>
    
    <form action="#" method="POST" class="space-y-5">
        @csrf 

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Nom de la matière</label>
                <input type="text" name="subject" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none mt-1" placeholder="Ex: POO">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Nom du Professeur</label>
                <input type="text" name="teacher" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none mt-1" placeholder="Ex: M. DOSSOU">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Niveau d'étude</label>
                <select name="level" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
                    <option value="L1">Licence 1 (Tronc Commun)</option>
                    <option value="L2">Licence 2 (Tronc Commun)</option>
                    <option value="L3">Licence 3</option>
                    <option value="M1">Master 1</option>
                    <option value="M2">Master 2</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Filière</label>
                <select name="major" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
                    <option value="Informatique">Informatique Générale</option>
                    <option value="AL">Architecture et Logiciel (AL)</option>
                    <option value="SI">Sécurité Informatique (SI)</option>
                    <option value="SRC">Système Réseaux et Cloud Computing (SRC)</option>
                </select>
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Jour</label>
                <select name="day" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
                    <option value="Lundi">Lundi</option>
                    <option value="Mardi">Mardi</option>
                    <option value="Mercredi">Mercredi</option>
                    <option value="Jeudi">Jeudi</option>
                    <option value="Vendredi">Vendredi</option>
                    <option value="Samedi">Samedi</option>
                </select>
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Salle</label>
                <input type="text" name="room" class="w-full p-3 border border-gray-300 rounded-lg mt-1" placeholder="Ex: Salle 0B">
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Heure de début</label>
                <input type="time" name="start_time" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Heure de fin</label>
                <input type="time" name="end_time" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
            </div>
        </div>

        <div class="p-3 bg-gray-50 rounded-lg border border-gray-200">
            <label class="block text-sm font-semibold text-gray-700 mb-2">Vacation</label>
            <div class="flex gap-6">
                <label class="inline-flex items-center">
                    <input type="radio" name="shift" value="Jour" class="text-indigo-600" checked>
                    <span class="ml-2 text-sm text-gray-700">Cours du Jour (L1-M2)</span>
                </label>
                <label class="inline-flex items-center">
                    <input type="radio" name="shift" value="Soir" class="text-indigo-600">
                    <span class="ml-2 text-sm text-gray-700">Cours du Soir (L3-M2)</span>
                </label>
            </div>
        </div>

        <div class="flex gap-4 pt-4 border-t border-gray-100">
            <a href="/mon-planning" class="w-1/2 text-center py-3 text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition font-semibold">Annuler</a>
            <button type="submit" class="w-1/2 py-3 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-700 shadow-lg transition">Enregistrer</button>
        </div>
    </form>
</div>
@endsection