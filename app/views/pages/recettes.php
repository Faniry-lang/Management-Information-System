<div class="px-10">
    <div class="flex flex-row mb-5 justify-between">
        <h2 class="text-gray-900 text-3xl">Recettes</h2>
        <a href="">
            <div class="w-fit h-fit px-3 py-2">
                <a href="#" class="open-popup" data-popup="ajout-type-recettes">
                    <div class="wiggleIconOnHover cursor-pointer flex flex-row gap-2">
                        <div class="flex items-center justify-center w-4 h-full py-1">
                            <img src="/assets/icons/cube-rough.png" alt="" class="w-full h-auto contrast-50"> 
                        </div>
                        <h3 class="text-gray-600 font-semibold">Ajouter un type de recette</h3>
                    </div>
                </a>
            </div>
        </a>
    </div>
    <div>
        <form action="/dashboard/budget/nouvelle-recette" method="post">
            <table class="min-w-full border-1 border-gray-500 text-left rounded-xl overflow-hidden shadow">
                <thead class="bg-gray-100">
                    <tr>
                        <th class="px-4 py-2 border border-gray-300">Description</th>
                        <th class="px-4 py-2 border border-gray-300">Type</th>
                        <th class="px-4 py-2 border border-gray-300">Produit</th>
                        <th class="px-4 py-2 border border-gray-300">Département</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        foreach($recettes as $recette) 
                        {
                    ?>    
                    <tr class="hover:bg-gray-50 text-gray-700">
                        <td class="px-4 py-2 border border-gray-300"><?php echo $recette["description"]; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $recette["type"]["nom"]; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $recette["produit"]["nom"]; ?></td>
                        <td class="px-4 py-2 border border-gray-300"><?php echo $recette["departement"]["nom"]; ?></td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
                <tfoot id="table-footer" class="bg-gray-50">
                    <tr class="add-row">
                        <td class="px-4 py-2 border border-gray-300">
                            <input type="text" name="recette[1][description]" placeholder="Description" class="inputs w-full px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" />
                        </td>
                        <td class="px-4 py-2 border border-gray-300">
                            <select name="recette[1][type_recette_id]" id="" class="inputs text-gray-500 w-full px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" >
                                <option value="" disabled selected>Type de recette</option>
                                <?php 
                                    foreach($typesRecette as $typeRecette) 
                                    {
                                ?>
                                <option value="<?= $typeRecette["id"] ?>"><?php echo $typeRecette["nom"]; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                        <td class="px-4 py-2 border border-gray-300">
                            <select name="recette[1][produit_id]" id="" class="inputs text-gray-500 w-full px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" >
                                <option value="" disabled selected>Produit</option>
                                <?php 
                                    foreach($produits as $produit) 
                                    {
                                ?>
                                <option value="<?= $produit["id"] ?>"><?php echo $produit["nom"]; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                        <td class="px-4 py-2 border border-gray-300">
                            <select name="recette[1][departement_id]" id="" class="inputs text-gray-500 w-full px-2 py-1 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500" >
                                <option value="" disabled selected>Département</option>
                                <?php 
                                    foreach($departements as $departement) 
                                    {
                                ?>
                                <option value="<?= $departement["id"] ?>"><?php echo $departement["nom"]; ?></option>
                                <?php
                                    }
                                ?>
                            </select>
                        </td>
                    </tr>
                    <tr class="">
                        <td colspan="3" class="px-4 py-2 border-t border-gray-300">
                            <div class="add-entry-form cursor-pointer flex flex-row gap-2">
                                <div class="flex items-center justify-center w-4 h-full py-1">
                                    <img src="/assets/icons/plus.png" alt="" class="w-full h-auto contrast-50"> 
                                </div>
                                <h3 class="text-gray-600 font-semibold">Ajouter</h3>
                            </div>
                        </td>
                    </tr>
                </tfoot>
            </table>
            <div class="flex flex-col py-3">
                <button class="w-fit h-fit px-3 py-1 rounded-xl cursor-pointer font-semibold text-sm bg-indigo-600 text-white">Enregistrer</button>
            </div>
        </form>
    </div>
</div>