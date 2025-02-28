<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
    <script src="https://unpkg.com/@tailwindcss/browser@4"></script>
</head>

<body class="bg-gray-50 min-h-screen py-12">
    <div class="max-w-md mx-auto bg-white p-8 rounded-xl shadow-md">
        <h2 class="text-2xl font-bold text-center text-purple-600 mb-8">Inscription</h2>

        <form class="space-y-6" method="POST" action="{{ route('students.store') }}">
            @csrf
            <div class="relative z-0 w-full group">
                <input type="text" name="firstName" id="firstName"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer"
                    placeholder=" " required />
                <label for="First_Name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-purple-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Prénom
                </label>
            </div>

            <div class="relative z-0 w-full group">
                <input type="text" name="lastName" id="lastName"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer"
                    placeholder=" " required />
                <label for="Last_Name"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-purple-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Nom
                </label>
            </div>

            <div class="relative z-0 w-full group">
                <input type="number" name="age" id="age"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer"
                    placeholder=" " required />
                <label for="Age"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-purple-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Âge
                </label>
            </div>

            <div class="relative z-0 w-full group">
                <input type="tel" name="phoneNumber" id="phoneNumber"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-purple-600 peer"
                    placeholder=" " required />
                <label for="phone_number"
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-purple-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">
                    Numéro de téléphone
                </label>
            </div>

            <div class="flex gap-4 pt-4">
                <button type="submit"
                    class="flex-1 text-white bg-purple-600 hover:bg-purple-700 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200 ease-in-out transform hover:scale-105">
                    Creer
                </button>
                <button type="reset"
                    class="flex-1 text-purple-600 bg-white border-2 border-purple-600 hover:bg-purple-50 focus:ring-4 focus:ring-purple-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center transition duration-200 ease-in-out transform hover:scale-105">
                    Annuler
                </button>
            </div>
        </form>
    </div>
</body>

</html>
