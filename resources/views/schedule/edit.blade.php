@extends('layouts.app')

@section('title', 'Modifier un cours')

@section('content')
<div class="max-w-2xl mx-auto bg-white p-8 rounded-xl shadow-md border border-gray-100">
    <div class="flex items-center gap-2 mb-6">
        <a href="/mon-planning" class="text-indigo-600 hover:text-indigo-800">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18" />
            </svg>
        </a>
        <h2 class="text-2xl font-bold text-indigo-900">Modifier le cours</h2>
    </div>
    
    <form action="#" method="POST" class="space-y-5">
        @csrf
        @method('PUT') <div>
            <label class="block text-sm font-semibold text-gray-700">Matière</label>
            <input type="text" name="subject" value="Algorithmique" class="w-full p-3 border border-gray-300 rounded-lg bg-gray-50 focus:ring-2 focus:ring-indigo-500 outline-none mt-1">
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
                <input type="text" name="room" value="Salle 102" class="w-full p-3 border border-gray-300 rounded-lg mt-1">
            </div>
        </div>

        <div class="flex gap-4 pt-4">
            <a href="/mon-planning" class="w-full block text-center py-3 bg-green-600 text-white font-bold rounded-lg">
    Mettre à jour les modifications
</a>
        </div>
    </form>
</div>
@endsection