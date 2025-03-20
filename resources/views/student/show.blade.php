<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Détails de l'élève</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 flex items-center justify-center min-h-screen">

    <div class="bg-white shadow-lg rounded-lg p-6 max-w-lg w-full">
        <h1 class="text-2xl font-semibold text-gray-800 mb-4 text-center">Détails de l'élève</h1>

        <div class="border-b pb-4 space-y-2">
            <p class="text-lg"><span class="font-bold">Nom :</span> {{ $eleve->nom }} {{ $eleve->prenom }}</p>
            <p class="text-lg"><span class="font-bold">Numéro d'inscription :</span> {{ $eleve->numero_inscription }}</p>
            <p class="text-lg"><span class="font-bold">Classe :</span> {{ $eleve->classe }}</p>
            <p class="text-lg"><span class="font-bold">Email :</span> {{ $eleve->email }}</p>
            <p class="text-lg"><span class="font-bold">Date de naissance :</span> {{ $eleve->date_naissance }}</p>
        </div>

        <div class="mt-6 flex justify-between">
            <a href="{{ route('eleves.index') }}" class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">Retour</a>
            <a href="{{ route('eleves.edit', $eleve->id) }}" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Modifier</a>
            <form action="{{ route('eleves.destroy', $eleve->id) }}" method="POST" onsubmit="return confirm('Voulez-vous vraiment supprimer cet élève ?')">
                @csrf
                @method('DELETE')
                <button type="submit" class="px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">Supprimer</button>
            </form>
        </div>
    </div>

</body>
</html>
