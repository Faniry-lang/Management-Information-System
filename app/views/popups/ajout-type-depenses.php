<div class="popup popIn fixed top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 w-2/3 h-5/6 z-1000 rounded-2xl md:w-1/3 p-5 md:px-15 md:py-5 flex flex-col bg-white justify-around shadow-xl">
    <a class="closePopup fixed top-5 right-5 cursor-pointer">
        <img src="/assets/icons/cross.png" alt="" class="w-3">
    </a>    
    <h2 class="text-3xl md:text-3xl font-semibold text-gray-800">Ajouter un nouveau type de depenses</h2>
    <form action="/dashboard/budget/nouveau-type-depense" method="post" class="flex flex-col gap-8">
        <div class="flex flex-col gap-3">
            <div class="flex flex-col gap-2">
                <label for="nom_type_depense" class="text-md font-semibold font-mono text-gray-700">Nom du type de la depense</label>
                <input type="text" name="nom_type_depense" id="nom_type_depense" class="px-5 py-1 border-2 border-gray-700 rounded-lg">
            </div>
        </div>
        <div class="flex flex-col">
            <input type="submit" value="Continuer" class="cursor-pointer px-5 py-2 bg-indigo-600 text-white rounded-lg">
        </div>
    </form>
</div>
<div class="overlay w-full h-full fixed top-0 left-0 bg-black opacity-20 z-500"></div>
