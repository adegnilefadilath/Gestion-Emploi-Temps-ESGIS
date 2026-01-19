@extends('layouts.app') @section('title', 'Mon Planning') @section('content') <div class="flex justify-between items-center mb-8">
        <h1 class="text-3xl font-bold text-indigo-900 border-l-4 border-indigo-600 pl-4">Emploi du Temps</h1>
        <a href="/mon-planning/ajouter" class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition">
            Ajouter un cours
        </a>
    </div>

    <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
        <table class="w-full">
            </table>
    </div>
@endsection