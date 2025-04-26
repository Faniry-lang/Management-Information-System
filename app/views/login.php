<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= Flight::base_url() ?>">
    <link rel="stylesheet" href="/assets/css/output.css">
    <link rel="stylesheet" href="/assets/css/motion.css">
    <title>Login to Papa Sosy Inc.</title>
</head>
<body>
    <div class="w-screen h-screen flex items-center justify-center">
        <div class="popIn w-2/3 h-5/6 rounded-2xl border-1 md:w-1/3 border-gray-900 p-5 md:px-15 md:py-5 flex flex-col justify-around">
            <h2 class="text-3xl md:text-4xl font-semibold text-gray-800">Connectez vous pour démarrer vos activités</h2>
            <form action="/dashboard/budget/produits" method="get" class="flex flex-col gap-8">
                <div class="flex flex-col gap-3">
                    <div class="flex flex-col gap-2">
                        <label for="nom" class="text-md font-semibold font-mono text-gray-700">Nom d'utilisateur</label>
                        <input type="text" name="nom" id="nom" class="px-5 py-1 border-2 border-gray-700 rounded-lg">
                    </div>
                    <div class="flex flex-col gap-2">
                        <label for="mot_de_passe" class="text-md font-semibold font-mono text-gray-700">Mot de passe</label>
                        <input type="password" name="mot_de_passe" id="mot_de_passe" class="px-5 py-1 border-2 border-gray-700 rounded-lg">
                    </div>
                </div>
                <div class="flex flex-col">
                    <input type="submit" value="Continuer" class="px-5 py-2 bg-indigo-600 text-white rounded-lg">
                </div>
            </form>
        </div>
    </div>
</body>
</html>