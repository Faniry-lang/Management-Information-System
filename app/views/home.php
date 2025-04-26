<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <base href="<?= Flight::base_url() ?>">
    <link rel="stylesheet" href="/assets/css/output.css">
    <title>Document</title>
</head>
<body>
    <div class="fixed top-0 left-0 w-full border-b border-gray-600 h-12 flex justify-between py-2 px-4 md:px-10 font-mono font-semibold bg-white z-10 navbar">
        <p class="font-sans text-gray-900 flex justify-between gap-2 text-lg md:text-2xl"><img src="assets/icons/workflow-alt.png" alt="" class="w-6 h-6 my-auto"> Papa sosy Inc.</p>
        <div class="flex gap-2">
            <a href="login"><button class="w-fit h-fit py-1 px-3 md:px-5 bg-indigo-500 hover:cursor-pointer hover:bg-gray-100 hover:border hover:border-gray-900 hover:text-gray-900 rounded-lg text-white text-sm md:text-base">Log in</button></a>
        </div>
    </div>
    
    <div class="w-full h-fit min-h-screen bg-white p-8 md:p-10 lg:p-15 pt-16 md:pt-20 flex flex-col lg:flex-row justify-between gap-6 md:gap-10">
        <div class="w-full lg:w-1/3 h-full mx-auto">  
            <div class="w-full h-full flex flex-col justify-between gap-8 md:gap-12">
                <div class="w-full flex flex-col gap-2">
                    <h1 class="text-gray-900 font-semibold text-5xl md:text-5xl lg:text-6xl">Gérez les activités de votre entreprise.</h1>
                </div>
                <div class="w-full flex flex-col justify-center md:flex-row md:justify-between lg:justify-around gap-6 md:gap-10">
                    <div class="w-full md:w-1/2 h-full text-sm">
                        <div class="flex gap-2 md:flex-col">
                            <img src="assets/icons/budgeting.gif" alt="" class="w-10 h-10 md:w-12 md:h-12">
                            <h3 class="font-mono font-semibold text-2xl md:text-2xl my-3 md:my-5 text-gray-700"> Commencer à planifier</h3>
                        </div>
                        <h4 class="font-sans text-gray-500 text-sm md:text-md lg:text-md">
                            Suivez vos dépenses et revenus en temps réel.
                        </h4>
                    </div>
                    <div class="w-full md:w-1/2 h-full">
                        <div class="flex gap-2 md:flex-col">
                            <img src="assets/icons/organization.gif" alt="" class="w-10 h-10 md:w-12 md:h-12">
                            <h3 class="font-mono font-semibold text-2xl md:text-2xl my-3 md:my-5 text-gray-700"> Anticiper et simuler</h3>
                        </div>
                        <h4 class="font-sans text-gray-500 text-sm md:text-md lg:text-md">
                            Analysez les performances commerciales avant de passer à l'action.
                        </h4>
                    </div>
                </div>
            </div>
        </div>
        <div class="w-full lg:w-2/3 mx-auto mt-6 lg:mt-0">            
            <img src="assets/img/reunion.jpg" alt="Management illustration" class="w-full">
        </div>
    </div>

    <div class="w-full h-fit min-h-screen bg-white p-8 md:p-10 lg:p-16 flex flex-col lg:flex-row justify-between gap-12 overflow-hidden">
        <div class="w-full lg:w-1/2 h-full flex flex-col justify-between gap-8 md:gap-12">
            <div class="w-full flex flex-col gap-2">
            <p class="font-sans text-black text-xl font-light">Système de gestion budgétaire</p>
            <h1 class="text-gray-900 font-semibold text-3xl md:text-4xl lg:text-5xl leading-tight">Gérez votre budget d'entreprise facilement</h1>
            </div>
            <div class="w-full flex flex-col md:flex-row gap-6 md:gap-10">
            <div class="w-full md:w-1/2 flex flex-col justify-between">
                <div class="flex items-center gap-2 md:flex-col md:items-start">
                <img src="assets/icons/rocket.gif" alt="" class="w-10 h-10 md:w-12 md:h-12">
                <h3 class="font-mono font-semibold text-2xl my-3 text-gray-700">Optimiser les coûts</h3>
                </div>
                <p class="font-sans text-gray-500 text-sm md:text-md">
                Identifiez les économies potentielles et réduisez vos dépenses opérationnelles.
                Repérez facilement les coûts inutiles
                </p>
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-between">
                <div class="flex items-center gap-2 md:flex-col md:items-start">
                <img src="assets/icons/notebook.gif" alt="" class="w-10 h-10 md:w-12 md:h-12">
                <h3 class="font-mono font-semibold text-2xl my-3 text-gray-700">Établir des prévisions</h3>
                </div>
                <p class="font-sans text-gray-500 text-sm md:text-md">
                Projetez vos résultats financiers et planifiez avec confiance.
                Anticipez vos besoins futurs et adaptez votre stratégie en temps réel.
                </p>
            </div>
            </div>
        </div>

        <div class="w-full lg:w-1/2 h-full flex flex-col justify-between gap-8 md:gap-12">
            <div class="w-full flex flex-col gap-2">
            <p class="font-sans text-black text-xl font-light">Dashboard marketing & CRM</p>
            <h1 class="text-gray-900 font-semibold text-3xl md:text-4xl lg:text-5xl leading-tight">Pilotez votre entreprise avec précision</h1>
            </div>
            <div class="w-full flex flex-col md:flex-row gap-6 md:gap-10">
            <div class="w-full md:w-1/2 flex flex-col justify-between">
                <div class="flex items-center gap-2 md:flex-col md:items-start">
                <img src="assets/icons/promotion.gif" alt="" class="w-10 h-10 md:w-12 md:h-12">
                <h3 class="font-mono font-semibold text-2xl my-3 text-gray-700">Simulez vos actions commerciales</h3>
                </div>
                <p class="font-sans text-gray-500 text-sm md:text-md">
                Testez différents scénarios clients et anticipez les réponses du marché grâce à notre module CRM intelligent.
                </p>
            </div>
            <div class="w-full md:w-1/2 flex flex-col justify-between">
                <div class="flex items-center gap-2 md:flex-col md:items-start">
                <img src="assets/icons/sale.gif" alt="" class="w-10 h-10 md:w-12 md:h-12">
                <h3 class="font-mono font-semibold text-2xl my-3 text-gray-700">Analysez vos ventes en un coup d'œil</h3>
                </div>
                <p class="font-sans text-gray-500 text-sm md:text-md">
                Visualisez vos indicateurs clés et prenez des décisions éclairées grâce à des statistiques de ventes claires et dynamiques.
                </p>
            </div>
            </div>
        </div>
    </div>


