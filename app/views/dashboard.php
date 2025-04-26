<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/assets/css/output.css">
    <link rel="stylesheet" href="/assets/css/motion.css">
    <title>Dashboard</title>
</head>
<body>
    <div class="flex w-screen h-screen p-3 bg-indigo-200">
        <div class="w-1/5 h-screen flex flex-col gap-5 border-r-2 border-gray-200 fixed top-3 left-3 z-100 py-2 bg-white rounded-l-2xl">
            <div class="flex flex-col gap-2">
                <div class="flex flex-row gap-2 px-5">
                    <div class="flex items-center justify-center w-6 h-full">
                        <img src="/assets/icons/circle-user.png" alt="" class="w-full h-auto contrast-50">
                    </div>
                    <div class="flex flex-col">
                        <h3 class="font-semibold text-lg text-gray-700">User</h3>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-2 px-5">
                <div id="workspace-drop-down" class="cursor-pointer flex flex-row justify-between py-2 px-5 bg-gray-100 rounded-lg">
                    <div class="wiggleIconOnHover flex flex-row gap-2">
                        <div class="flex items-center justify-center w-5 h-full">
                            <img src="/assets/icons/suitcase.png" alt="" class="w-full h-auto">
                        </div>
                        <div class="">
                            <h4 class="text-md font-semibold text-gray-900">Marketing</h4>
                        </div>
                    </div>
                    <div class="flex items-center justify-center w-3 h-full">
                        <img id="drop-down-icon" src="/assets/icons/arrow-down.png" alt="" class="w-full h-auto">
                    </div>
                </div>
                <div id="drop-down-menu" class="hidden fixed top-28 w-fit bg-white shadow-xl rounded-xl h-fit p-2">
                    <div class="flex flex-col px-2">
                        <h3 class="text-gray-900 text-md font-semibold py-2">Activités</h3>
                    </div>
                    <a href="/dashboard/crm/produits">
                        <div id="crm-option" class="wiggleIconOnHover cursor-pointer flex flex-row gap-2 p-2 rounded-lg hover:bg-gray-100 text-gray-900 font-mono">
                            <div class="flex items-center justify-center w-5 h-full">
                                <img src="/assets/icons/megaphone.png" alt="" class="w-full h-auto">
                            </div>
                            <div class="flex items-center">
                                <h4 class="text-sm text-gray-600">Simulation CRM</h4>
                            </div>
                        </div>
                    </a>    
                    <a href="/dashboard/budget/produits">
                        <div id="budget-option" class="wiggleIconOnHover cursor-pointer flex flex-row gap-2 p-2 rounded-lg hover:bg-gray-100 text-gray-900 font-mono">
                            <div class="flex items-center justify-center w-5 h-full">
                                <img src="/assets/icons/master-plan.png" alt="" class="w-full h-auto">
                            </div>
                            <div class="flex items-center">
                                <h4 class="text-sm text-gray-600">Gestion budgétaire</h4>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div id="sidebar-items" class="overflow-y-scroll py-5">
                <?php Flight::render($items); ?>
            </div>

        </div>
        <div class="w-4/5 min-h-screen bg-white fixed right-3 top-3 p-3 rounded-r-2xl">
            <div id="dashboard-content" class="w-full max-h-screen overflow-y-scroll pb-20">
                <?php Flight::render($content); ?>
            </div>
        </div>

        <div id="popupContainer" class="w-full h-full"></div>

    </div>
</body>
<script src="/assets/js/dashboard.js"></script>
</html>
