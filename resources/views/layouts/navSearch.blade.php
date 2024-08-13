<div class="w-full">
    <div class="w-full">
        <form action="" class="w-full">
            @csrf
            <div class="search_navigation_parameters w-full">
                <div class="w-full flex gap-4 items-center">
                    <div class="w-[50%]  flex flex-col gap-2">
                        <label for="searchDestination" class="font-bold">Destination ? <span class="font-normal text-[#FF2D20]">(Obligatoire)</span></label>
                        <input class="border border-black py-2 px-2 outline-none" type="text" name="searchDestination" id="searchDestination" placeholder="Rechercher une destination" required>
                    </div>
                    <!-- dates -->
                    <div class="w-full flex flex-col gap-2">
                        <label for="" class="font-bold">Quand ?</label>
                        <div class="w-full flex gap-2">
                            <div id="date-range-picker" date-rangepicker class="flex items-center ">
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input id="datepicker-range-start" name="start" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date start">
                                </div>
                                <span class="mx-4 text-gray-500">to</span>
                                <div class="relative">
                                    <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                                        <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                        <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                                        </svg>
                                    </div>
                                    <input id="datepicker-range-end" name="end" type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date end">
                                </div>
                            </div>

                            <!-- nombres chambres -->
                            <div class=" w-[30%] chambre_btn cursor-pointer border rounded-[5px] ">
                                <div class="w-full flex items-center justify-between px-2 py-2">
                                    <span>1 chambres, 1 client</span>
                                </div>
                            </div>

                            <button class="w-[30%] bg-[rgb(16,76,151)] text-white rounded-[5px] px-4 text-[13px]" type="submit">Trouver un hotel</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>




