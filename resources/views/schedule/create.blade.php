@extends('layouts.app')

@section('title', 'Ajouter un cours')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-100">
    <h2 class="text-2xl font-bold text-indigo-900 mb-6 text-center">Nouveau cours</h2>
    
    <form action="#" method="POST" class="space-y-5">
        @csrf <div>
            <label class="block text-sm font-semibold text-gray-700">Nom de la matière</label>
            <input type="text" name="subject" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none mt-1" placeholder="Ex: Mathématiques">
        </div>
        <div>
    <label class="block text-sm font-semibold text-gray-700">Nom du Professeur</label>
    <input type="text" name="teacher" class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-indigo-500 outline-none mt-1" placeholder="Ex: M. DOSSOU">
</div>

        <div class="grid grid-cols-2 gap-4">
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
                <input type="text" name="room" class="w-full p-3 border border-gray-300 rounded-lg mt-1" placeholder="Ex: Salle 105">
            </div>
        </div>

        <div class="grid grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-semibold text-gray-700">Heure de début</label>
                <input type="time" name="start_time" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
            </div>
            <div>
                <label class="block text-sm font-semibold text-gray-700">Heure de fin</label>
                <input type="time" name="end_time" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
            </div>
        </div>

        <div class="flex gap-4 pt-4">
            <a href="/mon-planning" class="w-1/2 text-center py-3 text-gray-600 bg-gray-100 rounded-lg hover:bg-gray-200 transition">Annuler</a>
            <button type="submit" class="w-1/2 py-3 bg-indigo-600 text-white font-bold rounded-lg hover:bg-indigo-700 shadow-lg transition">Enregistrer</button>
        </div>
    </form>
</div>
@endsection