<div class="w-full h-fit min-h-screen bg-white p-8 md:p-10 lg:p-15 flex flex-col lg:flex-row justify-between gap-6 md:gap-10 overflow-hidden">
    <div class="w-full lg:w-1/3 h-full mx-auto">  
        <div class="w-full h-full flex flex-col justify-between gap-8 md:gap-12">
            <div class="w-full flex flex-col gap-2">
                <p class="font-sans text-black text-xl font-light">Outils de pilotage d’activité</p>
                <h1 class="text-gray-900 font-semibold text-3xl md:text-5xl lg:text-6xl">Prenez des décisions éclairées</h1>
            </div>
            <div class="w-full flex flex-col justify-center md:flex-row md:justify-between lg:justify-around gap-6 md:gap-10">
                <div class="w-full h-full text-sm">
                    <h3 class="font-mono font-semibold text-2xl md:text-2xl my-3 md:my-5 text-gray-700">Anticipez et ajustez vos stratégies</h3>
                    <h4 class="font-sans text-gray-500 text-sm md:text-md lg:text-md">
                        Expérimentez divers scénarios et adaptez votre organisation en fonction des résultats obtenus.
                    </h4>
                </div>
            </div>
        </div>
    </div>
    <div class="w-full lg:w-2/3 mx-auto mt-6 lg:mt-0 min-h-screen relative">
        <img src="assets/img/finance.jpg" alt="Management illustration" class="w-full">
    </div>
</div>

<footer class="w-full bg-gray-100 text-gray-700 py-8 px-6 md:px-12 border-t border-gray-300">
  <div class="max-w-screen-xl mx-auto flex flex-col md:flex-row justify-between items-center gap-4 md:gap-10 text-center md:text-left">
    <div class="text-sm font-sans">
      © 2025 Papa sosy Inc. Tous droits réservés.
    </div>
    <div class="text-sm font-sans">
      Icônes par <a href="https://www.flaticon.com" class="text-indigo-500 hover:underline" target="_blank" rel="noopener noreferrer">Flaticon</a> &amp; images par <a href="https://www.freepik.com" class="text-indigo-500 hover:underline" target="_blank" rel="noopener noreferrer">Freepik</a>.
    </div>
  </div>
</footer>

</body>
</html>