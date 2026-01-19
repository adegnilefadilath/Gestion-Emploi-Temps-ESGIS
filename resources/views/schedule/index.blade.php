<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Planning ESGIS</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-50 p-6">
    <div class="max-w-6xl mx-auto">
        <div class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-bold text-indigo-900 border-l-4 border-indigo-600 pl-4">Emploi du Temps - ESGIS</h1>
            <button class="bg-indigo-600 text-white px-4 py-2 rounded-lg shadow hover:bg-indigo-700 transition">Ajouter un cours</button>
        </div>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden border border-gray-200">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-indigo-50 text-indigo-900 uppercase text-sm font-semibold">
                        <th class="p-4 border-b border-r text-center w-32">Heures</th>
                        <th class="p-4 border-b border-r text-center">Lundi</th>
                        <th class="p-4 border-b border-r text-center">Mardi</th>
                        <th class="p-4 border-b text-center">Mercredi</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <tr class="border-b">
                        <td class="p-4 border-r font-medium text-center bg-gray-50">08h - 10h</td>
                        <td class="p-2 border-r">
                            <div class="bg-blue-100 p-3 rounded-lg border-l-4 border-blue-500">
                                <p class="font-bold text-blue-800">Algorithmique</p>
                                <p class="text-xs text-blue-600">Salle 102 - M. Dossou</p>
                            </div>
                        </td>
                        <td class="p-2 border-r text-center text-gray-400 italic text-sm">Libre</td>
                        <td class="p-2">
                            <div class="bg-green-100 p-3 rounded-lg border-l-4 border-green-500">
                                <p class="font-bold text-green-800">Anglais Tech</p>
                                <p class="text-xs text-green-600">Salle 201 - Mme Gnon</p>
                            </div>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>