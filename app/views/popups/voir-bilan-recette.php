<div class="popup popIn fixed top-8 bottom-0 left-5 right-5 w-max-screen min-h-5/6 z-1000 rounded-2xl p-5 md:px-15 md:py-5 flex flex-col gap-2 bg-white shadow-xl">
    <a class="closePopup fixed top-5 right-5 cursor-pointer">
        <img src="/assets/icons/cross.png" alt="" class="w-3">
    </a>    
    <h2 class="text-xl md:text-2xl font-semibold text-gray-800 mb-8">Bilan du budget au fil des périodes</h2>
    <div class="flex flex-row gap-10 h-full">
        <div class="w-1/3 flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <h4 class="text-xl text-gray-600 font-semibold">Details de la recette</h4>
                <table class="min-w-full border-1 text-sm border-gray-500 text-left rounded-xl overflow-hidden shadow">
                    <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">Description</th>
                        <th class="px-4 py-2 border border-gray-300">Type</th>
                        <th class="px-4 py-2 border border-gray-300">Produit</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr class="hover:bg-gray-50 text-gray-700">
                        <td class="px-4 py-2 border border-gray-300">Bomboclat</td>
                        <td class="px-4 py-2 border border-gray-300">Bomboclat</td>
                        <td class="px-4 py-2 border border-gray-300">Bomboclat</td>
                    </tr>
                    </tbody>
                </table>
                <div class="">
                    <canvas id="recetteChart"></canvas>
                </div>
            </div>
        </div> 
        <div class="flex flex-col gap-5 w-2/3 h-4/5">
            <div class="flex flex-col gap-3 h-full">
                <h4 class="text-xl text-gray-600 font-semibold">Suivi budgétaire</h4>
                <div class="overflow-y-scroll h-full">
                    <table class="min-w-full border-1 text-sm border-gray-500 text-left rounded-xl overflow-hidden shadow">
                        <thead class="bg-gray-100">
                            <tr>
                                <th colspan="4" class="text-center px-4 py-2 border border-gray-300 font-semibold text-gray-800">Prévisions</th>
                                <th colspan="4" class="text-center px-4 py-2 border border-gray-300 font-semibold text-gray-800">Réalisations</th>
                            </tr>
                            <tr>
                                <th class="px-4 py-2 border border-gray-300">Description</th>
                                <th class="px-4 py-2 border border-gray-300">Quantité</th>
                                <th class="px-4 py-2 border border-gray-300">Montant</th>
                                <th class="px-4 py-2 border border-gray-300">Période</th>
                                <th class="px-4 py-2 border border-gray-300">Description</th>
                                <th class="px-4 py-2 border border-gray-300">Quantité</th>
                                <th class="px-4 py-2 border border-gray-300">Montant</th>
                                <th class="px-4 py-2 border border-gray-300">Période</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-gray-50 text-gray-700">
                                <td class="px-4 py-2 border border-gray-300">Prévision 1</td>
                                <td class="px-4 py-2 border border-gray-300">100</td>
                                <td class="px-4 py-2 border border-gray-300">500€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                                <td class="px-4 py-2 border border-gray-300">Réalisation 1</td>
                                <td class="px-4 py-2 border border-gray-300">90</td>
                                <td class="px-4 py-2 border border-gray-300">480€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                            </tr>
                            <tr class="hover:bg-gray-50 text-gray-700">
                                <td class="px-4 py-2 border border-gray-300">Prévision 1</td>
                                <td class="px-4 py-2 border border-gray-300">100</td>
                                <td class="px-4 py-2 border border-gray-300">500€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                                <td class="px-4 py-2 border border-gray-300">Réalisation 1</td>
                                <td class="px-4 py-2 border border-gray-300">90</td>
                                <td class="px-4 py-2 border border-gray-300">480€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                            </tr>
                            <tr class="hover:bg-gray-50 text-gray-700">
                                <td class="px-4 py-2 border border-gray-300">Prévision 1</td>
                                <td class="px-4 py-2 border border-gray-300">100</td>
                                <td class="px-4 py-2 border border-gray-300">500€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                                <td class="px-4 py-2 border border-gray-300">Réalisation 1</td>
                                <td class="px-4 py-2 border border-gray-300">90</td>
                                <td class="px-4 py-2 border border-gray-300">480€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                            </tr>
                            <tr class="hover:bg-gray-50 text-gray-700">
                                <td class="px-4 py-2 border border-gray-300">Prévision 1</td>
                                <td class="px-4 py-2 border border-gray-300">100</td>
                                <td class="px-4 py-2 border border-gray-300">500€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                                <td class="px-4 py-2 border border-gray-300">Réalisation 1</td>
                                <td class="px-4 py-2 border border-gray-300">90</td>
                                <td class="px-4 py-2 border border-gray-300">480€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                            </tr>
                            <tr class="hover:bg-gray-50 text-gray-700">
                                <td class="px-4 py-2 border border-gray-300">Prévision 1</td>
                                <td class="px-4 py-2 border border-gray-300">100</td>
                                <td class="px-4 py-2 border border-gray-300">500€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                                <td class="px-4 py-2 border border-gray-300">Réalisation 1</td>
                                <td class="px-4 py-2 border border-gray-300">90</td>
                                <td class="px-4 py-2 border border-gray-300">480€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                            </tr>
                            <tr class="hover:bg-gray-50 text-gray-700">
                                <td class="px-4 py-2 border border-gray-300">Prévision 1</td>
                                <td class="px-4 py-2 border border-gray-300">100</td>
                                <td class="px-4 py-2 border border-gray-300">500€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                                <td class="px-4 py-2 border border-gray-300">Réalisation 1</td>
                                <td class="px-4 py-2 border border-gray-300">90</td>
                                <td class="px-4 py-2 border border-gray-300">480€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                            </tr>
                            <tr class="hover:bg-gray-50 text-gray-700">
                                <td class="px-4 py-2 border border-gray-300">Prévision 1</td>
                                <td class="px-4 py-2 border border-gray-300">100</td>
                                <td class="px-4 py-2 border border-gray-300">500€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                                <td class="px-4 py-2 border border-gray-300">Réalisation 1</td>
                                <td class="px-4 py-2 border border-gray-300">90</td>
                                <td class="px-4 py-2 border border-gray-300">480€</td>
                                <td class="px-4 py-2 border border-gray-300">Janv-Mars</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="overlay w-full h-full fixed top-0 left-0 bg-black opacity-20 z-500"></div>

