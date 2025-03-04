<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Students List</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Ajout de la police Google Poppins -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Poppins', sans-serif;
        }
    </style>
</head>

<body class="bg-gradient-to-br from-blue-50 to-indigo-100 min-h-screen p-8">
    <div class="max-w-6xl mx-auto">
        <!-- En-tête stylisé -->
        <div class="flex items-center justify-between mb-8">
            <h2
                class="text-4xl font-bold text-indigo-800 bg-clip-text text-transparent bg-gradient-to-r from-indigo-600 to-purple-600">
                Students List
            </h2>
            <div class="bg-white p-2 rounded-lg shadow-md">
                <span class="text-sm font-medium text-indigo-600">Total Students: {{ count($personnes) }}</span>
            </div>
        </div>

        <!-- Tableau avec design amélioré -->
        <div class="bg-white rounded-xl shadow-xl overflow-hidden">
            <table class="min-w-full divide-y divide-indigo-100">
                <thead class="bg-gradient-to-r from-indigo-600 to-purple-600">
                    <tr>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            First Name
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Last Name
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Age
                        </th>
                        <th class="px-6 py-4 text-left text-xs font-semibold text-white uppercase tracking-wider">
                            Sex
                        </th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-indigo-50">
                    @foreach ($personnes as $person)
                        <tr class="hover:bg-indigo-50 transition-all duration-300">
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-indigo-900">{{ $person['nom'] }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <div class="text-sm font-medium text-indigo-900">{{ $person['prenom'] }}</div>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span class="px-3 py-1 text-sm text-indigo-600 bg-indigo-100 rounded-full">
                                    {{ $person['age'] }}
                                </span>
                            </td>
                            <td class="px-6 py-4 whitespace-nowrap">
                                <span
                                    class="px-3 py-1 text-sm rounded-full
                                {{ $person['sexe'] == 'Masculin' ? 'bg-blue-100 text-blue-600' : 'bg-pink-100 text-pink-600' }}">
                                    {{ $person['sexe'] }}
                                </span>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        <!-- Footer avec pagination ou informations supplémentaires -->
        <div class="mt-6 flex justify-end">
            <div class="bg-white px-4 py-3 rounded-lg shadow-md text-sm text-indigo-600">
                <span class="font-medium">Updated:</span> {{ date('d M Y') }}
            </div>
        </div>
    </div>
</body>

</html>
