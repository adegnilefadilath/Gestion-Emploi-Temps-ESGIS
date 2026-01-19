@extends('layouts.app')

@section('title', 'Mon Planning')

@section('content')
    <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-indigo-900 border-l-4 border-indigo-600 pl-4">Emploi du Temps</h1>
        <a href="/mon-planning/ajouter" class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
            Ajouter un cours
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
        <table class="w-full border-collapse">
            <thead>
                <tr class="bg-indigo-50 text-indigo-900 uppercase text-sm font-semibold">
                    <th class="p-4 border-b border-r text-center">Heures</th>
                    <th class="p-4 border-b border-r text-center">Lundi</th>
                    <th class="p-4 border-b border-r text-center">Mardi</th>
                    <th class="p-4 border-b border-r text-center">Mercredi</th>
                    <th class="p-4 border-b border-r text-center text-orange-600">Jeudi</th>
                    <th class="p-4 border-b border-r text-center text-orange-600">Vendredi</th>
                    <th class="p-4 border-b text-center text-orange-600">Samedi</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                <tr class="border-b">
                    <td class="p-4 border-r font-medium text-center bg-gray-50 italic">08h - 10h</td>
                    
                    <td class="p-2 border-r min-w-[150px]">
                        <div class="bg-blue-100 p-3 rounded-lg border-l-4 border-blue-500 relative">
                            <p class="font-bold text-blue-800 text-sm">Algorithmique</p>
                            <p class="text-xs text-blue-600">Salle 102 - M. Dossou</p>
                            <a href="/mon-planning/modifier" class="absolute top-1 right-1 text-blue-400 hover:text-blue-600">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                </svg>
                            </a>
                        </div>
                    </td>

                    <td class="p-2 border-r text-center text-gray-400 italic text-xs">Libre</td>
                    <td class="p-2 border-r text-center text-gray-400 italic text-xs">Libre</td>
                    <td class="p-2 border-r text-center text-gray-400 italic text-xs">Libre</td>
                    <td class="p-2 border-r text-center text-gray-400 italic text-xs">Libre</td>
                    <td class="p-2 text-center text-gray-400 italic text-xs">Libre</td>
                </tr>
            </tbody>
        </table>
    </div>
    <div class="bg-blue-100 p-3 rounded-lg border-l-4 border-blue-500 relative">
    <p class="font-bold text-blue-800 text-sm">Algorithmique</p>
    <p class="text-xs text-blue-600">Salle 102</p>
    <p class="text-xs font-semibold text-indigo-700 mt-1 italic">Prof: M. DOSSOU</p>
</div>
@endsection