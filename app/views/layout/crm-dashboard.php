<div class="w-full h-fit flex flex-row justify-end gap-5 px-5">
    <div class="flex flex-row gap-3">
        <div class="flex flex-row gap-5 items-center px-5">
            <a href="">
                <div class="wiggleIconOnHover flex flex-row gap-2">
                    <div class="flex items-center justify-center w-4 h-full">
                        <img src="/assets/icons/file-import.png" alt="" class="w-full h-auto contrast-50">
                    </div>
                    <div class="">
                        <h4 class="text-sm font-semibold text-gray-800">Import</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="wiggleIconOnHover flex flex-row gap-2">
                    <div class="flex items-center justify-center w-4 h-full">
                        <img src="/assets/icons/download.png" alt="" class="w-full h-auto contrast-50">
                    </div>
                    <div class="">
                        <h4 class="text-sm font-semibold text-gray-800">Export</h4>
                    </div>
                </div>
            </a>
            <a href="">
                <div class="wiggleIconOnHover flex flex-row gap-2">
                    <div class="flex items-center justify-center w-4 h-full">
                        <img src="/assets/icons/envelope-dot.png" alt="" class="w-full h-auto contrast-50">
                    </div>
                    <div class="">
                        <h4 class="text-sm font-semibold text-gray-800">Notifications</h4>
                    </div>
                </div>
            </a>
        </div>
        <div class="flex flex-row gap-2 px-5 py-1 border-l-1 border-gray-800">
            <h3 class="text-sm font-semibold text-gray-900">Simulation CRM</h3>
        </div>
    </div>
</div>
<div class="w-full h-fit p-5">
    <?php Flight::render($page); ?>
</div>